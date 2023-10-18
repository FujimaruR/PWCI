<?php
session_start();
include("../BackEnd/showSeller.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/b_producto.css">
    <script src="http://localhost/prueba/PWCI/Front/js/b_producto.js"></script>
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
</head>

<body>
    <?php
        $_GET['logged'] = '1';
        include_once('../assets/General/navbarSettings.php');
    ?>

    <div class="cardsprodu">
        <ul class="mediar">
            <li>
                <div class="elemento">
                    <div class="col-2">
                        <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc" href="vistaProducto.php">
                            <div class="dropdown">
                                <button class="heart-button text-lg-end text-md-end text-sm-end my-0 "
                                    data-bs-toggle="dropdown">
                                    <span class="heart-icon">&#x2665;</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Lista 1</a></li>
                                    <li><a class="dropdown-item" href="#">Lista 2</a></li>
                                    <li><a class="dropdown-item" href="#">Crear lista</a></li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                                    href="vistaProducto.php" title="Ver detalles del producto">
                                    <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg"
                                        class="card-img-top fixed-image" alt="..."
                                        style="object-fit: cover; height: 200px;">

                                    <div class="card-body" style="height: 70px;">
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <div class="badge rounded-pill btnColorCard">Laptop</div>
                                            </div>
                                            <div class="col-8 text-end">
                                                <div class="price-hp"><strong>MXN$18300.00</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
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
                                    <li><a class="dropdown-item" href="#">Crear lista</a></li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                                    href="vistaProducto.php" title="Ver detalles del producto">
                                    <img src="http://localhost/prueba/PWCI/img/principal/abanico.jpg"
                                        class="card-img-top  fixed-image" alt="..."
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body" style="height: 70px;">
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <div class="badge rounded-pill btnColorCard">Abanico </div>
                                            </div>
                                            <div class="col-8 text-end">
                                                <div class="price-hp"><strong>MXN$200.00</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
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
                                    <li><a class="dropdown-item" href="#">Crear lista</a></li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                                    href="vistaProducto.php" title="Ver detalles del producto">
                                    <img src="http://localhost/prueba/PWCI/img/principal/anillos.jpg"
                                        class="card-img-top  fixed-image" alt="..."
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body" style="height: 70px;">
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <div class="badge rounded-pill btnColorCard">Anillos </div>
                                            </div>
                                            <div class="col-8 text-end">
                                                <div class="price-hp"><strong>MXN$120.00</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
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
                                    <li><a class="dropdown-item" href="#">Crear lista</a></li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                                    href="vistaProducto.php" title="Ver detalles del producto">
                                    <img src="http://localhost/prueba/PWCI/img/principal/audifonos.jpg"
                                        class="card-img-top fixed-image" alt="..."
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body" style="height: 70px;">
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <div class="badge rounded-pill btnColorCard">Audifonos</div>
                                            </div>
                                            <div class="col-8 text-end">
                                                <div class="price-hp"><strong>MXN$400.00</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <ul class="mediar">
            <li>
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
                                    <li><a class="dropdown-item" href="#">Crear lista</a></li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                                    href="vistaProducto.php" title="Ver detalles del producto">
                                    <img src="http://localhost/prueba/PWCI/img/principal/Labial.jpg"
                                        class="card-img-top  fixed-image" alt="..."
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body" style="height: 70px;">
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <div class="badge rounded-pill btnColorCard">Labial</div>
                                            </div>
                                            <div class="col-8 text-end">
                                                <div class="price-hp"><strong>MXN$110.00</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
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
                                    <li><a class="dropdown-item" href="#">Crear lista</a></li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                                    href="vistaProducto.php" title="Ver detalles del producto">
                                    <img src="http://localhost/prueba/PWCI/img/principal/lampara.jpg"
                                        class="card-img-top  fixed-image" alt="..."
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body" style="height: 70px;">
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <div class="badge rounded-pill btnColorCard">Lampara </div>
                                            </div>
                                            <div class="col-8 text-end">
                                                <div class="price-hp"><strong>MXN$450.00</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
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
                                    <li><a class="dropdown-item" href="#">Crear lista</a></li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                                    href="vistaProducto.php" title="Ver detalles del producto">
                                    <img src="http://localhost/prueba/PWCI/img/principal/maceta.jpg"
                                        class="card-img-top  fixed-image" alt="..."
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body" style="height: 70px;">
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <div class="badge rounded-pill btnColorCard">Maceta </div>
                                            </div>
                                            <div class="col-8 text-end">
                                                <div class="price-hp"><strong>MXN$300.00</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
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
                                    <li><a class="dropdown-item" href="#">Crear lista</a></li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                                    href="http://localhost/prueba/PWCI/Front/eliminar/vistaProductoCotizar.php"
                                    title="Ver detalles del producto">
                                    <img src="http://localhost/prueba/PWCI/img/principal/sombrilla.jpg"
                                        class="card-img-top fixed-image" alt="..."
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body" style="height: 70px;">
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <div class="badge rounded-pill btnColorCard">Sombrilla </div>
                                            </div>
                                            <div class="col-8 text-end">
                                                <div class="price-hp"><strong>MXN$320.00</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="paginacionp">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item margen">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item margen"><a class="page-link" href="#">1</a></li>
                <li class="page-item margen"><a class="page-link" href="#">2</a></li>
                <li class="page-item margen"><a class="page-link" href="#">3</a></li>
                <li class="page-item margen">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>


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