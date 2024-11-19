<?php
if (isset($_GET['nombre']) && isset($_GET['dni']) && isset($_GET['edad'])) {

    $nombre = htmlspecialchars($_GET['nombre']);
    $dni = htmlspecialchars($_GET['dni']);
    $edad = (int) $_GET['edad'];

    echo "<h2>Datos recibidos:</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>DNI: $dni</p>";
    echo "<p>Edad: $edad</p>";
    } else {
         echo "<p>No se recibieron datos válidos.</p>";
 }
 ?>