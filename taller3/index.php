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
                    <li class="nav-item"><a href="../taller6/index.php" class="nav-link" data-link="taller6">Taller 6</a></li>
                    <li class="nav-item"><a href="../taller7/index.php" class="nav-link" data-link="taller7">Taller 7</a></li>
                    <li class="nav-item"><a href="../taller8/index.php" class="nav-link" data-link="taller8">Taller 8</a></li>
                    <li class="nav-item"><a href="../taller9/index.php" class="nav-link" data-link="taller9">Taller 9</a></li>
                    <li class="nav-item"><a href="../taller10/index.php" class="nav-link" data-link="taller10">Taller 10</a></li>
                    <li class="nav-item"><a href="../taller11/index.php" class="nav-link" data-link="taller11">Taller 11</a></li>
                    <li class="nav-item"><a href="../taller12/index.php" class="nav-link" data-link="taller12">Taller 12</a></li>
                    <li class="nav-item"><a href="../taller13/index.php" class="nav-link" data-link="taller13">Taller 13</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <div class="formulario">
                <div class="card">
                    <h1>Planetas</h1>
                    <div class="filter-buttons">
                        <form action="api.php" method="POST">
                            <input type="hidden" name="filtro" value="habitables">
                            <button type="submit">Habitables</button>
                        </form>

                        <form action="api.php" method="POST">
                            <input type="hidden" name="filtro" value="no-habitables">
                            <button type="submit">No habitables</button>
                        </form>
                    </div>
                    <?php
                    $mensajeFiltrado = $_GET['mensajeFiltrado'] ?? "";

                    if (!empty($mensajeFiltrado)) {
                        echo "<div class='mensaje'>$mensajeFiltrado</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>