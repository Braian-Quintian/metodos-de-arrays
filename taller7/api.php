<?php
// Paso 1: Crear el array de naves espaciales
$flota = array(
    "Nave1",
    "Nave2",
    "Nave3",
    "Nave4",
    "Nave5"
);

// Paso 2: Verificar la existencia de la nave espacial
$mensaje = '';

if (isset($_POST['verificar'])) {
    $naveBuscada = $_POST['verificar'];
    $naveBuscada = ucwords(strtolower($naveBuscada)); // Convertir a mayúsculas la primera letra de cada palabra
    $indice = array_search($naveBuscada, $flota);

    if ($indice !== false) {
        $mensaje = "La nave espacial '$naveBuscada' está presente en la flota.";
    } else {
        $mensaje = "La nave espacial '$naveBuscada' no está presente en la flota.";
    }
}

// Paso 3: Redirigir al archivo index.php con los resultados
header("Location: index.php?mensaje=" . urlencode($mensaje));
exit();
