<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/pedidos.css">
    <script src="http://localhost/prueba/PWCI/Front/js/pedidos.js"></script>
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
    <style>
    body {
        background-image: url(http://localhost/prueba/PWCI/img/principal/fondoPrincipal.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }
    </style>
</head>

<body>
    <?php
        $_GET['logged'] = '1';
        include_once('../assets/General/navbarSettings.php');
    ?>

    <div class="container p-5">
        <div class="row ">
            <div class="col-lg-12">
                <div class="card" style="background-color:#f5d3dfe4; border-radius: 30px;">
                    <div class="card-body">
                        <h5>Filtrar por...</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Fechas</h6>
                                <div class="d-flex">
                                    <p class="me-2">Desde: </p>
                                    <input type="date" name="dateIni" id="dateIni" class="form-control mb-2 mb-md-0"
                                        onchange="validarFechaI()" />
                                    <p class="me-2">Hasta: </p>
                                    <input type="date" name="dateFin" id="dateFin" class="form-control"
                                        onchange="validarFechaF()" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Categorias</h6>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect05"
                                        aria-label="Example select with button addon">
                                        <option selected>Anime</option>
                                        <option value="1">Ropa</option>
                                        <option value="2">Electronica</option>
                                        <option value="3">Figuras</option>
                                    </select>
                                    <button class="btn btn-outline-danger" type="button">Confirmar</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating my-2 col-lg-4 col-md-8 col-sm-12">
                            <textarea disabled class="form-control" placeholder="Leave a comment here"
                                id="floatingTextaread"></textarea>
                            <label for="floatingTextaread">Categorias del producto</label>
                        </div>
                        <div>
                            <ul class="ml-2">
                                <li>
                                    <button class="btn btn-outline-danger" type="button">Eliminar</button>
                                </li>
                                <li>
                                    <button class="btn btn-outline-danger" type="button">Confirmar</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <h4>Consulta de pedidos realizados</h4>
    </div>

    <div class="container ">
        <h5>Pedidos</h5>
        <a class="link-offset-2 link-underline link-underline-opacity-0 refervista" href="vistaProducto.php"
            title="Ver detalles del producto">
            <div class="card mb-3" style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="img-fluid rounded-start"
                            alt="..." style="height: 100%; object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="badge btnColorCard" style="border-radius: 10px 30px;">
                                <h6>Laptop</h6>
                            </div>
                            <p class="card-text" style="padding-top: 1%;">Laptop linda kawai uwu chi</p>
                            <p class="card-text"><small
                                    class="text-body-secondary"><strong>MXN$18300.00</strong></small></p>
                            <hr>
                            <p>Fecha y hora de la compra: 01/09/2023</p>
                            <p>Categorias: Electronica</p>
                            <p>Cantidad: 1</p>
                            <p>Calificacion:</p>
                            <div class="rating">
                                <i class="bi bi-star-fill star checked"></i>
                                <i class="bi bi-star-fill star checked"></i>
                                <i class="bi bi-star-fill star checked"></i>
                                <i class="bi bi-star-fill star checked"></i>
                                <i class="bi bi-star-fill star checked"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>

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