<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres | Inicio</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="content">
        <div class="header">
            <nav class="main-nav">
                <ul>
                    <li class="nav-item"><a href="../index.html" class="nav-link" data-link="incio">Inicio</a></li>
                    <li class="nav-item"><a href="./index.php" class="nav-link" data-link="taller2">Taller 1</a></li>
                    <li class="nav-item"><a href="./taller2/index.php" class="nav-link" data-link="taller3">Taller 2</a></li>
                    <li class="nav-item"><a href="./taller3/index.php" class="nav-link" data-link="taller3">Taller 3</a></li>
                    <li class="nav-item"><a href="./taller4/index.php" class="nav-link" data-link="taller4">Taller 4</a></li>
                    <li class="nav-item"><a href="./taller5/index.php" class="nav-link" data-link="taller5">Taller 5</a></li>
                </ul>
            </nav>
        </div>
        <main>
            <div class="formulario">
                <div class="card">
                    <form action="api.php" method="POST">
                        <h1>Buscar planetas</h1>
                        <select name="planetas">
                            <option>Seleccionar</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                        <button type="submit">Buscar</button>
                    </form>
                    <div class="mensaje">
                        <?php echo isset($_GET['mensaje']) ? $_GET['mensaje'] : ''; ?>
                        <?php if (isset($_GET['imagen']) && $_GET['imagen'] !== '') : ?>
                            <div class="image-container">
                                <img src="<?php echo $_GET['imagen']; ?>" alt="Imagen del planeta">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>