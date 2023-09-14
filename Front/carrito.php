<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/carrito.css">
  <script
    src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
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
  <nav class="bg-custom-color navbar navbar-expand-lg sticky-top">
    <div class="container-fluid ">
      <img src="http://localhost/prueba/PWCI/img/logo/Micherry.png" alt="" height="40">
      <a class="nav-link active mx-2" aria-current="page" href="paginaPrincipal.php">
        <h5 class="letraFuente text-white">Micherry</h5>
      </a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex justify-content-center" role="search">
          <input class="form-control me-2 " type="search" placeholder="Buscar producto" aria-label="Search">
          <a href="b_producto.php" role="button" class="btn btnColorCard btnHover">Buscar</a>
        </form>
        <button class="btn btnColorCard btnHover" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseFiltros" aria-expanded="false" aria-controls="collapseExample"
          style="margin-left: 1%;">
          Filtros
        </button>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


          <li class="nav-item">
            <a class="nav-link disabled">
              <h6>Usuario</h6>
            </a>
          </li>
          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="http://localhost/prueba/PWCI/img/fotoPerfil.jpg" alt="" height="35"
                style="border-radius: 20px 20px">

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="perfil_usuario.php">Mi perfil</a></li>
              <li><a class="dropdown-item" href="carrito.php">Carrito</a></li>
              <li><a class="dropdown-item" href="pedidos.php">Mis pedidos</a></li>
              <li><a class="dropdown-item" href="vendedor.php">Perfil vendedor</a></li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" aria-current="page" data-bs-toggle="modal"
                data-bs-target="#salirsesionF" style="cursor: pointer;">Salir de la sesion</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mensajes_usuario.php">
              <h6>Mensajes</h6>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="salirsesionF" tabindex="-1" aria-labelledby="salirsesionFLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="salirsesionFLabel">Salir de la sesion</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Quieres salir de la sesion?
        </div>
        <div class="modal-footer">
          <a href="login.php" role="button" class="btn btn-danger">Salir</a>
        </div>
      </div>
    </div>
  </div>

  <div class="collapse" id="collapseFiltros">
    <div class="card card-body">
      <ul class="ml-2">
        <li>
          <div class="configbus">
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="offcanvas" data-bs-target="#categorias"
              aria-controls="categorias">Categorias</button>
          </div>
        </li>
        <li>
          <div class="precio-input">
            <span>Precio:</span>
            <input type="number" id="input1" name="input1">
            - <input type="number" id="input2" name="input2">
          </div>
        </li>
        <li>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Mejor calificados
            </label>
          </div>
        </li>
        <li>
          <select class="form-select tamanven" aria-label="Default select example">
            <option selected>Mas vendidos</option>
            <option value="1">Menos vendidos</option>
          </select>
        </li>
        <li>
          <button type="button" class="btn btn-outline-danger">Confirmar</button>
        </li>
      </ul>
    </div>
  </div>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="categorias" aria-labelledby="titulocatego">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="titulocatego">Menu de categorias</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="input-group">
        <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
          <option selected>Anime</option>
          <option value="1">Ropa</option>
          <option value="2">Electronica</option>
          <option value="3">Figuras</option>
        </select>
        <button class="btn btn-outline-danger" type="button">Confirmar</button>
      </div>
      <div class="form-floating my-2">
        <textarea disabled class="form-control" placeholder="Leave a comment here" id="floatingTextaread"></textarea>
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
                    <input class="form-check-input" type="radio" name="productrad1" id="productrad1">
                  </div>
                  <div class="col-lg-4 text-center">
                    <div class="dropdown">
                      <a class="heart-button text-lg-end text-md-end text-sm-end " data-bs-toggle="dropdown">
                        <span class="heart-icon">&#x2665;</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Lista 1</a></li>
                        <li><a class="dropdown-item" href="#">Lista 2</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#crearLista">Crear lista</a>
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
                    class="img-fluid rounded-start object-fit-cover" alt="..." style="height: 300px; width: 80%;">
                </div>
              </div>
              <div class="col-lg-4 mx-auto">
                <div class="card-body">
                  <h5 class="card-title">Computadora Linda</h5>
                  <p class="card-text">MXN$12000 </p>
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

            <div class="row">
              <div class="card-header">
                <div class="row mx-auto">
                  <div class="col-lg-3">
                    <input class="form-check-input" type="radio" name="productrad2" id="productrad2">
                  </div>
                  <div class="col-lg-4 text-center">
                    <div class="dropdown">
                      <a class="heart-button text-lg-end text-md-end text-sm-end " data-bs-toggle="dropdown">
                        <span class="heart-icon">&#x2665;</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Lista 1</a></li>
                        <li><a class="dropdown-item" href="#">Lista 2</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#crearLista">Crear lista</a>
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
                    class="img-fluid rounded-start object-fit-cover" alt="..." style="height: 300px; width: 80%;">
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
              <input type="text" class="form-control my-2" id="nomLista" placeholder="Nombre de la lista" required>
              <input type="text" class="form-control my-2" id="descLista" placeholder="Descripción" required>

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
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#tarjetaCredito">
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
                  <select class="form-select" id="fechatarjeta1" aria-label="Floating label select example">
                    <option selected>1</option>
                    <?php
                      for ($i = 2; $i <= 31; $i++) {
                        echo "<option value='$i'>$i</option>";
                      }
                    ?>
                  </select>
                  <h1>/</h1>
                  <select class="form-select" id="fechatarjeta2" aria-label="Floating label select example">
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
          <button type="button" class="btn btn-danger" id="btncomentariomod" data-bs-dismiss="modal">Confirmar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="http://localhost/prueba/PWCI/Front/js/carrito.js"></script>
</body>
<footer class="bg-dark text-white p-5 Footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-lg-3 text-reset text-uppercase d-flex align-items-center">

        <img src="http://localhost/prueba/PWCI/img/logo/Micherry.png" width="60" alt="Logo Micherry"
          class="img-logo mr-2">
        Micherry
      </div>

      <div class="col-md-3 col-lg-3">

        <ul class="list-unstyled">
          <li class="my-2">1975922</li>
          <li class="my-2">Lucero Jaqueline Mendoza Alejandro</li>
        </ul>
      </div>

      <div class="col-md-3 col-lg-3">

        <ul class="list-unstyled">
          <li class="my-2"></li>
          <li class="my-2">1959520</li>
          <li class="my-2">Emilio Yair Castillo Pacheco</li>
        </ul>
      </div>

      <div class="col-md-3 col-lg-3">

        <ul class="list-unstyled">
          <li class="my-3">Materia</li>
          <li class="my-2">Programación web de capa intermedia</li>
        </ul>
      </div>
    </div>
  </div>
</footer>

</html>