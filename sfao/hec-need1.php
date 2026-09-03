<?php
$file = 'hits.dat';
$new_count = file_get_contents($file) + 1;
file_put_contents($file, $new_count, LOCK_EX);
header('Location: /sfao/scholarships.php');
?>