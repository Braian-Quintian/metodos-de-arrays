<?php
// Paso 1: Obtener los planetas ingresados en cada sistema solar
$sistema1 = isset($_POST['sistema1']) ? $_POST['sistema1'] : '';
$sistema2 = isset($_POST['sistema2']) ? $_POST['sistema2'] : '';

// Paso 2: Convertir los planetas en arrays
$planetas_sistema1 = explode(',', $sistema1);
$planetas_sistema2 = explode(',', $sistema2);

// Paso 3: Encontrar los planetas únicos en cada sistema solar
$planetas_unicos_sistema1 = array_diff($planetas_sistema1, $planetas_sistema2);
$planetas_unicos_sistema2 = array_diff($planetas_sistema2, $planetas_sistema1);

// Paso 4: Redirigir al archivo index.php con los planetas únicos en cada sistema solar
header("Location: index.php?planetas_sistema1=" . urlencode(implode(',', $planetas_unicos_sistema1)) . "&planetas_sistema2=" . urlencode(implode(',', $planetas_unicos_sistema2)));
exit();
