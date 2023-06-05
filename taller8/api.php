<?php
// Paso 1: Crear el array de planetas
$planetas = array(
    "Mercurio",
    "Venus",
    "Tierra",
    "Marte",
    "Júpiter",
    "Saturno",
    "Urano",
    "Neptuno"
);

// Paso 2: Generar un índice aleatorio
$indiceAleatorio = array_rand($planetas);

// Paso 3: Usar el índice aleatorio para seleccionar un planeta
$planetaSeleccionado = $planetas[$indiceAleatorio];

// Paso 4: Redirigir al archivo index.php con el planeta seleccionado
header("Location: index.php?planeta=" . urlencode($planetaSeleccionado));
exit();
?>
