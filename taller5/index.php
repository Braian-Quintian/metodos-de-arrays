<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres | 3</title>
    <!-- CSS PRINCIPAL -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- CSS SEGUNDARIO -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="content">
        <div class="header">
            <nav class="main-nav">
                <ul>
                    <li class="nav-item"><a href="../index.html" class="nav-link" data-link="inicio">Inicio</a></li>
                    <li class="nav-item"><a href="../taller1/index.php" class="nav-link" data-link="taller1">Taller 1</a></li>
                    <li class="nav-item"><a href="../taller2/index.php" class="nav-link" data-link="taller2">Taller 2</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link" data-link="taller3">Taller 3</a></li>
                    <li class="nav-item"><a href="../taller4/index.php" class="nav-link" data-link="taller4">Taller 4</a></li>
                    <li class="nav-item"><a href="../taller5/index.php" class="nav-link" data-link="taller5">Taller 5</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <div class="formulario">
                <div class="card">
                    <h1>Planetas</h1>
                    <form action="api.php" method="POST">
                        <input type="hidden" name="calcularMasa">
                        <button type="submit">Calcular</button>
                    </form>
                    <div class="mensaje">
                        <?php
                        $masaTotal = $_GET['masaTotal'] ?? "";

                        if (!empty($masaTotal)) {
                            echo "<h2>Masa Total de la Flota</h2>";
                            echo "<p>Masa total: " . urldecode($masaTotal) . " kg</p>";

                            // Paso 1: Crear el array de naves espaciales
                            $naves = array(
                                "nave1" => 1500,
                                "nave2" => 2000,
                                "nave3" => 1750,
                                "nave4" => 3000,
                                "nave5" => 2500
                            );

                            echo "<h2>Naves Espaciales</h2>";
                            echo "<ul>";
                            foreach ($naves as $nave => $masa) {
                                echo "<li>$nave: $masa kg</li>";
                            }
                            echo "</ul>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>