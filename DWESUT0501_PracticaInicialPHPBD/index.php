<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario tareas</title>
</head>
<body>
<h1>Agregar Tarea</h1>
<form action="formulario.php" method="POST">
    <label for="task">Tarea:</label>
    <input type="text" id="task" name="task" required>

    <button type="submit">Añadir Tarea</button>
</form>

<h2>lista de tareas</h2>

<?php include 'tareas.php'; ?>
</body>
</html>