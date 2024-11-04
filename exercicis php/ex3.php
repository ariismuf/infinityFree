<?php
$palabras = [
    "son" => "hijo",
    "bassement" => "sotano",
    "murder" => "Asesinato",
    "crab" => "cangrejo",
    "purse" => "bolso"
];
echo "<table border='1'>";
echo "<tr><th>Ingles</th><th>Castellano</th>";

foreach ($palabras as $ingles => $espanol) {
    echo "<tr><td>$ingles</td><td>$espanol</td>";
}

echo "</table>";
?>