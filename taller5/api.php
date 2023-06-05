<?php
if (isset($_POST['calcularMasa'])) {
    // Paso 1: Crear el array de naves espaciales
    $naves = array(
        "nave1" => 1500,
        "nave2" => 2000,
        "nave3" => 1750,
        "nave4" => 3000,
        "nave5" => 2500
    );

    // Paso 2: Calcular la masa total (suma de las masas de las naves)
    $masaTotal = array_sum($naves);

    // Paso 3: Redireccionar a index.php con la masa total como parámetro en la URL
    header("Location: index.php?masaTotal=" . urlencode(strval($masaTotal)));
    exit;
}
