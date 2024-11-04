<?php
$host = "sql201.infinityfree.com";
$dbname = "if0_37649053_todolist";
$username = "if0_37649053";
$password = "wKB0JSLP2O04";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>
