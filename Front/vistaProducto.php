<?php
session_start();
include("../BackEnd/showProducto.php");
include('../Api/config.php');
?>
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
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
    <link rel="stylesheet" href="./css/vistaProducto.css">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/node_modules/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body class="letraFuente">
    <?php
        $_GET['logged'] = '1';
        include_once('../assets/General/navbarSettings.php');
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-lg-8 ">
                <div class="card align-items-center py-3 transparent-bg" style="height:550px;">

                    <div id="miCarrusel" class="carousel">
                        <ol class="carousel-indicators">
                            <?php
                        // Crear los indicadores del carrusel
                        $numCategorias = count($ImagenesFila);
                        for ($i = 0; $i < $numCategorias; $i++) {
                            echo '<li data-bs-target="#miCarrusel" data-bs-slide-to="' . $i . '"';
                            if ($i === 0) {
                                echo ' class="active"';
                            }
                            echo '></li>';
                        }
                        ?>
                        </ol>
                        <!-- Contenido del carrusel -->
                        <div class="carousel-inner">
                            <?php
                        $contador = 0;
                        foreach ($ImagenesFila as $index => $fila) {
                            echo '<div class="carousel-item';
                            if ($index === 0) {
                                echo ' active';
                            }
                            echo '">';

                            if ($contador < 3) {
                              echo '<img src="data:image/jpeg;base64,' . base64_encode($fila['img']) . '" style="max-width: 100%; height: 500px;" class="card-img-top object-fit-cover" alt="Categoría: ' . $fila['id_img'] . '">';
                              
                            } else {
                              $contador = 0;
                              echo '<video controls style="max-width: 100%; height: 500px;">
                                <source src="data:image/jpeg;base64,' . base64_encode($fila['img']) . '" type="video/mp4">
                                Tu navegador no admite el elemento de video.
                              </video>';
                            }
                            $contador++;
                            echo '</div>';
                        }
                        ?>
                        </div>
                        <a class="carousel-control-prev" href="#miCarrusel" role="button" data-bs-slide="prev"
                            style="margin:0 -50px">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#miCarrusel" role="button" data-bs-slide="next"
                            style="margin:0 -50px">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card" style="height: 550px;background-color: white;">
                    <div class="card-body mx-5">
                        <div class="text-end">
                            <div class="dropdown">
                                <button class="heart-button text-lg-end text-md-end text-sm-end my-0 "
                                    data-bs-toggle="dropdown">
                                    <span class="heart-icon">&#x2665;</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <?php 
                                    if ($listasCom !== null){
                                        foreach ($listasCom as $lista) {
                                            echo '<li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#agregarProdLmod" onclick="storeListIdAgregar(' . $productoBuscado['id_Producto'] . ',' . $lista['id_Lista'] . ')">' . $lista['nombre'] . '</a></li>';
                                        }
                                    } else {
                                        echo '<li><a class="dropdown-item" href="#">No listas disponibles</a></li>';
                                    }
                                    echo '<li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-target="#crearLista" onclick="storeProductId(' . $productoBuscado['id_Producto'] . ')">Crear lista</a></li>';
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4><?php echo $productoBuscado['nombre']; ?></h4>
                            <p><?php echo $productoBuscado['descripcion']; ?></p>
                        </div>
                        <h4>$<?php echo $productoBuscado['precio']; ?></h4>
                        <p><span class="info-label">Cantidad
                                disponible:</span><?php echo $productoBuscado['cant_disp']; ?></p>
                        <p><span class="info-label">Categorias:</span><?php echo $categoriasString; ?></p>
                        <p><span class="info-label">Rating de los
                                usuarios:</span><?php echo $productoBuscado['rating']; ?></p>
                                <?php 
                                if($productoBuscado['t_producto'] === 1){
                                    echo'
                                    <p><span class="info-label">Ingresa la cantidad a comprar:</span></p>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="cantCompV" aria-label="Floating label select example">
                                            <option selected value="1">1</option>';
                                                    $numeroOpciones = $productoBuscado['cant_disp'];
                                                    for ($i = 2; $i <= $numeroOpciones; $i++) {
                                                        echo "<option value='$i'>$i</option>";
                                                    }
                                        echo '</select>
                                    </div>';
                                }
                                ?>
                        <div class="text-center my-5">
                            <div class="btn-group" role="group" aria-label="Grupo de botones">
                                <?php 
                                if($productoBuscado['t_producto'] === 1){
                                    echo '<button type="button" class="btn btnColorCard btnHover " style="color:aliceblue;"
                                        data-bs-toggle="modal" data-bs-target="#comprar" onclick="storeCantidadProd(document.getElementById('; echo "'cantCompV'"; echo ').value)">Comprar</button>
                                    <a class="btn btnHover" data-bs-toggle="modal" data-bs-target="#agregarProdCarrito" href="#" role="button"
                                        style="background-color: #7dcf72;color:aliceblue;">&#128722;</a>';
                                } else {
                                    if ($usuarioVcotizar !== null){
                                        if($usuarioVcotizar['permiso'] === 1){
                                            echo '<button type="button" class="btn btnColorCard btnHover " style="color:aliceblue;"
                                            data-bs-toggle="modal" data-bs-target="#comprar" onclick="storeCantidadProd(document.getElementById('; echo "'cantCompV'"; echo ').value)">Comprar</button>
                                        <a class="btn btnHover" data-bs-toggle="modal" data-bs-target="#agregarProdCarrito" href="#" role="button"
                                            style="background-color: #7dcf72;color:aliceblue;">&#128722;</a>';
                                        } else {
                                            echo '<a role="button" class="btn btnColorCard btnHover " style="color:aliceblue;"
                                            href="../BackEnd/registrarMensaje.php?vendedor=' . $productoBuscado['id_usuarioProd'] . '">Cotizar</a>';
                                        }
                                    } else {
                                        echo '<a role="button" class="btn btnColorCard btnHover " style="color:aliceblue;"
                                            href="../BackEnd/registrarMensaje.php?vendedor=' . $productoBuscado['id_usuarioProd'] . '">Cotizar</a>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="comprar" tabindex="-1" aria-labelledby="comprar" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Cabecera del Modal -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Método de pago</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Contenido del Modal -->
                                    <div class="modal-body text-center">
                                        <p><span>Un articulo en tu carrito</span></p>
                                        <div class="row">
                                            <div class="col-4 mx-5">
                                                <p><span>Subtotal=</span></p>
                                            </div>
                                            <div class="col-4">
                                                <p><span>$500</span></p>
                                            </div>
                                        </div>
                                        <div id="paypal-button-container"></div>
                                        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                                        <script>
                                            paypal.Button.render({
                                                env: '<?php echo PayPalENV; ?>',
                                                client: {
                                                    <?php if(ProPayPal) { ?>  
                                                    production: '<?php echo PayPalClientId; ?>'
                                                    <?php } else { ?>
                                                    sandbox: '<?php echo PayPalClientId; ?>'
                                                    <?php } ?>  
                                                },
                                                payment: function (data, actions) {
                                                    return actions.payment.create({
                                                        transactions: [{
                                                            amount: {
                                                                total: '<?php echo $productoBuscado['precio']; ?>',
                                                                currency: '<?php echo 'MXN' ?>'
                                                            }
                                                        }]
                                                    });
                                                },
                                                onAuthorize: function (data, actions) {
                                                    return actions.payment.execute()
                                                        .then(function () {
                                                            const myModal = new bootstrap.Modal(document.getElementById("CalificarProducto"));
                                                            myModal.show();
                                                        });
                                                }
                                            }, '#paypal-button-container');
                                        </script>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#tarjetaCredito">
                                            <h5>Tarjeta de credito</h5>
                                        </button>
                                    </div>

                                    <!-- Pie del Modal -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btnColorCard btnHover"
                                            data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Crear Lista  -->
                        <div class="modal fade" id="crearLista" tabindex="-1" aria-labelledby="crearLista"
                            aria-hidden="true" data-idproducto-modal="">
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
                                                <form action="../BackEnd/crearLista.php" method="post"
                                                    id="crearListaForm" enctype="multipart/form-data">
                                                    <input type="text" class="form-control my-2" id="nomLista"
                                                        name="nomLista" placeholder="Nombre de la lista" required>
                                                    <input type="text" class="form-control my-2" id="descLista"
                                                        name="descLista" placeholder="Descripción" required>

                                                    <label for="privacidad">Tipo</label>
                                                    <div class="d-flex my-switch">
                                                        <div class="form-text text-1">Pública</div>
                                                        <div class="form-check form-switch form-check-inline">
                                                            <input id="privacidad" name="privacidad"
                                                                class="form-check-input form-check-inline"
                                                                type="checkbox" value="1">
                                                        </div>
                                                        <div class="form-text text-2">Privada</div>
                                                    </div>

                                                    <input class="form-control my-2" style="background-size: 50vh"
                                                        type="file" id="#img-preview" name="imgupload"
                                                        onchange="loadFile(event)" required>
                                                    <input type="hidden" name="idProdLista" id="idProdLista" value="">
                                                    <button type="submit" class="btn btnHover" name="crearLisBTN"
                                                        style="background-color: #FFC43A; color:#03258C; color:aliceblue;"
                                                        data-bs-dismiss="modal">Crear</button>
                                                </form>


                                            </div>
                                            <div class="col-4">
                                                <div class="card">
                                                    <img id="#img-uploader" src="../img/principal/abanico.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-6 col-lg-8">
                    <div class="card" style="background-color: rgba(246, 244, 233, 0.903);">
                        <div class="card-body">
                            <h5 class="my-3 mx-2">Comentarios</h5>
                            <?php
                            if($usuarioVcomentario !== null){
                                foreach ($usuarioVcomentario as $comentario){
                                    $mime_typeCom = 'image/png';
            
                                    $imagen_urlCom = 'data:' . $mime_typeCom . ';base64,' . base64_encode($comentario['img']);
                                    echo '
                                    <div class="my-2">
                                        <a class="link-offset-2 link-underline link-underline-opacity-0"
                                            href="../Front/profilesSearch.php?idUserSearch='.$comentario['usuario_id'].'">
                                            <img src="'.$imagen_urlCom.'" alt="Foto de perfil"
                                                style="width: 30px; height: 30px; object-fit: cover; border-radius: 10px 10px 10px 10px;">
                                            <span
                                                style="background-color: rgb(227, 156, 209); border-radius: 10px 10px 10px 10px;">'.$comentario['nombre'].'</span>
                                        </a>
                                        <p class="mx-5">
                                            '.$comentario['comentario'].' </p>
                                    </div>';
                                }
                            } else {
                                echo '
                                <div class="my-2">
                                    <p class="mx-5">
                                        No comentarios</p>
                                </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card" style="background-color: rgba(246, 244, 233, 0.903);">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="comentario" class="form-label">Qué te pareció este producto?</label>
                                    <div class="rating">
                                        <i class="bi bi-star-fill star " onclick="updateStarValue(1)"></i>
                                        <i class="bi bi-star-fill star " onclick="updateStarValue(2)"></i>
                                        <i class="bi bi-star-fill star " onclick="updateStarValue(3)"></i>
                                        <i class="bi bi-star-fill star" onclick="updateStarValue(4)"></i>
                                        <i class="bi bi-star-fill star" onclick="updateStarValue(5)"></i>
                                    </div>
                                    <textarea class="form-control" id="comentario" name="comentario" rows="4"
                                        placeholder="Escribe tu comentario aquí"></textarea>
                                </div>

                                <input type="hidden" id="numStarsForm" name="numStarsForm" value="">
                                <button type="submit" class="btn btnColorCard btnHover" style="color:aliceblue;"
                                    id="btncomentariomod" name="btncomentariomod">Publicar Comentario</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tarjetaCredito" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="tarjetaCre" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tarjetaCreditohead">Tarjeta de credito</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container ">
                        <p>Ingresa el numero de la tarjeta.</p>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="numTarjetaCredit">
                            <label for="numTarjetaCredit">Numero de tarjeta</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div>
                                    <p>Fecha de expiracion</p>
                                </div>
                                <div class="form-floating d-flex">
                                    <select class="form-select" id="fechatarjeta1"
                                        aria-label="Floating label select example">
                                        <option selected value="1">1</option>
                                        <?php
                                        for ($i = 2; $i <= 31; $i++) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <h1>/</h1>
                                    <select class="form-select" id="fechatarjeta2"
                                        aria-label="Floating label select example">
                                        <option selected value="23">23</option>
                                        <?php
                                        for ($i = 23; $i <= 31; $i++) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <p>CVC</p>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="cvcTarjetaCredit">
                            <label for="numTarjetaCredit">cvc de la tarjeta</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-target="#pagar"
                        data-bs-toggle="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="validarBtnTarjeta">Confirmar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="CalificarProducto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="CalificarProductohead">Calificar Producto</h1>
                </div>
                <div class="modal-body">
                    <div class="container ">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="comentarioventa" class="form-label">Qué te pareció este producto?</label>
                                <div class="rating">
                                    <i class="bi bi-star-fill star" onclick="updateStarValueVenta(1)"></i>
                                    <i class="bi bi-star-fill star" onclick="updateStarValueVenta(2)"></i>
                                    <i class="bi bi-star-fill star" onclick="updateStarValueVenta(3)"></i>
                                    <i class="bi bi-star-fill star" onclick="updateStarValueVenta(4)"></i>
                                    <i class="bi bi-star-fill star" onclick="updateStarValueVenta(5)"></i>
                                </div>
                                <textarea class="form-control" id="comentarioventa" name="comentarioventa" rows="4"
                                    placeholder="Escribe tu comentario aquí"></textarea>
                            </div>
                            <input type="hidden" id="numStarsFormVenta" name="numStarsFormVenta" value="">
                            <input type="hidden" id="cantProdVenta" name="cantProdVenta" value="">
                            <input type="hidden" id="precioFormVenta" name="precioFormVenta"
                                value="<?= $productoBuscado['precio']; ?>">
                            <button type="submit" class="btn btn-danger" id="btncomentariomodVenta"
                                name="btncomentariomodVenta" data-bs-dismiss="modal">Confirmar</button>
                        </form>
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
                            <button type="submit" class="btn btn-danger" id="confirmBTNagregarL"
                                name="confirmBTNagregarL">Confirmar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="agregarProdCarrito" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Agregar articulo al carrito</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container ">
                        <form action="" method="post">
                            <h4>¿Seguro que quieres agregar este articulo al carrito?</h4>
                            <input type="hidden" name="idCarritoAgregarProd" id="idCarritoAgregarProd"
                                value="<?= $_GET['idProductoEn']; ?>">
                            <input type="hidden" name="idCarritoAgregarUser" id="idCarritoAgregarUser"
                                value="<?= $_SESSION['usuarioId']; ?>">
                            <button type="submit" class="btn btn-danger" id="confirmBTNagregarCarrito"
                                name="confirmBTNagregarCarrito">Confirmar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../Front/js/cargaImagen.js"></script>
    <script>
    function updateStarValue(starValue) {
        var nomLista = document.getElementById('numStarsForm');
        nomLista.value = starValue;
    }

    function updateStarValueVenta(starValue) {
        var nomLista = document.getElementById('numStarsFormVenta');
        nomLista.value = starValue;
    }

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

    function storeCantidadProd(cantidad) {
        var modalc = document.getElementById('cantProdVenta');
        modalc.value = cantidad;
    }
    </script>

    <script>
    const stars = document.querySelectorAll('.star');

    stars.forEach(function(star, index) {
        star.addEventListener('click', function() {
            for (let i = 0; i <= index; i++) {
                stars[i].classList.add('checked');
            }
            for (let i = index + 1; i < stars.length; i++) {
                stars[i].classList.remove('checked');
            }
        })
    });

    const numTarjetaInput = document.getElementById("numTarjetaCredit");
    const cvcTarjetaInput = document.getElementById("cvcTarjetaCredit");
    const validarBtn = document.getElementById("validarBtnTarjeta");

    numTarjetaInput.addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9]/g, "");
    });

    numTarjetaInput.addEventListener("input", function() {
        if (this.value.length > 19) {
            this.value = this.value.slice(0, 19);
        }
    });

    cvcTarjetaInput.addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9]/g, "");
    });

    validarBtn.addEventListener("click", function() {
        const numTarjeta = numTarjetaInput.value;
        const cvcTarjeta = cvcTarjetaInput.value;

        if (numTarjeta.length < 15 || numTarjeta.length > 19) {
            alert("El número de tarjeta debe tener entre 15 y 19 dígitos.");
        } else if (cvcTarjeta.length !== 3) {
            alert("El código CVC debe tener 3 dígitos.");
        } else {
            validarBtn.setAttribute("data-bs-toggle", "modal");
            validarBtn.setAttribute("data-bs-target", "#CalificarProducto");
            validarBtn.click();
        }
    });


    const validarBtnComen = document.getElementById("btncomentariomod");

    validarBtnComen.addEventListener("click", function() {
        validarBtn.removeAttribute("data-bs-toggle");
        validarBtn.removeAttribute("data-bs-target");
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <?php
        include_once('../assets/General/footer.php');
    ?>
</body>

</html>