<?php
// Paso 1: Crear el array de planetas
$planetas = [
    "Mercurio",
    "Venus",
    "Tierra",
    "Marte",
    "Júpiter",
    "Saturno",
    "Urano",
    "Neptuno"
];

// Paso 2: Verificar la existencia del planeta
$mensaje = '';
$imagen = '';

if (!empty($_POST['verificar'])) {
    $planetaBuscado = ucwords(strtolower($_POST['verificar'])); // Convertir a mayúsculas la primera letra de cada palabra
    $indice = array_search($planetaBuscado, $planetas, true); // Utilizar la búsqueda estricta

    if ($indice !== false) {
        // El planeta existe en el sistema solar
        $mensaje = "El planeta '$planetaBuscado' existe en el sistema solar.";
        $imagen = "assets/img/" . strtolower($planetaBuscado) . ".jpeg";
    } else {
        // El planeta no existe en el sistema solar
        $mensaje = "El planeta '$planetaBuscado' no existe en el sistema solar.";
    }
}

// Paso 3: Redirigir al archivo index.php con los resultados
$queryParams = http_build_query([
    'mensaje' => $mensaje,
    'imagen' => $imagen
]);
header("Location: index.php?$queryParams");
exit();
