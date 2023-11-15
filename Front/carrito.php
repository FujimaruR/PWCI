<?php
session_start();
include("../BackEnd/showCarrito.php");
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
                        <h5>Cesta de la compra(2)</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Seleccionar todos los productos
                            </label>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="card-header">
                                <div class="row mx-auto">
                                    <div class="col-lg-3">
                                        <input class="form-check-input" type="radio" name="productrad1"
                                            id="productrad1">
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <div class="dropdown">
                                            <a class="heart-button text-lg-end text-md-end text-sm-end "
                                                data-bs-toggle="dropdown">
                                                <span class="heart-icon">&#x2665;</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Lista 1</a></li>
                                                <li><a class="dropdown-item" href="#">Lista 2</a></li>
                                                <li><a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#crearLista">Crear lista</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-end">
                                        <a class="my-3" data-bs-toggle="modal" data-bs-target="#borrarlistamod">
                                            <i class="bi bi-trash3-fill trash"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-8">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg"
                                        class="img-fluid rounded-start object-fit-cover" alt="..."
                                        style="height: 300px; width: 80%;">
                                </div>
                            </div>
                            <div class="col-lg-4 mx-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Computadora Linda</h5>
                                    <p class="card-text">MXN$12000 </p>
                                    <div class="form-floating">
                                        <select class="form-select" id="cantidadcomd">
                                            <option selected>1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="card-header">
                                <div class="row mx-auto">
                                    <div class="col-lg-3">
                                        <input class="form-check-input" type="radio" name="productrad2"
                                            id="productrad2">
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <div class="dropdown">
                                            <a class="heart-button text-lg-end text-md-end text-sm-end "
                                                data-bs-toggle="dropdown">
                                                <span class="heart-icon">&#x2665;</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Lista 1</a></li>
                                                <li><a class="dropdown-item" href="#">Lista 2</a></li>
                                                <li><a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#crearLista">Crear lista</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-end">
                                        <a class="my-3" data-bs-toggle="modal" data-bs-target="#borrarlistamod">
                                            <i class="bi bi-trash3-fill trash"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <img src="http://localhost/prueba/PWCI/img/principal/lampara.jpg"
                                        class="img-fluid rounded-start object-fit-cover" alt="..."
                                        style="height: 300px; width: 80%;">
                                </div>
                            </div>
                            <div class="col-lg-4 mx-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Computadora Linda</h5>
                                    <p class="card-text">MXN$12000</p>
                                    <div class="form-floating">
                                        <select class="form-select" id="cantidadcom">
                                            <option selected>1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="card" style="background-color:#f5d3dfe4;  border-radius: 30px;">
                    <div class="card-body">
                        <h5 class="text-center">Resumen</h5>
                        <h5>Total a pagar: </h5>
                        <p><strong>MXN$0,00</strong></p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal"
                                data-bs-target="#pagar">Pagar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>


    <div class="modal fade" id="crearLista" tabindex="-1" aria-labelledby="crearLista" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Crear lista</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body text-center">

                    <div class="row">
                        <form action="">
                            <input type="text" class="form-control my-2" id="nomLista" placeholder="Nombre de la lista"
                                required>
                            <input type="text" class="form-control my-2" id="descLista" placeholder="Descripción"
                                required>

                            <label for="privacidad">Tipo</label>
                            <div class="d-flex my-switch">
                                <div class="form-text text-1">Pública</div>
                                <div class="form-check form-switch form-check-inline">
                                    <input id="privacidad" class="form-check-input form-check-inline" type="checkbox">
                                </div>
                                <div class="form-text text-2">Privada</div>
                            </div>
                            <button type="submit" class="btn btnHover"
                                style="background-color: #FFC43A; color:#03258C; color:aliceblue;">Crear</button>
                        </form>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btnColorCard btnHover" data-bs-dismiss="modal"
                        style="color:aliceblue;">Cerrar</button>
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
                    <p><span>Un articulo en tu carrito</span></p>
                    <div class="row">
                        <div class="col-4 mx-5">
                            <p><span>Subtotal=</span></p>
                        </div>
                        <div class="col-4">
                            <p><span>$500</span></p>
                        </div>
                    </div>
                    <button class="btn btnHover" style="background-color: #FFC43A; color:#03258C;">
                        <h5>Pagar con PayPal</h5>
                    </button>
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
                    <h1 class="modal-title fs-5" id="borrarlistamodhead">Eliminar Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container ">
                        <h4>¿Seguro que quieres eliminar el producto del carrito?</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger">Confirmar</button>
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
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Qué te pareció este producto?</label>
                            <div class="rating">
                                <i class="bi bi-star-fill star "></i>
                                <i class="bi bi-star-fill star "></i>
                                <i class="bi bi-star-fill star "></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                            </div>
                            <textarea class="form-control" id="comentario" rows="4"
                                placeholder="Escribe tu comentario aquí"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="btncomentariomod"
                        data-bs-dismiss="modal">Confirmar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="http://localhost/prueba/PWCI/Front/js/carrito.js"></script>
    <script>
        const radioSeleccionarTodos = document.getElementById("flexRadioDefault1");
        const radioProducto1 = document.getElementById("productrad1");
        const radioProducto2 = document.getElementById("productrad2");

        radioSeleccionarTodos.addEventListener("click", () => {
            radioProducto1.checked = radioSeleccionarTodos.checked;
            radioProducto2.checked = radioSeleccionarTodos.checked;
        });

        radioProducto1.addEventListener("click", () => {
            if (radioProducto1.checked) {
                radioSeleccionarTodos.checked = false;
            }
        });

        radioProducto2.addEventListener("click", () => {
            if (radioProducto2.checked) {
                radioSeleccionarTodos.checked = false;
            }
        });

    </script>

    <?php
        include_once('../assets/General/footer.php');
    ?>
</body>

</html>