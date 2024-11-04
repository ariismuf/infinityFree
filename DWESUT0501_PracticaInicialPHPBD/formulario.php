<?php
global $pdo;
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $task = $_POST["task"];
    $status = 'pending';

    try {
        $sql = "INSERT INTO tasks (task, status) VALUES (:task, :status)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':task', $task);
        $stmt->bindParam(':status', $status);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Error al añadir la tarea: " . $e->getMessage();
    }
}
?>
