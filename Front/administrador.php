<?php
session_start();
include("../BackEnd/adminpri.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/administrador.css">
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
    <style>
    a {
        text-decoration: none;
        color: black;
    }
    </style>
</head>

<body>
    <?php
        $_GET['logged'] = '3';
        include_once('../assets/General/navbarSettings.php');
    ?>
    
    <div class="tituload  p-3">
        <h4 class="text-light "><strong>Productos autorizados y por autorizar</strong></h4>
    </div>

    <div class="autorizados">
        <h4 class="text-light mx-5"><strong>Autorizados</strong></h4>

        <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <!-- Aquí comienzan las tarjetas del carrusel -->

                            <div class="col-md-3">
                                <a href="../Front/eliminar/vistaProductoAdmin.php">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/camisa_blanca.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$300</strong></h5>
                                            <p class="card-text">Camisa blanca</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Agregar más tarjetas aquí -->
                            <div class="col-md-3">
                                <a href="../Front/eliminar/vistaProductoAdmin.php">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/cosplay_chino.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$200</strong></h5>
                                            <p class="card-text">Ropa china</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="../Front/eliminar/vistaProductoAdmin.php">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/cosplay_miku.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$1000</strong></h5>
                                            <p class="card-text">Hatsune Miku cosplay</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="../Front/eliminar/vistaProductoAdmin.php">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/Gojo.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$6000</strong></h5>
                                            <p class="card-text">Gojo cosplay maid</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <!-- Continuación de las tarjetas del carrusel -->
                            <div class="col-md-3">
                                <a href="../Front/eliminar/vistaProductoAdmin.php">
                                    <div class="card productocard" style="width: 18rem;">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/camisa_linda.png"
                                            class="card-img-top" alt="Producto 5"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$450</strong></h5>
                                            <p class="card-text">Vestido lindo</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Agregar más tarjetas aquí -->
                            <div class="col-md-3">
                                <a href="../Front/eliminar/vistaProductoAdmin.php">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/sirvienta.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$8000</strong></h5>
                                            <p class="card-text">Traje lindo de sirvienta</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="../Front/eliminar/vistaProductoAdmin.php">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_blanco.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$4000</strong></h5>
                                            <p class="card-text">Vestido blanco</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="../Front/eliminar/vistaProductoAdmin.php">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindo.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$500</strong></h5>
                                            <p class="card-text">Vestido de temporada</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Agregar más elementos "carousel-item" según sea necesario -->
                </div>
                <a class="carousel-control-prev" href="#productCarousel" role="button" data-bs-slide="prev"
                    style="margin-left: -15%;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#productCarousel" role="button" data-bs-slide="next"
                    style="margin-right: -15%;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </a>
            </div>
        </div>

    </div>

    <div class="autorizados">
        <h4 class="text-light mx-5"><strong>Por autorizar</strong></h4>

        <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
            <div id="productCarouseld" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <!-- Aquí comienzan las tarjetas del carrusel -->
                            <div class="col-md-3">
                                <a data-bs-toggle="modal" data-bs-target="#pconfirmarp">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/camisa_blanca.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$300</strong></h5>
                                            <p class="card-text">Camisa blanca</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Agregar más tarjetas aquí -->
                            <div class="col-md-3">
                                <a data-bs-toggle="modal" data-bs-target="#pconfirmarp">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/cosplay_chino.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$200</strong></h5>
                                            <p class="card-text">Ropa china</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a data-bs-toggle="modal" data-bs-target="#pconfirmarp">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/cosplay_miku.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$1000</strong></h5>
                                            <p class="card-text">Hatsune Miku cosplay</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a data-bs-toggle="modal" data-bs-target="#pconfirmarp">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/Gojo.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$6000</strong></h5>
                                            <p class="card-text">Gojo cosplay maid</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <!-- Continuación de las tarjetas del carrusel -->
                            <div class="col-md-3">
                                <a data-bs-toggle="modal" data-bs-target="#pconfirmarp">
                                    <div class="card productocard" style="width: 18rem;">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/camisa_linda.png"
                                            class="card-img-top" alt="Producto 5"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$450</strong></h5>
                                            <p class="card-text">Vestido lindo</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Agregar más tarjetas aquí -->
                            <div class="col-md-3">
                                <a data-bs-toggle="modal" data-bs-target="#pconfirmarp">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/sirvienta.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$8000</strong></h5>
                                            <p class="card-text">Traje lindo de sirvienta</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a data-bs-toggle="modal" data-bs-target="#pconfirmarp">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_blanco.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$4000</strong></h5>
                                            <p class="card-text">Vestido blanco</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a data-bs-toggle="modal" data-bs-target="#pconfirmarp">
                                    <div class="card productocard" style="width: 18rem; ">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindo.png"
                                            class="card-img-top" alt="Camisa blanca"
                                            style="object-fit: cover; height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><strong>MXN$500</strong></h5>
                                            <p class="card-text">Vestido de temporada</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Agregar más elementos "carousel-item" según sea necesario -->
                </div>
                <a class="carousel-control-prev" href="#productCarouseld" role="button" data-bs-slide="prev"
                    style="margin-left: -15%;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#productCarouseld" role="button" data-bs-slide="next"
                    style="margin-right: -15%;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </a>
            </div>
        </div>

    </div>

    <div class="modal fade" id="pconfirmarp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabelped">Autorizar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Quieres autorizar el pedido?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger">Confirmar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="http://localhost/prueba/PWCI/Front/js/administrador.js"></script>

    <?php
        include_once('../assets/General/footer.php');
    ?>

</body>

</html>