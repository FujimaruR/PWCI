<?php
session_start();
include("../BackEnd/showSeller.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/vendedor.css">
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
    <script src="js/vendedor.js"></script>
    <style>
    a {
        text-decoration: none;
        color: black;
    }
    </style>
</head>

<body>
    <?php
        $_GET['logged'] = '2';
        include_once('../assets/General/navbarSettings.php');
    ?>

    <div class="container-fluid mt-5 p-5">
        <div class="row">
            <div class="col-lg-9 col-md-10 col-sm-12 mx-auto">
                <h5>Perfil vendedor</h5>
                <div class="card" style="background-color:#f5d3dfe4; border-radius: 30px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-8 m-4">
                                <div class="col-lg-8 col-md-8 col-sm-8 ">
                                    <img src="<?php echo $imagen_url; ?>"
                                        class="img-fluid rounded-start" alt="..." style="height: 100%; width: 80%;">
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $usuario['nombre']; ?></h5>
                                        <p class="card-text">Correo: <?php echo $usuario['email']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mx-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Consulta de ventas</h5>
                                    <p class="card-text">Ingrese el rango de fechas: </p>
                                    <p class="me-2">Desde: </p>
                                    <input type="date" name="dateIni" id="dateIni" class="form-control mb-2 mb-md-0"
                                        onchange="validarFechaI()" />
                                    <p class="me-2">Hasta: </p>
                                    <input type="date" name="dateFin" id="dateFin" class="form-control mb-2 mb-md-0"
                                        onchange="validarFechaF()" />
                                </div>
                            </div>
                            <div class="col-lg-3 mx-auto">
                                <label for="combobox" class="me-2">Selecciona o escribe una categoria:</label>
                                <div class="input-group form-floating my-2">
                                    <select id="combobox" name="combobox" class="form-control">
                                        <?php
                                        if ($catestmt->rowCount() > 0) {
                                            while($row = $catestmt->fetch(PDO::FETCH_ASSOC)) {
                                                echo '<option value="' . $row['id_categ'] . '">' . $row['nombre'] . '</option>';
                                            }
                                        } else {
                                            echo '<option value="' . 1 . '"> Error </option>';
                                        }
                                        ?>
                                    </select>
                                    <button class="btn btn-danger" type="button" id="buttonAgregarCategoriaVendedor">Confirmar</button>
                                </div>
                                <div class="input-group my-2">
                                <input type="text" class="form-control" id="nuevaOpcion" name="nuevaOpcion"
                                    placeholder="Escribe una nueva categoria">
                                    <button type="button" class="btn btn-danger" id="buttonAgregarNCategoriaVendedor">Agregar categoria</button>
                                </div>
                                <p>Categorias: </p>
                                <textarea disabled class="form-control"></textarea>

                                <button type="button" class="btn btn-danger my-2" data-bs-toggle="modal"
                                    data-bs-target="#consulvent">
                                    Confirmar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="consulvent" tabindex="-1" aria-labelledby="consulventLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Consulta de ventas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 consuagrupa">
                            <h1>Detallada</h1>
                            <div class="consualtagrupada">
                                <p class="izquierda">Fecha y hora de la venta:</p>
                                <p class="derecha">01/09/2023 a las 11:59</p>
                                <p class="izquierda">Categoria:</p>
                                <p class="derecha">Anime, ropa</p>
                                <p class="izquierda">Producto:</p>
                                <p class="derecha">Cosplay escolar Hatsune Miku</p>
                                <p class="izquierda">Calificacion:</p>
                                <p class="derecha">5 estrellas</p>
                                <p class="izquierda">Precio:</p>
                                <p class="derecha">200MXN</p>
                                <p class="izquierda">Existencia actual:</p>
                                <p class="derecha">5</p>
                                <p>Producto detallado</p>
                            </div>
                        </div>
                        <div class="col-md-6 consuagrupa">
                            <h1>Agrupada</h1>
                            <div class="consualtagrupada">
                                <p class="izquierda">Mes y año de la venta:</p>
                                <p class="derecha">Septiembre del 2023</p>
                                <p class="izquierda">Categoria:</p>
                                <p class="derecha">Anime, ropa</p>
                                <p class="izquierda">Ventas:</p>
                                <p class="derecha">1 pieza</p>
                                <p>Producto agrupado</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="menupri">
        <h4>Productos Publicados</h4>
    </div>

    <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                if ($productosAceptados !== null){
                    $contadorA = 0;
                    foreach ($productosAceptados as $productoas){
                        if ($contadorA % 4 == 0) {
                            echo '<div class="carousel-item' . ($contadorA === 0 ? ' active' : '') . '"><div class="row">';
                        }
                        $imagen_base64a = base64_encode($productoas['primera_imagen']);
                        $imagen_urla = 'data:image/png;base64,' . $imagen_base64a;

                        echo '<div class="col-md-3">
                            <a href="../Front/vistaProducto.php?idProductoEn=' . $productoas['id_Producto'] . '">
                                <div class="card productocard" style="width: 18rem;">
                                    <img src="' . $imagen_urla . '" class="card-img-top" alt="' . $productoas['nombre'] . '"
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>MXN$' . $productoas['precio'] . '</strong></h5>
                                        <p class="card-text">' . $productoas['nombre'] . '</p>
                                    </div>
                                </div>
                            </a>
                        </div>';

                        $contadorA++;
                        if ($contadorA % 4 == 0) {
                            echo '</div></div>';
                        }
                    }

                    if ($contadorA % 4 != 0) {
                        echo '</div></div>';
                    }
                } else {
                    echo '<div class="col-md-3">
                                <div class="card productocard" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>No producto encontrado</strong></h5>
                                    </div>
                                </div>
                        </div>';
                }
                ?>
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

    <?php
        include_once('../assets/General/footer.php');
    ?>

</body>

</html>