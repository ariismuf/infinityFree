
<?php

    if (isset($_POST['nombre']) && isset($_POST['dni']) && isset($_POST['edad'])) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $dni = htmlspecialchars($_POST['dni']);
        $edad = (int) $_POST['edad'];

         echo "<h2>Datos recibidos:</h2>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>DNI: $dni</p>";
            echo "<p>Edad: $edad</p>";
        }

?>