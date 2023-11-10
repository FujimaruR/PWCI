<?php
session_start();
include("../BackEnd/adminProductos.php");
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
                    <?php
                if ($productosAceptados !== null){
                    $contadorA = 0;
                    foreach ($productosAceptados as $productoas) {
                        if ($contadorA % 4 == 0) {
                            echo '<div class="carousel-item' . ($contadorA === 0 ? ' active' : '') . '"><div class="row">';
                        }
                    
                        $imagen_base64a = base64_encode($productoas['primera_imagen']);
                        $imagen_urla = 'data:image/png;base64,' . $imagen_base64a;
                    
                        echo '<div class="col-md-3">
                            <a href="../Front/eliminar/vistaProductoAdmin.php?idProductoEn=' . $productoas['id_Producto'] . '">
                                <div class="card productocard" style="width: 18rem;">
                                    <img src="' . $imagen_urla . '" class="card-img-top" alt="' . $productoas['nombre'] . '"
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>MXN$' . $productoas['precio'] . '</strong></h5>
                                        <p class="card-text">' . $productoas['descripcion'] . '</p>
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

    </div>

    <div class="autorizados">
        <h4 class="text-light mx-5"><strong>Por autorizar</strong></h4>

        <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
            <div id="productCarouseld" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $contador = 0;
                    foreach ($productosnaceptados as $producto) {
                        if ($contador % 4 == 0) {
                            echo '<div class="carousel-item' . ($contador === 0 ? ' active' : '') . '"><div class="row">';
                        }
                    
                        // Convertir el BLOB a una URL de imagen
                        /*$imagen_base64 = base64_encode($producto['img']);
                        $imagen_url = 'data:image/png;base64,' . $imagen_base64;*/

                        $mime_type = 'image/png';
    
                        $imagen_url = 'data:' . $mime_type . ';base64,' . base64_encode($producto['img']);
                    
                        echo '<div class="col-md-3">
                            <a data-bs-toggle="modal" data-bs-target="#pconfirmarp" onclick="storeProductId(' . $producto['id_Producto'] . ')">
                                <div class="card productocard" style="width: 18rem;">
                                    <img src="' . $imagen_url . '" class="card-img-top" alt="' . $producto['nombre'] . '"
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>MXN$' . $producto['precio'] . '</strong></h5>
                                        <p class="card-text">' . $producto['descripcion'] . '</p>
                                    </div>
                                </div>
                            </a>
                        </div>';
                    
                        $contador++;
                        if ($contador % 4 == 0) {
                            echo '</div></div>';
                        }
                    }
                    
                    // Cerrar la última fila y el último div del carrusel si es necesario
                    if ($contador % 4 != 0) {
                        echo '</div></div>';
                    }
                    ?>
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
        <?php
            if (isset($_GET['error'])) {
                echo "Error: " . urldecode($_GET['error']);
            }
        ?>
    </div>

    <div class="modal fade" id="pconfirmarp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true" data-idproducto-modal="">
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
                    <form action="" method="POST">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="hidden" id="idProductoInput" name="idProducto" value="">
                    <button type="submit" class="btn btn-danger" id="confirmarBtn" name="confirmarBtn">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="http://localhost/prueba/PWCI/Front/js/administrador.js"></script>
    <script>
    
    function storeProductId(idProducto) {
        var modal = document.getElementById('pconfirmarp');
        modal.setAttribute('data-idproducto-modal', idProducto);
    }
    /*
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('pconfirmarp');
        const confirmarBtn = modal.querySelector('#confirmarBtn');

        confirmarBtn.addEventListener('click', function() {
            var idProducto = modal.getAttribute('data-idproducto-modal');
            fetch('http://localhost/prueba/PWCI/BackEnd/adminProductos.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'idProducto=' + idProducto,
                })
                .catch(function(error) {
                    console.error('Error:', error);
                });
        });
    }); */

    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('pconfirmarp');
        const idProductoInput = modal.querySelector('#idProductoInput');
        
        modal.addEventListener('show.bs.modal', function(event) {
            var idProducto = modal.getAttribute('data-idproducto-modal');
            idProductoInput.value = idProducto;
        });
    });
    </script>


    <?php
        include_once('../assets/General/footer.php');
    ?>

</body>

</html>