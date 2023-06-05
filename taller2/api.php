<?php
// Paso 1: Decidir cuántos planetas tendrá el sistema solar
$cantidadPlanetas = isset($_POST['cantidad-planetas']) ? intval($_POST['cantidad-planetas']) : 0;

// Paso 2: Validar si se envió un número válido
if ($cantidadPlanetas <= 0) {
    header("Location: index.php");
    exit;
}

// Paso 3: Crear el array del sistema solar
$sistemaSolar = array_reduce(range(1, $cantidadPlanetas), function ($sistema, $i) {
    $planeta = "Planeta $i";
    $estado = "Deshabitado";
    $sistema[$planeta] = $estado;
    return $sistema;
}, []);

// Paso 4: Verificar el estado inicial del sistema solar
$mensaje = "Estado inicial del sistema solar:<br>";
foreach ($sistemaSolar as $planeta => $estado) {
    $mensaje .= $planeta . ": " . $estado . "<br>";
}

// Redirigir de vuelta a index.php con los datos
$imagen = "assets/img/sistema.jpg";

header("Location: index.php?mensaje=" . urlencode($mensaje) . "&imagen=" . urlencode($imagen));
exit;
