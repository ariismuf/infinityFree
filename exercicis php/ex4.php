<?php
$lunes = [
    "DWEC",
    "DWEC",
    "DWEC",
    "patio",
    "DWES",
    "DWES",
    "DWES",
    ];
$martes = [
    "DWES",
    "DWES",
    "DWES",
    "patio",
    "-",
    "-",
    "-"
];
$miercoles = [
    "DWEC",
    "DWEC",
    "DWEC",
    "patio",
    "DAW",
    "DAW",
    "DAW"
];
$jueves = [
    "DWES",
    "DWES",
    "DIW",
    "patio",
    "DIW",
    "DIW",
    "DIW"
];
$viernes = [
    "DAW",
    "DAW",
    "DAW",
    "patio",
    "DIW",
    "DIW",
    "DIW",
];

$dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];

// Comença la taula
echo "<table border='1'>";
echo "<tr><th>Hora</th><th>" . implode("</th><th>", $dias) . "</th></tr>";

$horas = [
    "08:00 - 09:00",
    "09:00 - 10:00",
    "10:00 - 11:00",
    "11:00 - 12:00",
    "12:00 - 13:00",
    "13:00 - 14:00",
    "14:00 - 15:00"
];

// Itera sobre les hores i mostra les assignatures
foreach ($horas as $index => $hora) {
    echo "<tr><td>$hora</td>";
    echo "<td>{$lunes[$index]}</td>";
    echo "<td>{$martes[$index]}</td>";
    echo "<td>{$miercoles[$index]}</td>";
    echo "<td>{$jueves[$index]}</td>";
    echo "<td>{$viernes[$index]}</td>";
    echo "</tr>";
}
echo "</table>";
?>