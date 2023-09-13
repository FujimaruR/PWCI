<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script
    src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">


  <title>Micherry</title>
  <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
  <link rel="stylesheet" href="../css/vistaProductoAdmin.css">
  <link rel="stylesheet" href="http://localhost/prueba/PWCI/node_modules/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body class="letraFuente">
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #070606;">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="http://localhost/prueba/PWCI/Front/administrador.php">
        <img src="http://localhost/prueba/PWCI/img/logo/Micherry.png" alt="Logo" width="40" height="40"
          class="d-inline-block align-text-top">
        Micherry
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-danger text-light" type="submit">Search</button>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active salirbtn text-light" aria-current="page" data-bs-toggle="modal"
              data-bs-target="#exampleModal">Salir de la sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Salir de la sesion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Quieres salir de la sesion?
      </div>
      <div class="modal-footer">
        <a href="http://localhost/prueba/PWCI/Front/login.php" role="button" class="btn btn-danger">Salir</a>
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
    <div class="container mt-5 my-5">
        <div class="row">
            <div class="col-md-6 col-lg-8 ">
                <div class="card align-items-center py-3 transparent-bg"style="height:550px;">

                    <div id="miCarrusel" class="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#miCarrusel" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#miCarrusel" data-bs-slide-to="1"></li>
                            <li data-bs-target="#miCarrusel" data-bs-slide-to="2"></li>
                            <li data-bs-target="#miCarrusel" data-bs-slide-to="3"></li>
                        </ol>
                        <!-- Contenido del carrusel -->
                        <div class="carousel-inner">
                            <!-- Imágenes -->
                            <div class="carousel-item active">
                                <img src="http://localhost/prueba/PWCI/img/principal/gojo.jpg" style="max-width: 100%; height: 500px;"class="card-img-top object-fit-cover" alt="Imagen 1">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/prueba/PWCI/img/principal/gojoxd.jpg" style="max-width: 100%; height: 500px;"class="card-img-top object-fit-cover" alt="Imagen 2">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/prueba/PWCI/img/principal/gojoxdxd.jpg" style="max-width: 100%; height: 500px;"class="card-img-top object-fit-cover" alt="Imagen 3">
                            </div>
                            <!-- Video -->
                            <div class="carousel-item">
                                <video controls style="max-width: 100%; height: 500px;">
                                    <source src="http://localhost/prueba/PWCI/img/cubo.mp4" type="video/mp4">
                                    Tu navegador no admite el elemento de video.
                                </video>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#miCarrusel" role="button" data-bs-slide="prev" style="margin:0 -50px">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#miCarrusel" role="button" data-bs-slide="next" style="margin:0 -50px">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card" style="height: 550px;background-color: white;">
                    <div class="card-body mx-5">
                        <div class="info-box">
                            <h4>Lampara de Satoru Gojo</h4>
                            <p>Disponible en distintos colores.</p>
                        </div>
                        <h4>$500</h4>
                        <p><span class="info-label">Cantidad disponible:</span> 20</p>
                        <p><span class="info-label">Categoria:</span> Anime</p>
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
    <script src="../Front/js/cargaImagen.js"></script>
    <script src="../Front/js/vistaProducto.js"></script>
</body>
<footer class="bg-dark text-white p-5 ">
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
