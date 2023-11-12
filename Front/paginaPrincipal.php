<?php
session_start();
include("../BackEnd/showPrincipal.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/landing.css">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/principalPage.css">
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
    <style>
    body {
        margin: 0;
        padding: 0;
        background-image: url(http://localhost/prueba/PWCI/img/principal/fondoPrincipal.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        overflow-x: hidden;
    }

    .cardColor {
        background: linear-gradient(to left, #fcebff, #fff5ea);
    }

    .btnColorCard {
        background-color: #E484A2;
    }

    .btnHover:hover {
        background-color: #B9B4D9;
    }

    .navColor {
        background-color: #BA3A47;
    }

    .bg-custom-color {
        background-color: #BA3A47 !important;
    }

    a {
        text-decoration: none;
        color: black;
    }
    </style>

</head>

<body>
    <?php
        $_GET['logged'] = '1';
        include_once('../assets/General/navbarSettings.php');
    ?>

    <!--carrusel principal -->
    <div class="container-fluid">
        <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <div class="overlay-image">
                        <img src="http://localhost/prueba/PWCI/img/principal/bannerCam.png"
                            class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="1000">
                    <div class="overlay-image">
                        <img src="http://localhost/prueba/PWCI/img/principal/banneraudi.png"
                            class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-image">
                        <img src="http://localhost/prueba/PWCI/img/principal/bannerNike.png"
                            class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- cards -->
    <div class="row p-5">
        <div class="col-12  ">
            <h5 class="letraFuente ">Recomendados</h5>
            <div class="carrusel p-5">
                <?php 
                if ($productosAceptados !== null){
                    foreach ($productosAceptados as $productoas){
                        echo '<div class="elemento">
                            <div class="col-2">
                                <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">
                                    <div class="dropdown">
                                        <button class="heart-button text-lg-end text-md-end text-sm-end my-0 "
                                            data-bs-toggle="dropdown">
                                            <span class="heart-icon">&#x2665;</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Lista 1</a></li>
                                            <li><a class="dropdown-item" href="#">Lista 2</a></li>
                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#crearLista">Crear lista</a></li>
                                        </ul>
                                    </div>
                                    <a href="../Front/vistaProducto.php?idProductoEn=' . $productoas['id_Producto'] . '">
                                        <div class="d-flex flex-column align-items-center">
                                            <img src="data:image/png;base64,' . base64_encode($productoas['primera_imagen']) . '" class="card-img-top fixed-image" alt="' . $productoas['nombre'] . '">
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-4">
                                                        <div class="badge rounded-pill btnColorCard">' . $productoas['nombre'] . '</div>
                                                    </div>
                                                    <div class="col-8 text-end">
                                                        <div class="price-hp"><strong>MXN$' . $productoas['precio'] . '</strong></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>';
                    }
                } else{
                    echo '<div class="elemento">
                        <div class="col-2">
                            <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>No productos encontrados</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
                <!--agrega mas aqui -->
            </div>

            <div class="py-5">
                <h5 class="letraFuente">Mas vendidos</h5>
                <div class="carrusel p-5">
                    <div class="elemento">
                        <div class="col-2">
                            <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">

                                <div class="dropdown">
                                    <button class="heart-button text-lg-end text-md-end text-sm-end my-0 "
                                        data-bs-toggle="dropdown">
                                        <span class="heart-icon">&#x2665;</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Lista 1</a></li>
                                        <li><a class="dropdown-item" href="#">Lista 2</a></li>
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#crearLista">Crear lista</a></li>
                                    </ul>
                                </div>
                                <a href="vistaProducto.php">
                                    <div class="d-flex flex-column align-items-center">
                                        <img src="http://localhost/prueba/PWCI/img/principal/abanico.jpg"
                                            class="card-img-top fixed-image" alt="...">
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-4">
                                                    <div class="badge rounded-pill btnColorCard">Abanico</div>
                                                </div>
                                                <div class="col-8 text-end">
                                                    <div class="price-hp"><strong>MXN$350.00</strong></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--agrega mas aqui -->
                </div>
            </div>
            <div class="py-5">
                <h5 class="letraFuente">Productos nuevos</h5>
                <div class="carrusel p-5">
                    <div class="elemento">
                        <div class="col-2">
                            <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">

                                <div class="dropdown">
                                    <button class="heart-button text-lg-end text-md-end text-sm-end my-0 "
                                        data-bs-toggle="dropdown">
                                        <span class="heart-icon">&#x2665;</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Lista 1</a></li>
                                        <li><a class="dropdown-item" href="#">Lista 2</a></li>
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#crearLista">Crear lista</a></li>
                                    </ul>
                                </div>
                                <a href="vistaProducto.php">
                                    <div class="d-flex flex-column align-items-center">
                                        <img src="http://localhost/prueba/PWCI/img/principal/lampara.jpg"
                                            class="card-img-top fixed-image" alt="...">
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-4">
                                                    <div class="badge rounded-pill btnColorCard">Lampara cute</div>
                                                </div>
                                                <div class="col-8 text-end">
                                                    <div class="price-hp princPrecio"><strong>MXN$500.00</strong></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--agrega mas aqui -->
                </div>
            </div>
        </div>
        <!-- Crear Lista  -->
        <div class="modal fade" id="crearLista" tabindex="-1" aria-labelledby="crearLista" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Cabecera del Modal -->
                    <div class="modal-header">
                        <h4 class="modal-title">Crear lista</h4>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>

                    <!-- Contenido del Modal -->
                    <div class="modal-body text-center">

                        <div class="row">
                            <div class="col-5 mx-5 my-5">
                                <form action="">
                                    <input type="text" class="form-control my-2" id="nomLista"
                                        placeholder="Nombre de la lista" required>
                                    <input type="text" class="form-control my-2" id="descLista"
                                        placeholder="Descripción" required>

                                    <label for="privacidad">Tipo</label>
                                    <div class="d-flex my-switch">
                                        <div class="form-text text-1">Pública</div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input id="privacidad" class="form-check-input form-check-inline"
                                                type="checkbox">
                                        </div>
                                        <div class="form-text text-2">Privada</div>
                                    </div>
                                    <button type="submit" class="btn btnHover"
                                        style="background-color: #FFC43A; color:#03258C; color:aliceblue;">Crear</button>
                                </form>


                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <input class="form-control" style="background-size: 50vh" type="file"
                                        id="#img-preview" onchange="loadFile(event)" required>
                                    <img id="#img-uploader" src="../img/principal/abanico.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie del Modal -->
                    <div class="modal-footer">
                        <button type="button" class="btn btnColorCard btnHover" data-bs-dismiss="modal"
                            style="color:aliceblue;">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    if (isset($_GET['error'])) {
        echo "Error: " . urldecode($_GET['error']);
    }
    ?>

    <script>
    var input1 = document.getElementById("input1");
    var input2 = document.getElementById("input2");

    input1.addEventListener("input", validarNumero);
    input2.addEventListener("input", validarNumero);

    function validarNumero() {
        var valor = parseFloat(this.value);

        if (valor <= 0 || isNaN(valor)) {
            this.value = 1;
        }
    }
    </script>

    <?php
        include_once('../assets/General/footer.php');
    ?>
</body>

</html>