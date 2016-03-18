<?php
ini_set('display_errors', 'on');
$file = 'data.php';

$_POST = array_map('htmlspecialchars', $_POST);
$json = json_encode($_POST);

// Write the contents back to the file
file_put_contents($file, "$json\n", FILE_APPEND | LOCK_EX);

echo "<a href='data.php'>View Data</a>"
?>
