<?php
$gravedadPlanetas = array(
    "sol" => 27.9,
    "mercurio" => 0.38,
    "venus" => 0.91,
    "tierra" => 1,
    "marte" => 0.38,
    "jupiter" => 2.54,
    "saturno" => 1.08,
    "urano" => 0.91,
    "neptuno" => 1.19
);

function calcularGravedadReal($gravedad, $gravedadTierra)
{
    return $gravedad * $gravedadTierra;
}

if (isset($_POST['planetas'])) {
    $planetaSeleccionado = $_POST['planetas'];
    $gravedadTierra = 9.8;

    if (!empty($planetaSeleccionado) && isset($gravedadPlanetas[$planetaSeleccionado])) {
        $gravedad = $gravedadPlanetas[$planetaSeleccionado];
        $gravedadReal = calcularGravedadReal($gravedad, $gravedadTierra);
        $mensaje = "La gravedad en $planetaSeleccionado es de aproximadamente " . round($gravedadReal, 2) . " m/s².";
        header("Location: index.php?mensaje=" . urlencode($mensaje));
        exit;
    } else {
        $mensaje = "Seleccione un planeta válido.";
        header("Location: index.php?mensaje=" . urlencode($mensaje));
        exit;
    }
}
