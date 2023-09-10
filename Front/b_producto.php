<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/b_producto.css">
  <script src="http://localhost/prueba/PWCI/Front/js/b_producto.js"></script>
  <script
    src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet"
    href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
  <title>Micherry</title>
  <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
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
          data-bs-target="#collapseFiltros" aria-expanded="false" aria-controls="collapseExample" style="margin-left: 1%;">
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
              <img src="http://localhost/prueba/PWCI/img/fotoPerfil.jpg" alt="" height="35">

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

  <div class="cardsprodu">
    <ul class="mediar">
      <li>
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
                <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="card-img-top  fixed-image"
                  alt="...">
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
      </li>
      <li>
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
                <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="card-img-top  fixed-image"
                  alt="...">
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
      </li>
      <li>
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
                <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="card-img-top  fixed-image"
                  alt="...">
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
      </li>
      <li>
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
                <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="card-img-top fixed-image"
                  alt="...">
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
      </li>
    </ul>

    <ul class="mediar">
      <li>
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
                <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="card-img-top  fixed-image"
                  alt="...">
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
      </li>
      <li>
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
                <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="card-img-top  fixed-image"
                  alt="...">
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
      </li>
      <li>
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
                <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="card-img-top  fixed-image"
                  alt="...">
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
      </li>
      <li>
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
                <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="card-img-top fixed-image"
                  alt="...">
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
      </li>
    </ul>
  </div>

  <div class="paginacionp">
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
  </div>
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