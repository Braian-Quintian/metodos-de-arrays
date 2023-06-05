<?php
$planetas = array(
    "Mercurio" => false,
    "Venus" => false,
    "Tierra" => true,
    "Marte" => true,
    "Júpiter" => false,
    "Saturno" => false,
    "Urano" => false,
    "Neptuno" => false
);

$filtro = $_POST['filtro'] ?? "";

if ($filtro === "habitables") {
    $planetasFiltrados = array_filter($planetas, function ($habitable) {
        return $habitable;
    });
    $mensajeFiltrado = "Planetas habitables:<br>";
    foreach ($planetasFiltrados as $planeta => $habitable) {
        $mensajeFiltrado .= $planeta . "<br>";
    }
} elseif ($filtro === "no-habitables") {
    $planetasFiltrados = array_filter($planetas, function ($habitable) {
        return !$habitable;
    });
    $mensajeFiltrado = "Planetas no habitables:<br>";
    foreach ($planetasFiltrados as $planeta => $habitable) {
        $mensajeFiltrado .= $planeta . "<br>";
    }
} else {
    $mensajeFiltrado = "";
}

header("Location: index.php?mensajeFiltrado=" . urlencode($mensajeFiltrado));
exit;
