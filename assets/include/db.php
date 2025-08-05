<?php
require_once("./config.php");

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
};
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
try {
    $pdo = new PDO ($dsn, $user, $pwd);
    if ($pdo) {
        debug_to_console('Successfully connected to MySQL/MariaDB!');
    }

} catch (PDOExeption $e) {
    echo $e->getMessage();
}