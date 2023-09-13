<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/perfil_usuario.css">
  <script
    src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet"
    href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
  <title>Micherry</title>
  <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
  <link rel="stylesheet" href="http://localhost/prueba/PWCI/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
  <style>
    body {
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
      <a class="nav-link active mx-2" aria-current="page" href="http://localhost/prueba/PWCI/Front/paginaPrincipal.php">
        <h5 class="letraFuente text-white">Micherry</h5>
      </a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex justify-content-center" role="search">
          <input class="form-control me-2 " type="search" placeholder="Buscar producto" aria-label="Search">
          <a href="http://localhost/prueba/PWCI/Front/b_producto.php" role="button" class="btn btnColorCard btnHover">Buscar</a>
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
              <li><a class="dropdown-item" href="http://localhost/prueba/PWCI/Front/perfil_usuario.php">Mi perfil</a></li>
              <li><a class="dropdown-item" href="http://localhost/prueba/PWCI/Front/carrito.php">Carrito</a></li>
              <li><a class="dropdown-item" href="http://localhost/prueba/PWCI/Front/pedidos.php">Mis pedidos</a></li>
              <li><a class="dropdown-item" href="http://localhost/prueba/PWCI/Front/vendedor.php">Perfil vendedor</a></li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="http://localhost/prueba/PWCI/Front/login.php">Cerrar sesión</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/prueba/PWCI/Front/mensajes_usuario.php">
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

  <div class="container-fluid mt-5 p-3">
    <div class="row">
      <div class="col-lg-9 col-md-10 col-sm-12 mx-auto">
        <h5>Perfil de usuario</h5>
        <div class="card"style="background-color:#f5d3dfe4; border-radius: 30px;">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 col-lg-6">
                  <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <img src="http://localhost/prueba/PWCI/img/Lilysa.png" class="img-fluid rounded-start" alt="..." style="height: 100%; width: 80%;border-radius: 80px 80px 50px 50px;">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                    <h5 class="card-title">Mei</h5>
                    </div>
                  </div>
              </div>
              <div class="col-lg-6">
                      <h2>Información</h2>
                      <p class="card-text">Este perfil es privado.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 mx-auto p-5">
      <h5 class=" my-4">Listas de Mei</h5>

      <div class="card" style="border-radius: 10px 10px 10px 10px;background-color:#e1f5fae4;">
        <div class="card-body">
          <div class="text-center">

          </div>
          <div class="MlisUno">
            <h2>Este perfil es privado.</h2>

          </div>
        </div>
      </div>
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
  
  <script src="http://localhost/prueba/PWCI/Front/js/perfil_usuario.js"></script>
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