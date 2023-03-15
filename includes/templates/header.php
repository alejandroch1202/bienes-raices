<?php
if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION["login"] ?? false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/bienesraices/build/css/app.css" />
    <title>Real State</title>
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''  ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/bienesraices/index.php">
                    <img src="/bienesraices/build/img/logo.svg" alt="Real State Logo" />
                </a>

                <div class="mobile-menu">
                    <img src="/bienesraices/build/img/barras.svg" alt="icono menu responsive" />
                </div>

                <div class="right">
                    <img src="/bienesraices/build/img/dark-mode.svg" alt="dark mode icon" class="dark-mode-button" />
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contactos.php">Contactos</a>
                        <?php if ($auth) { ?>
                            <a href="/bienesraices/logout.php">Logout</a>

                        <?php } ?>

                    </nav>
                </div>
            </div>
            <!-- bar end -->
            <?php if ($inicio) { ?>
                <h1>Sell of houses and apartments deluxe and exclsuives</h1>
            <?php } ?>
        </div>
    </header>