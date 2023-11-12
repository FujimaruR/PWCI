<?php
session_start();
include("../BackEnd/showBusqueda.php");
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
    <?php
        if (isset($_SESSION['resultadoBusqueda'])){
         
            $resultadoBusqueda = $_SESSION['resultadoBusqueda'];
            echo '<div class="cardsprodu">';

            $contadorbusqueda = 0;
            
            foreach ($resultadoBusqueda as $producto) {
                if ($contadorbusqueda % 4 === 0) {
                    echo '<ul class="mediar">';
                }

                $imagenb_base64a = base64_encode($producto['img']);
                $imagenb_urla = 'data:image/png;base64,' . $imagenb_base64a;
            
                echo '
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
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#crearLista" onclick="storeProductId(' . $producto['id_Producto'] . ')">Crear lista</a></li>
                                            </ul>
                                        </div>
                                        <div class="d-flex flex-column align-items-center">
                                            <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                                                href="vistaProducto.php?idProductoEn=' . $producto['id_Producto'] . '" title="Ver detalles del producto">
                                                <img src="' . $imagenb_urla . '"
                                                    class="card-img-top fixed-image" alt="..."
                                                    style="object-fit: cover; height: 200px;">

                                                <div class="card-body" style="height: 70px;">
                                                    <div class="row mb-3">
                                                        <div class="col-4">
                                                            <div class="badge rounded-pill btnColorCard">' . $producto['nombre'] . '</div>
                                                        </div>
                                                        <div class="col-8 text-end">
                                                            <div class="price-hp"><strong>MXN$' . $producto['precio'] . '</strong></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                
                if (($contadorbusqueda + 1) % 4 === 0 || ($contadorbusqueda + 1) === count($resultadoBusqueda)) {
                    echo '</ul>';
                }
            
                $contadorbusqueda++;
                unset($_SESSION['resultadosBusqueda']);
            }
            
            echo '</div>';   
            } else {
                echo '<div class="cardsprodu">';
                echo '<ul class="mediar">';
                echo '
                        <li>
                            <div class="elemento">
                                <div class="col-2">
                                    <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">
                                        <div class="d-flex flex-column align-items-center">
                                            <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                                                href="paginaPrincipal.php" title="Ver detalles del producto">

                                                <div class="card-body" style="height: 70px;">
                                                    <div class="row mb-3">
                                                        <p>Error al encontrar producto</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                echo '</ul>';
                echo '</div>'; 
            }
            ?>

    <!--<div class="paginacionp">
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
    </div>-->

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


    <script>
    function storeProductId(idProducto) {
        var modal = document.getElementById('idProdLista');
        modal.value = idProducto;
    }

    var loadFile = function(event) {
        var output = document.getElementById('#img-uploader');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };

    const imagePreview= document.getElementById('#img-preview');
    const imageUploader= document.getElementById('#img-uploader');
    const file='';
    imageUploader.addEventListener('change',(e)=>{
        file= e.target.files[0];
        console.file;
    });
    </script>

    <?php
        include_once('../assets/General/footer.php');
    ?>
</body>

</html>