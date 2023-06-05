<?php
$planetas = array(
    "Sol" => 1,
    "Mercurio" => 2,
    "Venus" => 3,
    "Tierra" => 4,
    "Marte" => 5,
    "Jupiter" => 6,
    "Saturno" => 7,
    "Urano" => 8,
    "Neptuno" => 9
);

$seleccion = $_POST['planetas'];

$planetasInvertidos = array_flip($planetas);
$planetaSeleccionado = $planetasInvertidos[$seleccion] ?? null;

if ($planetaSeleccionado) {
    $mensaje = "El planeta seleccionado es: " . $planetaSeleccionado;
    $imagen = "assets/img/" . strtolower($planetaSeleccionado) . ".jpeg";
} else {
    $mensaje = "No se ha seleccionado ningún planeta válido";
    $imagen = "";
}

header("Location: index.php?mensaje=" . urlencode($mensaje) . "&imagen=" . urlencode($imagen));
exit;
