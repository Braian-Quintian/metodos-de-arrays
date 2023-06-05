<?php
// Paso 1: Crear el array de planetas
$planetas = ['Mercurio', 'Venus', 'Tierra', 'Marte', 'Jupiter', 'Saturno', 'Urano', 'Neptuno'];

// Paso 2: Invertir el orden de los planetas
$planetasInvertidos = array_reverse($planetas);

// Paso 3: Imprimir los planetas invertidos
foreach ($planetasInvertidos as $planeta) {
echo $planeta . "<br>";
}
?>