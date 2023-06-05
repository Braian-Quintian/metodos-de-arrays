<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres | 4 </title>
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
                    <li class="nav-item"><a href="../taller3/index.php" class="nav-link" data-link="taller3">Taller 3</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link" data-link="taller4">Taller 4</a></li>
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
        <main>
            <div class="formulario centered">
                <div class="card">
                    <form action="api.php" method="POST">
                        <h1>Sistema Solar</h1>
                        <select name="planetas" id="planetas">
                            <option>Seleccionar</option>
                            <option value="sol">Sol</option>
                            <option value="mercurio">Mercurio</option>
                            <option value="venus">Venus</option>
                            <option value="tierra">Tierra</option>
                            <option value="marte">Marte</option>
                            <option value="jupiter">Jupiter</option>
                            <option value="saturno">Saturno</option>
                            <option value="urano">Urano</option>
                            <option value="neptuno">Neptuno</option>
                        </select>
                        <button type="submit">Calcular gravedad</button>
                    </form>
                    <div class="mensaje">
                        <?php
                        $mensaje = $_GET['mensaje'] ?? "";

                        if (!empty($mensaje)) {
                            echo $mensaje;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>