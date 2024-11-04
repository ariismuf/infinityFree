<?php
global $pdo;
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $task = $_POST["task"];
    $status = $_POST["status"];

    try {
        $sql = "INSERT INTO tasks (task, status) VALUES (:task, :status)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':task', $task);
        $stmt->bindParam(':status', $status);
        $stmt->execute();

        echo "Tarea añadida correctamente.";
    } catch (PDOException $e) {
        echo "Error al añadir la tarea: " . $e->getMessage();
    }
}
?>
<a href="index.html">Volver</a>
