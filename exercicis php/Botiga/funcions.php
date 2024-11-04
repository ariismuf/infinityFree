<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Producte {
    public $nom;
    public $descripcio;
    public $preu;

    public $categories = [];

    function __construct($nom, $descripcio, $preu) {
        $this->nom = $nom;
        $this->descripcio = $descripcio;
        $this->preu = $preu;
    }

    public function getNom() {
        return $this->nom;
    }
    public function getDescripcio() {
        return $this->descripcio;
    }
    public function getPreu() {
        return $this->preu;
    }
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }
    public function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;
        return $this;
    }
    public function setPreu($preu) {
        $this->preu = $preu;
        return $this;
    }

}

class Categoria {
    public $tipo;
    public $genero;
    function __construct($tipo, $genero) {
        $this->tipo = $tipo;
        $this->genero = $genero;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getGenero() {
        return $this->genero;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }
    public function setGenero($genero) {
        $this->genero = $genero;
        return $this;
    }

}

function crearProducte($nom, $descripcio, $preu) {
    // Crear objetos de las clase Producte
    $producte = new Producte($nom, $descripcio, $preu);
    return $producte;
}


function crearCategoria($nom, $descripcio){
    $categoria = new Categoria($nom, $descripcio);
    return $categoria;

}
function agregarCategoriaAProducte(Producte $producte, Categoria $categoria) {
    $producte->categories[] = $categoria;
    echo "<p>Categoria '{$categoria->tipo}' agregada al producto '{$producte->nom}'</p>";
}

function obtenirProductesPorCategoria(Categoria $categoria) {

    global $productes; // Variable global per a productes creats
    $productesCategoria = [];

    if (!is_array($productes)|| empty($productes)) {
        return $productesCategoria; // Retornar array vacío si no está inicializado
    }

    foreach ($productes as $producte) {
        foreach ($producte->categories as $cat) {
            if ($cat->tipo == $categoria->tipo) {
                $productesCategoria[] = $producte;
                break;
            }
        }
    }

    return $productesCategoria;
}

function mostrarProductes(array $productes) {
    if (empty($productes)) {
        echo "<p>No hay productos en esta categoría.</p>"; // Mensaje si no hay productos
        return;
    }
    else{
        foreach ($productes as $producte) {
            echo "<p><strong>Nom:</strong> {$producte->nom} - <strong>Preu:</strong> {$producte->preu} €</p>";
        }
    }
}

// Mostrar el detall d'un producte
function mostrarDetallProducte(Producte $producte) {
    echo "<p><strong>Nom:</strong> {$producte->nom}</p>";
    echo "<p><strong>Descripció:</strong> {$producte->descripcio}</p>";
    echo "<p><strong>Preu:</strong> {$producte->preu} €</p>";
    echo "<p><strong>Categories:</strong> ";

    $nomsCategories = array_map(function($cat) {
        return $cat->nom;
    }, $producte->categories);

    echo implode(', ', $nomsCategories) . "</p>";
}
?>
</body>
</html>