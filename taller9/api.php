<?php
// Paso 1: Crear el array de especies alienígenas
$especiesAlienigenas = array(
    "Especie1",
    "Especie2",
    "Especie2",
    "Especie2",
    "Especie3",
    "Especie3",
    "Especie4",
    "Especie2",
    "Especie5",
    "Especie6",
    "Especie1"
);

// Paso 2: Eliminar las especies duplicadas
$especiesUnicas = array_unique($especiesAlienigenas);

// Paso 3: Redirigir al archivo index.php con las especies únicas
header("Location: index.php?especies=" . urlencode(serialize($especiesUnicas)));
exit();
