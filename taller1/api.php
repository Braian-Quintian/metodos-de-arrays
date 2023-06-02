<?php
$planetas = array(
    "Sol" => array(
        "numero" => 1,
        "imagen" => "https://images.pexels.com/photos/87611/sun-fireball-solar-flare-sunlight-87611.jpeg"
    ),
    "Mercurio" => 2,
    "Venus" => 3,
    "Tierra" => 4,
    "Marte" => 5,
    "Jupiter" => 6,
    "Saturno" => 7,
    "Urano" => 8,
    "Neptuno" => 9,
);

$seleccion = $_POST['planetas'];

if (isset($planetas[$seleccion])) {
    $planetaSeleccionado = $planetas[$seleccion];
    if (is_array($planetaSeleccionado)) {
        $mensaje = "El planeta seleccionado es: " . $seleccion;
        $imagen = $planetaSeleccionado['imagen'];
    } else {
        $mensaje = "No se ha seleccionado ningún planeta válido";
        $imagen = "";
    }
} else {
    $mensaje = "No se ha seleccionado ningún planeta válido";
    $imagen = "";
}

header("Location: index.php?mensaje=" . urlencode($mensaje) . "&imagen=" . urlencode($imagen));
exit;
