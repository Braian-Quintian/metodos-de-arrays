<?php
// Paso 1: Crear los arrays de planetas
$sistemaSolar1 = array("Planeta1", "Planeta2", "Planeta3");
$sistemaSolar2 = array("Planeta2", "Planeta3", "Planeta4", "Planeta5");

// Paso 2: Encontrar los planetas comunes
$planetasComunes = array_intersect($sistemaSolar1, $sistemaSolar2);

// Paso 3: Redirigir al archivo index.php con los planetas comunes
header("Location: index.php?planetas=" . urlencode(serialize($planetasComunes)));
exit();
