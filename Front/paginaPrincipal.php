<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/landing.css">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/principalPage.css">
    <script
      src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
      href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url(http://localhost/prueba/PWCI/img/principal/fondoPrincipal.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            overflow-x: hidden;
        }
        .cardColor{
          background: linear-gradient(to left, #fcebff, #fff5ea);
        }
        .btnColorCard{
            background-color: #E484A2;
        }
        .btnHover:hover{
            background-color: #B9B4D9;
        }
        .navColor{
            background-color: #BA3A47;
        }
        .bg-custom-color {
          background-color: #BA3A47!important;
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
              <img src="http://localhost/prueba/PWCI/img/fotoPerfil.jpg" alt="" height="35"style="border-radius: 20px 20px">

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

<!--carrusel principal -->
    <div class="container-fluid">
        <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <div class="overlay-image">
                        <img src="http://localhost/prueba/PWCI/img/principal/bannerCam.png" class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="1000">
                    <div class="overlay-image">
                        <img src="http://localhost/prueba/PWCI/img/principal/banneraudi.png" class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-image">
                        <img src="http://localhost/prueba/PWCI/img/principal/bannerNike.png" class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<!-- cards -->
    <div class="row p-5">
        <div class="col-12  ">
                <h5 class="letraFuente ">Recomendados</h5>
                <div class="carrusel p-5">
                  <div class="elemento">
                    <div class="col-2">
                      <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">

                          <div class="dropdown">
                            <button class="heart-button text-lg-end text-md-end text-sm-end my-0 " data-bs-toggle="dropdown">
                              <span class="heart-icon">&#x2665;</span>
                            </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lista 1</a></li>
                            <li><a class="dropdown-item" href="#">Lista 2</a></li>
                            <li><a class="dropdown-item" href="#">Crear lista</a></li>
                          </ul>
                        </div>

                        <div class="d-flex flex-column align-items-center">
                          <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="card-img-top  fixed-image" alt="...">
                          <div class="card-body">
                                <div class="row mb-3">
                                <div class="col-4">
                                    <div class="badge rounded-pill btnColorCard">Laptop </div>

                                </div>
                                <div class="col-8 text-end">
                                    <div class="price-hp"><strong>MXN$18300.00</strong></div>

                                </div>
                                </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elemento">
                    <div class="col-2">
                      <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">

                          <div class="dropdown">
                            <button class="heart-button text-lg-end text-md-end text-sm-end my-0 " data-bs-toggle="dropdown">
                              <span class="heart-icon">&#x2665;</span>
                            </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lista 1</a></li>
                            <li><a class="dropdown-item" href="#">Lista 2</a></li>
                            <li><a class="dropdown-item" href="#">Crear lista</a></li>
                          </ul>
                        </div>

                        <div class="d-flex flex-column align-items-center">
                          <img src="http://localhost/prueba/PWCI/img/principal/audifonos.jpg" class="card-img-top fixed-image" alt="...">
                          <div class="card-body">
                            <div class="row mb-3">
                              <div class="col-4">
                                <div class="badge rounded-pill btnColorCard">Audifonos rosas</div>
                              </div>
                              <div class="col-8 text-end">
                                <div class="price-hp"><strong>MXN$230.00</strong></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elemento">
                    <div class="col-2">
                      <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">

                          <div class="dropdown">
                            <button class="heart-button text-lg-end text-md-end text-sm-end my-0 " data-bs-toggle="dropdown">
                              <span class="heart-icon">&#x2665;</span>
                            </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lista 1</a></li>
                            <li><a class="dropdown-item" href="#">Lista 2</a></li>
                            <li><a class="dropdown-item" href="#">Crear lista</a></li>
                          </ul>
                        </div>

                        <div class="d-flex flex-column align-items-center">
                          <img src="http://localhost/prueba/PWCI/img/principal/anillos.jpg" class="card-img-top fixed-image" alt="...">
                          <div class="card-body">
                            <div class="row mb-3">
                              <div class="col-4">
                                <div class="badge rounded-pill btnColorCard">Anillos de gato</div>
                              </div>
                              <div class="col-8 text-end">
                                <div class="price-hp"><strong>MXN$300.00</strong></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elemento">
                    <div class="col-2">
                      <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">

                          <div class="dropdown">
                            <button class="heart-button text-lg-end text-md-end text-sm-end my-0 " data-bs-toggle="dropdown">
                              <span class="heart-icon">&#x2665;</span>
                            </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lista 1</a></li>
                            <li><a class="dropdown-item" href="#">Lista 2</a></li>
                            <li><a class="dropdown-item" href="#">Crear lista</a></li>
                          </ul>
                        </div>

                        <div class="d-flex flex-column align-items-center">
                          <img src="http://localhost/prueba/PWCI/img/principal/fundaMichi.jpg" class="card-img-top fixed-image" alt="...">
                          <div class="card-body">
                            <div class="row mb-3">
                              <div class="col-4">
                                <div class="badge rounded-pill btnColorCard">Funda de  celular</div>
                              </div>
                              <div class="col-8 text-end">
                                <div class="price-hp"><strong>MXN$300.00</strong></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elemento">
                    <div class="col-2">
                      <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">

                          <div class="dropdown">
                            <button class="heart-button text-lg-end text-md-end text-sm-end my-0 " data-bs-toggle="dropdown">
                              <span class="heart-icon">&#x2665;</span>
                            </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lista 1</a></li>
                            <li><a class="dropdown-item" href="#">Lista 2</a></li>
                            <li><a class="dropdown-item" href="#">Crear lista</a></li>
                          </ul>
                        </div>

                        <div class="d-flex flex-column align-items-center">
                          <img src="http://localhost/prueba/PWCI/img/principal/maceta.jpg" class="card-img-top fixed-image" alt="...">
                          <div class="card-body">
                            <div class="row mb-3">
                              <div class="col-4">
                                <div class="badge rounded-pill btnColorCard">Anillos de gato</div>
                              </div>
                              <div class="col-8 text-end">
                                <div class="price-hp"><strong>MXN$300.00</strong></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <!--agrega mas aqui -->
                </div>

                <div class="py-5">
                    <h5 class="letraFuente">Mas vendidos</h5>
                    <div class="carrusel p-5">
                      <div class="elemento">
                        <div class="col-2">
                          <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">

                              <div class="dropdown">
                                <button class="heart-button text-lg-end text-md-end text-sm-end my-0 " data-bs-toggle="dropdown">
                                  <span class="heart-icon">&#x2665;</span>
                                </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Lista 1</a></li>
                                <li><a class="dropdown-item" href="#">Lista 2</a></li>
                                <li><a class="dropdown-item" href="#">Crear lista</a></li>
                              </ul>
                            </div>

                            <div class="d-flex flex-column align-items-center">
                              <img src="http://localhost/prueba/PWCI/img/principal/abanico.jpg" class="card-img-top fixed-image" alt="...">
                              <div class="card-body">
                                <div class="row mb-3">
                                  <div class="col-4">
                                    <div class="badge rounded-pill btnColorCard">Abanico</div>
                                  </div>
                                  <div class="col-8 text-end">
                                    <div class="price-hp"><strong>MXN$350.00</strong></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!--agrega mas aqui -->
                    </div>
                </div>
                <div class="py-5">
                  <h5 class="letraFuente">Productos nuevos</h5>
                  <div class="carrusel p-5">
                    <div class="elemento">
                      <div class="col-2">
                        <div class="card h-100 shadow-sm cardColor fixed-card cardPrinc">

                            <div class="dropdown">
                              <button class="heart-button text-lg-end text-md-end text-sm-end my-0 " data-bs-toggle="dropdown">
                                <span class="heart-icon">&#x2665;</span>
                              </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Lista 1</a></li>
                              <li><a class="dropdown-item" href="#">Lista 2</a></li>
                              <li><a class="dropdown-item" href="#">Crear lista</a></li>
                            </ul>
                          </div>

                          <div class="d-flex flex-column align-items-center">
                            <img src="http://localhost/prueba/PWCI/img/principal/lampara.jpg" class="card-img-top fixed-image" alt="...">
                            <div class="card-body">
                              <div class="row mb-3">
                                <div class="col-4">
                                  <div class="badge rounded-pill btnColorCard">Lampara cute</div>
                                </div>
                                <div class="col-8 text-end">
                                  <div class="price-hp princPrecio"><strong>MXN$500.00</strong></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--agrega mas aqui -->
                  </div>
              </div>
        </div>

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
