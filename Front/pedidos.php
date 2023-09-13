<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/pedidos.css">
  <script src="http://localhost/prueba/PWCI/Front/js/pedidos.js"></script>
  <script
    src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet"
    href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/node_modules/bootstrap-icons/font/bootstrap-icons.css">
  
    <title>Micherry</title>
  <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
  <style>
    body{
      background-image: url(http://localhost/prueba/PWCI/img/principal/fondoPrincipal.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
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

  <div class="container p-5">
    <div class="row ">
      <div class="col-lg-12">
        <div class="card"style="background-color:#f5d3dfe4; border-radius: 30px;">
          <div class="card-body">
            <h5>Filtrar por...</h5>
            <div class="row">
              <div class="col-md-6">
                <h6>Fechas</h6>
                <div class="d-flex">
                  <p class="me-2">Desde: </p>
                  <input type="date" name="dateIni" id="dateIni" class="form-control mb-2 mb-md-0" onchange="validarFechaI()"/>
                  <p class="me-2">Hasta: </p>
                  <input type="date" name="dateFin" id="dateFin" class="form-control" onchange="validarFechaF()"/>
                </div>
              </div>
              <div class="col-md-6">
                <h6>Categorias</h6>
                <div class="input-group">
                  <select class="form-select" id="inputGroupSelect05" aria-label="Example select with button addon">
                    <option selected>Anime</option>
                    <option value="1">Ropa</option>
                    <option value="2">Electronica</option>
                    <option value="3">Figuras</option>
                  </select>
                  <button class="btn btn-outline-danger" type="button">Confirmar</button>
                </div>
              </div>
            </div>
            <div class="form-floating my-2 col-lg-4 col-md-8 col-sm-12">
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
      </div>
    </div>
  </div>
  
  <div class="text-center">
    <h4>Consulta de pedidos realizados</h4>
  </div>
  
  <div class="container ">
    <h5>Pedidos</h5>
    <a class="link-offset-2 link-underline link-underline-opacity-0 refervista" href="vistaProducto.php"
    title="Ver detalles del producto">
    <div class="card mb-3" style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" class="img-fluid rounded-start" alt="..."
            style="height: 100%; object-fit: cover;">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <div class="badge btnColorCard" style="border-radius: 10px 30px;"><h6>Laptop</h6> </div>
            <p class="card-text" style="padding-top: 1%;">Laptop linda kawai uwu chi</p>
            <p class="card-text"><small class="text-body-secondary"><strong>MXN$18300.00</strong></small></p>
            <hr>
            <p>Fecha y hora de la compra: 01/09/2023</p>
            <p>Categorias: Electronica</p>
            <p>Cantidad: 1</p>
            <p>Calificacion:</p>
            <div class="rating">
              <i class="bi bi-star-fill star checked"></i>
              <i class="bi bi-star-fill star checked"></i>
              <i class="bi bi-star-fill star checked"></i>
              <i class="bi bi-star-fill star checked"></i>
              <i class="bi bi-star-fill star checked"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    </a>
    
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