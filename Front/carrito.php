<?php
session_start();
include("../BackEnd/showCarrito.php");
include('../Api/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/carrito.css">
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <style>
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="background-color:#f5d3dfe4; border-radius: 30px;">
                    <div class="card-header">
                        <h5>Cesta de la compra<?php echo '('.$rowListasNCount.')'; ?></h5>
                    </div>
                    <div class="card-body">
                        <?php
                        if($carritoBuscar !== null){
                                echo '<form action="" id="idFormCarrito" method="post">
                                <input type="hidden" name="totalPaypalF" id="totalPaypalF" value="0.00">
                            </form>';
                            foreach ($carritoBuscar as $producto){
                                $productrad1 = 'idProdCarrito_' . $producto['id_productoCar'];
                                $cantidadcomd = 'idProdCarritoCan_' . $producto['id_productoCar'];

                                $mime_typeProd = 'image/png';
            
                                $imagen_urlProd = 'data:' . $mime_typeProd . ';base64,' . base64_encode($producto['img']);
                                echo '
                                <div class="row">
                                    <div class="card-header">
                                        <div class="row mx-auto">
                                            <div class="col-lg-3">
                                                <input class="form-check-input producto-checkbox" type="radio" name="'.$productrad1.'"
                                                    id="'.$productrad1.'" value="' . $producto['id_productoCar'] . '" onclick="storeProductIdCarrito(' . $producto['id_productoCar'] . ', '.$producto['precio'].')">
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="dropdown">
                                                    <a class="heart-button text-lg-end text-md-end text-sm-end "
                                                        data-bs-toggle="dropdown">
                                                        <span class="heart-icon">&#x2665;</span>
                                                    </a>
                                                    <ul class="dropdown-menu">';
                                                    if ($listasCom !== null){
                                                        foreach ($listasCom as $lista) {
                                                            echo '<li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#agregarProdLmod" onclick="storeListIdAgregar(' . $producto['id_productoCar'] . ',' . $lista['id_Lista'] . ')">' . $lista['nombre'] . '</a></li>';
                                                        }
                                                    } else {
                                                        echo '<li><a class="dropdown-item" href="#">No listas disponibles</a></li>';
                                                    }
                                                    echo '<li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#crearLista" onclick="storeProductId(' . $producto['id_productoCar'] . ')">Crear lista</a></li>';
                                                    echo '</ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-end">
                                                <a class="my-3" data-bs-toggle="modal" data-bs-target="#borrarlistamod" onclick="storeProductIdBorrar(' . $producto['id_productoCar'] . ')">
                                                    <i class="bi bi-trash3-fill trash"></i>
                                                </a>
                                            </div>
                                        </div>
        
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-8">
                                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                                            <img src="'.$imagen_urlProd.'"
                                                class="img-fluid rounded-start object-fit-cover" alt="..."
                                                style="height: 300px; width: 80%;">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mx-auto">
                                        <div class="card-body">
                                            <h5 class="card-title">'.$producto['nombre'].'</h5>
                                            <p class="card-text precio-producto">MXN$'.$producto['precio'].'</p>
                                            <div class="form-floating">
                                                <select class="form-select" id="'.$cantidadcomd.'">';
                                                $numeroOpciones = $producto['cant_disp'];

                                                // Generar las opciones del select usando un bucle
                                                for ($i = 1; $i <= $numeroOpciones; $i++) {
                                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                                }
                                                echo '</select>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                        } else {
                            echo '
                            <div class="row">
                                <div class="card-header">
                                    <div class="row mx-auto">
                                        <div class="col-lg-4 text-end">
                                            <p>Sin articulos</p>
                                        </div>
                                    </div>
    
                                </div>
                                <div class="col-lg-4 mx-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">No articulos en el carrito</h5>
                                    </div>
                                </div>
                            </div>';
                        }
                        ?>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="card" style="background-color:#f5d3dfe4;  border-radius: 30px;">
                    <div class="card-body">
                        <h5 class="text-center">Resumen</h5>
                        <h5>Total a pagar: </h5>
                        <p id="totalPagar"><strong>MXN$0,00</strong></p>
                        <p>*El subtotal puede mostrar un valor incorrecto pero funciona bien*</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal"
                                data-bs-target="#pagar">Pagar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>


    <div class="modal fade" id="crearLista" tabindex="-1" aria-labelledby="crearLista" aria-hidden="true"
        data-idproducto-modal="">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Crear lista</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body text-center">

                    <div class="row">
                        <div class="col-5 mx-5 my-5">
                            <form action="../BackEnd/crearLista.php" method="post" id="crearListaForm"
                                enctype="multipart/form-data">
                                <input type="text" class="form-control my-2" id="nomLista" name="nomLista"
                                    placeholder="Nombre de la lista" required>
                                <input type="text" class="form-control my-2" id="descLista" name="descLista"
                                    placeholder="Descripción" required>

                                <label for="privacidad">Tipo</label>
                                <div class="d-flex my-switch">
                                    <div class="form-text text-1">Pública</div>
                                    <div class="form-check form-switch form-check-inline">
                                        <input id="privacidad" name="privacidad"
                                            class="form-check-input form-check-inline" type="checkbox" value="1">
                                    </div>
                                    <div class="form-text text-2">Privada</div>
                                </div>

                                <input class="form-control my-2" style="background-size: 50vh" type="file"
                                    id="#img-preview" name="imgupload" onchange="loadFile(event)" required>
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

    <div class="modal fade" id="pagar" tabindex="-1" aria-labelledby="pagar" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Cabecera del Modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Método de pago</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Contenido del Modal -->
                <div class="modal-body text-center">
                    <p><span>Escoge el metodo de pago</span></p>
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
                        payment: function(data, actions) {
                            return actions.payment.create({
                                transactions: [{
                                    amount: {
                                        total: document.getElementById('totalPaypalF')
                                            .value,
                                        currency: '<?php echo 'MXN' ?>'
                                    }
                                }]
                            });
                        },
                        onAuthorize: function(data, actions) {
                            return actions.payment.execute()
                                .then(function() {
                                    const myModal = new bootstrap.Modal(document.getElementById(
                                        "CalificarProducto"));
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
                    <button type="button" class="btn btnColorCard btnHover" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="borrarlistamod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Eliminar Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="container ">
                            <h4>¿Seguro que quieres eliminar el producto del carrito?</h4>
                        </div>

                        <input type="hidden" name="idProdListaBorrar" id="idProdListaBorrar" value="">

                        <button type="submit" class="btn btn-danger" name="btnElmPCar"
                            id="btnElmPCar">Confirmar</button>
                    </form>
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
                                        <option selected>1</option>
                                        <?php
                      for ($i = 2; $i <= 31; $i++) {
                        echo "<option value='$i'>$i</option>";
                      }
                    ?>
                                    </select>
                                    <h1>/</h1>
                                    <select class="form-select" id="fechatarjeta2"
                                        aria-label="Floating label select example">
                                        <option selected>1</option>
                                        <?php
                      for ($i = 2; $i <= 31; $i++) {
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
                            <input type="hidden" name="idProdCarritoForm" id="idProdCarritoForm" value="">
                            <input type="hidden" name="precioCarritoForm" id="precioCarritoForm" value="">
                            <input type="hidden" name="cantidadCarritoForm" id="cantidadCarritoForm" value="">
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
                    <h1 class="modal-title fs-5">Agregar articulo a la lista</h1>
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

    <script src="http://localhost/prueba/PWCI/Front/js/carrito.js"></script>
    <script>
    const radiosProductos = document.querySelectorAll('[name^="idProdCarrito_"]');

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

    function storeProductIdBorrar(idProducto) {
        var modal = document.getElementById('idProdListaBorrar');
        modal.value = idProducto;
    }

    function updateStarValueVenta(starValue) {
        var nomLista = document.getElementById('numStarsFormVenta');
        nomLista.value = starValue;
    }

    var carritoData = [];

    function storeProductIdCarrito(idProducto, idlista) {

        var radiobtnA = document.getElementById('idProdCarrito_' + idProducto);

        radiobtnA.addEventListener('click', function(event) {
            if (radiobtnA.checked === false) {
                radiobtnA.checked = true;
            } else if (radiobtnA.checked === true) {
                radiobtnA.checked = false;

                /*var indexToRemove = carritoData.findIndex(item => item.idProducto === idProducto);
                if (indexToRemove !== -1) {
                    carritoData.splice(indexToRemove, 1);
                }*/
            }
        });


        var modalc = document.getElementById('idProdCarritoForm');
        var modalci = document.getElementById('precioCarritoForm');
        var modalse = document.getElementById('cantidadCarritoForm');

        var existingIndex = carritoData.findIndex(item => item.idProducto === idProducto);

        if (existingIndex !== -1) {
            /*carritoData[existingIndex].precio = idlista;
            carritoData[existingIndex].cantidad = document.getElementById('idProdCarritoCan_' + idProducto).value;*/
            carritoData.splice(existingIndex, 1);
        } else {
            carritoData.push({
                idProducto: idProducto,
                precio: idlista,
                cantidad: document.getElementById('idProdCarritoCan_' + idProducto).value
            });
        }

        modalc.value = JSON.stringify(carritoData.map(item => item.idProducto));
        modalci.value = JSON.stringify(carritoData.map(item => item.precio));
        modalse.value = JSON.stringify(carritoData.map(item => item.cantidad));

        /*var inputIdProdCarrito = document.getElementById('idProdCarritoForm');
        var inputPrecioCarrito = document.getElementById('precioCarritoForm');
        var inputCantidadCarrito = document.getElementById('cantidadCarritoForm');

        inputIdProdCarrito.value = carritoData.map(item => item.idProducto).join(', ');
        inputPrecioCarrito.value = carritoData.map(item => item.precio).join(', ');
        inputCantidadCarrito.value = carritoData.map(item => item.cantidad).join(', ');*/


        /*var form = document.getElementById('idFELM');

        form.submit();*/
    }
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtener todos los elementos de radio y precios
        var radios = document.querySelectorAll('.producto-checkbox');
        var precios = document.querySelectorAll('.precio-producto');
        var totalPagarElement = document.getElementById('totalPagar');

        // Asignar la función a ejecutar cuando se hace clic en un radio
        radios.forEach(function(radio) {
            radio.addEventListener('click', recalcularTotal);
        });

        // Función para recalcular el total
        function recalcularTotal() {
            var total = 0;

            // Sumar los precios de los productos seleccionados
            radios.forEach(function(radio, index) {
                var precio = parseFloat(precios[index].innerText.replace('MXN$', ''));
                console.log('Precio:', precio);

                if (radio.checked) {
                    total += precio;
                }
                console.log('PrecioT:', total);
            });

            // Actualizar el contenido del elemento <p> del total a pagar
            totalPagarElement.innerHTML = '<strong>MXN$' + total.toFixed(2) + '</strong>';
            var tpayp = document.getElementById('totalPaypalF');
            tpayp.value = total.toFixed(2);
        }
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <?php
        include_once('../assets/General/footer.php');
    ?>
</body>

</html>