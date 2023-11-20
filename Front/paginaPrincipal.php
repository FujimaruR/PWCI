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
                                        <ul class="dropdown-menu">';
                                            if ($listasCom !== null){
                                                foreach ($listasCom as $lista) {
                                                    echo '<li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#agregarProdLmod" onclick="storeListIdAgregar(' . $productoas['id_Producto'] . ',' . $lista['id_Lista'] . ')">' . $lista['nombre'] . '</a></li>';
                                                }
                                            } else {
                                                echo '<li><a class="dropdown-item" href="#">No listas disponibles</a></li>';
                                            }
                                            echo '<li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#crearLista" onclick="storeProductId(' . $productoas['id_Producto'] . ')">Crear lista</a></li>
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
                <?php 
                if ($productosMasVendidos !== null){
                    foreach ($productosMasVendidos as $pmven){
                        echo '<div class="elemento">
                            <div class="col-2">
                                <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">
                                    <div class="dropdown">
                                        <button class="heart-button text-lg-end text-md-end text-sm-end my-0 "
                                            data-bs-toggle="dropdown">
                                            <span class="heart-icon">&#x2665;</span>
                                        </button>
                                        <ul class="dropdown-menu">';
                                            if ($listasCom !== null){
                                                foreach ($listasCom as $lista) {
                                                    echo '<li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#agregarProdLmod" onclick="storeListIdAgregar(' . $pmven['id_Producto'] . ',' . $lista['id_Lista'] . ')">' . $lista['nombre'] . '</a></li>';
                                                }
                                            } else {
                                                echo '<li><a class="dropdown-item" href="#">No listas disponibles</a></li>';
                                            }
                                            echo '<li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#crearLista" onclick="storeProductId(' . $pmven['id_Producto'] . ')">Crear lista</a></li>
                                        </ul>
                                    </div>
                                    <a href="../Front/vistaProducto.php?idProductoEn=' . $pmven['id_Producto'] . '">
                                        <div class="d-flex flex-column align-items-center">
                                            <img src="data:image/png;base64,' . base64_encode($pmven['img']) . '" class="card-img-top fixed-image" alt="' . $pmven['nombre'] . '">
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-4">
                                                        <div class="badge rounded-pill btnColorCard">' . $pmven['nombre'] . '</div>
                                                    </div>
                                                    <div class="col-8 text-end">
                                                        <div class="price-hp"><strong>MXN$' . $pmven['precio'] . '</strong></div>
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
                </div>
            </div>
            <div class="py-5">
                <h5 class="letraFuente">Productos nuevos</h5>
                <div class="carrusel p-5">
                <?php 
                if ($productosAceptadosFecha !== null){
                    foreach ($productosAceptadosFecha as $ppfec){
                        echo '<div class="elemento">
                            <div class="col-2">
                                <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">
                                    <div class="dropdown">
                                        <button class="heart-button text-lg-end text-md-end text-sm-end my-0 "
                                            data-bs-toggle="dropdown">
                                            <span class="heart-icon">&#x2665;</span>
                                        </button>
                                        <ul class="dropdown-menu">';
                                            if ($listasCom !== null){
                                                foreach ($listasCom as $lista) {
                                                    echo '<li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#agregarProdLmod" onclick="storeListIdAgregar(' . $ppfec['id_Producto'] . ',' . $lista['id_Lista'] . ')">' . $lista['nombre'] . '</a></li>';
                                                }
                                            } else {
                                                echo '<li><a class="dropdown-item" href="#">No listas disponibles</a></li>';
                                            }
                                            echo '<li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#crearLista" onclick="storeProductId(' . $ppfec['id_Producto'] . ')">Crear lista</a></li>
                                        </ul>
                                    </div>
                                    <a href="../Front/vistaProducto.php?idProductoEn=' . $ppfec['id_Producto'] . '">
                                        <div class="d-flex flex-column align-items-center">
                                            <img src="data:image/png;base64,' . base64_encode($ppfec['primera_imagen']) . '" class="card-img-top fixed-image" alt="' . $ppfec['nombre'] . '">
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-4">
                                                        <div class="badge rounded-pill btnColorCard">' . $ppfec['nombre'] . '</div>
                                                    </div>
                                                    <div class="col-8 text-end">
                                                        <div class="price-hp"><strong>MXN$' . $ppfec['precio'] . '</strong></div>
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
                </div>
            </div>
        </div>
        <!-- Crear Lista  -->
        <div class="modal fade" id="crearLista" tabindex="-1" aria-labelledby="crearLista" aria-hidden="true" data-idproducto-modal="">
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
                                <form action="../BackEnd/crearLista.php" method="post" id="crearListaForm" enctype="multipart/form-data">
                                    <input type="text" class="form-control my-2" id="nomLista" name="nomLista"
                                        placeholder="Nombre de la lista" required>
                                    <input type="text" class="form-control my-2" id="descLista" name="descLista" placeholder="Descripción"
                                        required>

                                    <label for="privacidad">Tipo</label>
                                    <div class="d-flex my-switch">
                                        <div class="form-text text-1">Pública</div>
                                        <div class="form-check form-switch form-check-inline">
                                            <input id="privacidad" name="privacidad" class="form-check-input form-check-inline"
                                                type="checkbox" value="1">
                                        </div>
                                        <div class="form-text text-2">Privada</div>
                                    </div>
                                    
                                    <input class="form-control my-2" style="background-size: 50vh" type="file" id="#img-preview" name="imgupload"
                                        onchange="loadFile(event)" required>
                                    <input type="hidden" name="idProdLista" id="idProdLista" value="">
                                    <button type="submit" class="btn btnHover" name="crearLisBTN"
                                        style="background-color: #FFC43A; color:#03258C; color:aliceblue;" data-bs-dismiss="modal">Crear</button>
                                </form>


                            </div>
                            <div class="col-4">
                                <div class="card">
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

    
    <div class="modal fade" id="agregarProdLmod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="borrarlistamodhead">Agregar articulo a la lista</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container ">
                        <form action="" method="post" enctype="multipart/form-data" id="idFormAgregarProdList">
                        <h4>¿Seguro que quieres agregar este articulo a la lista?</h4>
                        <input type="hidden" name="idListaAgregarProd" id="idListaAgregarProd" value="">
                        <input type="hidden" name="idListaAgregarIDl" id="idListaAgregarIDl" value="">
                        <button type="submit" class="btn btn-danger" id="confirmBTNagregarL" name="confirmBTNagregarL">Confirmar</button>
                        </form>
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
    
    function storeProductId(idProducto) {
        var modal = document.getElementById('idProdLista');
        modal.value = idProducto;
    }

    function storeListIdAgregar(idProducto, idLista) {
        var modald = document.getElementById('idListaAgregarIDl');
        modald.value = idLista;

        var modalt = document.getElementById('idListaAgregarProd');
        modalt.value = idProducto;
    }


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