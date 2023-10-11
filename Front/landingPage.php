<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/landing.css">
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
    <style>
    body {
        background-image: url(http://localhost/prueba/PWCI/img/landingPageImg/fondoLandingxd.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        overflow-x: hidden;
    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <?php
        $_GET['logged'] = '0';
        include_once('../assets/General/navbarSettings.php');
    ?>

    <div class="row" style="position: relative; background-color: black;">
        <div class="background-image"
            style="background-image: url('http://localhost/prueba/PWCI/img/landingPageImg/Landingimg.gif'); opacity: 0.7;">

        </div>
        <div class="centered-text">
            <h1 class="letraFuente">Bienvenido a Micherry</h1>
            <h2 class="letraFuente">¡Tenemos el mejor catálogo de productos lindos del mundo!</h2>
            <a href="registro.php" class="btn btnColorCard btnHover text-white my-3">Ver productos</a>

        </div>
    </div>
    <div class="row ">
        <div class="text-center letraFuente " style="color:#5d0c48">
            <h2 class="py-5">¡Disfruta de todos los articulos que tenemos para ti!</h2>
            <h4> Manejamos ropa de calidad </h4>
        </div>
    </div>

    <div class="row">
        <div class="image-container text-center">
            <img src="http://localhost/prueba/PWCI/img/landingPageImg/sueterRosa.jpg" alt="Imagen 1">
            <img src="http://localhost/prueba/PWCI/img/landingPageImg/sueter2.jpg" alt="Imagen 2">
            <img src="http://localhost/prueba/PWCI/img/landingPageImg/sueter3.jpg" alt="Imagen 3">
        </div>
    </div>

    <div class="row ">
        <div class="text-center letraFuente ">
            <h2 class="py-5">¡Productos escolares!</h2>
            <h4>Mochilas con accesorios</h4>
        </div>
    </div>
    <div class="row">
        <div class="image-container text-center ">
            <img src="http://localhost/prueba/PWCI/img/landingPageImg/mochila.jpg" alt="Imagen 1">
            <img src="http://localhost/prueba/PWCI/img/landingPageImg/mochila2.jpg" alt="Imagen 2">
            <img src="http://localhost/prueba/PWCI/img/landingPageImg/mochila3.jpg" alt="Imagen 3">
        </div>
    </div>
    <div class="row ">
        <div class="text-center letraFuente " style="color:#5d0c48">
            <h2 class="py-5">¡Área de Informática!</h2>
            <h4>Computadoras, teclados, consolas...</h4>
        </div>
    </div>
    <div class="row">
        <div class="image-container text-center">
            <img src="http://localhost/prueba/PWCI/img/landingPageImg/consola.jpg" alt="Imagen 1">
            <img src="http://localhost/prueba/PWCI/img/landingPageImg/teclado.jpg" alt="Imagen 2">
            <img src="http://localhost/prueba/PWCI/img/landingPageImg/Mac.jpg" alt="Imagen 3">
        </div>
    </div>
    <div class="text-center letraFuente">
            <h2 class=" py-5">¡Y mucho más!</h2>
        <h4>Inicia sesión para ver nuestra pagina principal</h4>
        <a href="login.php" class="btn btnColorCard btnHover text-white mx-5 my-5">Iniciar sesión</a>
    </div>
    </div>

    <?php
        include_once('../assets/General/footer.php');
    ?>

</body>

</html>