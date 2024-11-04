<?php
global $pdo;
include 'conexion.php';

try {
    $sql = "SELECT * FROM tasks";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Tarea</th>
                <th>Estado</th>
            </tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>" . htmlspecialchars($row['id']) . "</td>
                <td>" . htmlspecialchars($row['task']) . "</td>
                <td>" . htmlspecialchars($row['status']) . "</td>
              </tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    echo "Error al mostrar las tareas: " . $e->getMessage();
}
?>