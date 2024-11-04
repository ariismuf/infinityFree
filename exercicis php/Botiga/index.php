<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>
<body>
<?php

require_once 'funcions.php';

$productes = [];
// Dades inicials (exemple)

$producte1 = crearProducte('Samarreta', 'Samarreta de cotó', 19.99);

$producte2 = crearProducte('Pantalons', 'Pantalons vaquer', 39.99);

$categoria1 = crearCategoria('Roba', 'Secció de roba');

$categoria2 = crearCategoria('Home', 'Productes per a home');

agregarCategoriaAProducte($producte1, $categoria1);

agregarCategoriaAProducte($producte1, $categoria2);

agregarCategoriaAProducte($producte2, $categoria1);


$productes[] = $producte1;
$productes[] = $producte2;
// Mostrar productes de la categoria "Roba"

$productesRoba = obtenirProductesPorCategoria($categoria1);

mostrarProductes($productesRoba);
?>
</body>
</html>
