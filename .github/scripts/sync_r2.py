"""
Keeps the R2 bucket in sync with binary assets committed to this repo.

vercel.json redirects requests for these extensions straight to R2 and
.vercelignore excludes them from the Vercel deployment, so a file only
works on the live site once it exists in R2 under the same path. This
script runs in CI on every push to main and uploads (or deletes) just the
files that changed in that push, so nobody has to remember a manual sync
step when adding a new PDF/image/etc.
"""
import os
import subprocess
import sys

import boto3
from botocore.config import Config

BINARY_EXTS = {
    "pdf", "jpg", "jpeg", "png", "gif", "doc", "docx", "xls", "xlsx",
    "ppt", "pptx", "zip", "rar", "mp3", "mp4", "bmp", "webp", "swf",
}

BEFORE = os.environ.get("GIT_DIFF_BEFORE", "")
AFTER = os.environ.get("GIT_DIFF_AFTER", "HEAD")


def changed_files():
    """Yields (status, path) pairs; a rename yields a delete for the old
    path followed by an add for the new one."""
    # BEFORE is all-zeros on the branch's first push (no prior commit to
    # diff against) - fall back to whatever the last commit touched.
    if BEFORE and set(BEFORE) != {"0"}:
        args = ["git", "diff", "--name-status", "-M", BEFORE, AFTER]
    else:
        args = ["git", "diff-tree", "--no-commit-id", "--name-status", "-M", "-r", AFTER]

    out = subprocess.run(args, capture_output=True, text=True, check=True).stdout

    for line in out.splitlines():
        if not line.strip():
            continue
        parts = line.split("\t")
        status = parts[0][0]
        if status == "R":
            yield "D", parts[1]
            yield "A", parts[2]
        else:
            yield status, parts[1]


def main():
    account_id = os.environ["R2_ACCOUNT_ID"]
    access_key = os.environ["R2_ACCESS_KEY_ID"]
    secret_key = os.environ["R2_SECRET_ACCESS_KEY"]
    bucket = os.environ["R2_BUCKET"]

    s3 = boto3.client(
        "s3",
        endpoint_url=f"https://{account_id}.r2.cloudflarestorage.com",
        aws_access_key_id=access_key,
        aws_secret_access_key=secret_key,
        region_name="auto",
        config=Config(signature_version="s3v4", retries={"max_attempts": 5, "mode": "standard"}),
    )

    uploaded = deleted = failed = 0

    for status, path in changed_files():
        ext = path.rsplit(".", 1)[-1].lower() if "." in path else ""
        if ext not in BINARY_EXTS:
            continue

        key = path.replace("\\", "/")

        if status == "D":
            try:
                s3.delete_object(Bucket=bucket, Key=key)
                print(f"DELETED: {key}")
                deleted += 1
            except Exception as e:
                print(f"FAILED (delete): {key} -> {e}")
                failed += 1
            continue

        if not os.path.isfile(path):
            continue

        try:
            s3.upload_file(path, bucket, key)
            print(f"UPLOADED: {key}")
            uploaded += 1
        except Exception as e:
            print(f"FAILED (upload): {key} -> {e}")
            failed += 1

    print(f"DONE uploaded={uploaded} deleted={deleted} failed={failed}")
    if failed:
        sys.exit(1)


if __name__ == "__main__":
    main()
