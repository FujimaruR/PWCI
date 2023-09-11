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
  <link rel="stylesheet" href="http://localhost/prueba/PWCI/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
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
              <img src="http://localhost/prueba/PWCI/img/fotoPerfil.jpg" alt="" height="35" style="border-radius: 20px 20px">

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="perfil_usuario.php">Mi perfil</a></li>
              <li><a class="dropdown-item" href="carrito.php">Carrito</a></li>
              <li><a class="dropdown-item" href="pedidos.php">Mis pedidos</a></li>
              <li><a class="dropdown-item" href="vendedor.php">Perfil vendedor</a></li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="login.php">Cerrar sesión</a></li>
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
            Precio : <input type="number" id="input1" name="input1">
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
          <select class="form-select" aria-label="Default select example">
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
  <div class="container mt-2 my-5">
    <div class="row">
      <div class="col-md-6 col-lg-6 mx-auto">
        <div class="card" style="background-color:#f5d3dfe4; border-radius: 30px;">
          <div class="card-body ">
            <h4>Cesta de la compra(2)</h4>
         
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Seleccionar todos los productos
              </label>
            </div>
            <hr>
          </div>
          <div class="p-3">
            <div class="producom">
              <ul class="ml-2">
                <li>
                  <input class="form-check-input" type="radio" name="productrad1" id="productrad1">
                </li>
                <li>
                  <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="img-fluid" alt="...">
                </li>
                <li>
                  <ul>
                    <li>
                      <h4>Computadora linda</h4>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <p><strong>MXN$1,200</strong></p>
                    </li>
                  </ul>
                </li>
                <li>
                  <ul class="ml-2">
                    <li>
                      <i class="bi bi-heart-fill"></i>
                    </li>
                    <li>
                      <i class="bi bi-trash3-fill"></i>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <ul>
                        <p>Cantidad</p>
                      </ul>
                      <ul>
                        <div class="form-floating">
                          <select class="form-select" id="cantidadcom">
                            <option selected>1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                          </select>
                        </div>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
              <hr>
            </div>
          </div>
          <div class="p-3">
            <div class="producom">
              <ul class="ml-2">
                <li>
                  <input class="form-check-input" type="radio" name="productrad2" id="productrad2">
                </li>
                <li>
                  <img src="http://localhost/prueba/PWCI/img/vendedor/productos/cosplay_chino.png" class="img-fluid"
                    alt="...">
                </li>
                <li>
                  <ul>
                    <li>
                      <h4>Cosplay chino</h4>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <p><strong>MXN$1,000</strong></p>
                    </li>
                  </ul>
                </li>
                <li>
                  <ul class="ml-2">
                    <li>
                      <i class="bi bi-heart-fill"></i>
                    </li>
                    <li>
                      <i class="bi bi-trash3-fill"></i>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <ul>
                        <p>Cantidad</p>
                      </ul>
                      <ul>
                        <div class="form-floating">
                          <select class="form-select" id="cantidadcomd">
                            <option selected>1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                          </select>
                        </div>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
              <hr>
            </div>
          </div>
          </div>
      </div>
    
    <div class="col-md-6 col-lg-4 mx-auto" >
      <div class="card"style="background-color:#f5d3dfe4;  border-radius: 30px;">  
        <div class="card-body">
          <h5 class="text-center">Resumen</h5>
          <h5>Total a pagar: </h5>
          <p><strong>MXN$0,00</strong></p>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-danger mb-3"data-bs-toggle="modal" data-bs-target="#pagar">Pagar</button>
          </div>
        </div>
      </div>


    </div>
  </div>
  </div>
</div>

                        <!-- Modal -->
 <div class="modal fade" id="pagar"  tabindex="-1" aria-labelledby="pagar" aria-hidden="true">
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
                                      <div class="col-4 mx-5" >
                                          <p><span>Subtotal=</span></p>
                                      </div>
                                      <div class="col-4">
                                          <p><span>$500</span></p>
                                      </div>
                                  </div>
                                  <button class="btn btnHover" style="background-color: #FFC43A; color:#03258C;"><h5>Pagar con PayPal</h5></button>
                              </div>

                              <!-- Pie del Modal -->
                              <div class="modal-footer">
                                  <button type="button" class="btn btnColorCard btnHover" data-bs-dismiss="modal">Cerrar</button>
                              </div>
                          </div>
                          </div>
</div>

  <script src="http://localhost/prueba/PWCI/Front/js/carrito.js"></script>
</body>
<footer class="bg-dark text-white p-5">
  <div class="container Footer">
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