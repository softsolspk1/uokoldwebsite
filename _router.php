<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$root = rtrim($_SERVER['DOCUMENT_ROOT'] ?: __DIR__, '/');
$path = $root . $uri;

if (is_dir($path)) {
    $path = rtrim($path, '/') . '/index.php';
} elseif (!is_file($path) && is_file($path . '.php')) {
    $path = $path . '.php';
}

if (is_file($path) && substr($path, -4) === '.php') {
    chdir(dirname($path));
    include $path;
} else {
    http_response_code(404);
    echo 'Not Found';
}
