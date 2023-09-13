<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/vendedor.css">
  <script
    src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet"
    href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
  <title>Micherry</title>
  <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
  <script src="js/vendedor.js"></script> 
  <style>
   a {
      text-decoration: none;
      color: black;
   }
  </style>  
</head>

<body>
<nav class="navbar navbar-expand-lg sticky-top" style="background-color:#7D2C6F;">
    <div class="container-fluid letraFuente">
      <a class="navbar-brand text-light" href="vendedor.php">
        <img src="http://localhost/prueba/PWCI/img/logo/Micherry.png" alt="Logo"  height="30"
          class="d-inline-block align-text-top">
        Micherry
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent" >
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-light" href="n_producto.php">Nuevo producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="mensajes_vendedor.php">Mensajes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active salirbtn text-light" aria-current="page" data-bs-toggle="modal"
              data-bs-target="#UsuarioVendedorPer" style="cursor: pointer;">Volver al perfil de comprador</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="UsuarioVendedorPer" tabindex="-1" aria-labelledby="UsuarioVendedorPerLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="UsuarioVendedorPerLabel">Perfil comprador</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Quieres ir al perfil de comprador?
        </div>
        <div class="modal-footer">
          <a href="perfil_usuario.php" role="button" class="btn btn-danger">Confirmar</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5 p-5">
    <div class="row">
      <div class="col-lg-9 col-md-10 col-sm-12 mx-auto">
        <h5>Perfil vendedor</h5>
        <div class="card"style="background-color:#f5d3dfe4; border-radius: 30px;">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-8 m-4">
                  <div class="col-lg-8 col-md-8 col-sm-8 ">
                    <img src="http://localhost/prueba/PWCI/img/logo/Micherry.png" class="img-fluid rounded-start" alt="..." style="height: 100%; width: 80%;">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title">Yair Castillo</h5>
                      <p class="card-text">Correo: yair.castillo.p1@gmail.com</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
              </div>
              <div class="col-lg-3 mx-auto">
                  <div class="card-body">
                    <h5 class="card-title">Consulta de ventas</h5>
                    <p class="card-text">Ingrese el rango de fechas: </p>
                    <p class="me-2">Desde: </p>
                    <input type="date" name="dateIni" id="dateIni" class="form-control mb-2 mb-md-0" onchange="validarFechaI()"/>
                    <p class="me-2">Hasta: </p>
                    <input type="date" name="dateFin" id="dateFin" class="form-control mb-2 mb-md-0" onchange="validarFechaF()"/>
                  </div>
              </div>
              <div class="col-lg-3 mx-auto">
                <label for="combobox" class="me-2">Selecciona o escribe una categoria:</label>
                <select id="combobox" name="combobox" class="form-control">
                  <option value="opcion1">Anime</option>
                  <option value="opcion2">Ropa</option>
                  <option value="opcion3">Electronica</option>
                  <option value="opcion4">Figuras</option>
                </select>
                <input type="text" class="form-control my-2" id="nuevaOpcion" name="nuevaOpcion" placeholder="Escribe una nueva categoria">
                <div class="col-12">
                  <button type="button" class="btn btn-danger btn-sm">Agregar categoria</button>
                </div>
                <p>Categorias: </p>
                <textarea disabled class="form-control"></textarea>
    
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#consulvent">
                  Confirmar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="modal fade" id="consulvent" tabindex="-1" aria-labelledby="consulventLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Consulta de ventas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 consuagrupa">
              <h1>Detallada</h1>
              <div class="consualtagrupada">
                <p class="izquierda">Fecha y hora de la venta:</p>
                <p class="derecha">01/09/2023 a las 11:59</p>
                <p class="izquierda">Categoria:</p>
                <p class="derecha">Anime, ropa</p>
                <p class="izquierda">Producto:</p>
                <p class="derecha">Cosplay escolar Hatsune Miku</p>
                <p class="izquierda">Calificacion:</p>
                <p class="derecha">5 estrellas</p>
                <p class="izquierda">Precio:</p>
                <p class="derecha">200MXN</p>
                <p class="izquierda">Existencia actual:</p>
                <p class="derecha">5</p>
                <p>Producto detallado</p>
              </div>
            </div>
            <div class="col-md-6 consuagrupa">
              <h1>Agrupada</h1>
              <div class="consualtagrupada">
                <p class="izquierda">Mes y año de la venta:</p>
                <p class="derecha">Septiembre del 2023</p>
                <p class="izquierda">Categoria:</p>
                <p class="derecha">Anime, ropa</p>
                <p class="izquierda">Ventas:</p>
                <p class="derecha">1 pieza</p>
                <p>Producto agrupado</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="menupri">
    <h4>Productos Publicados</h4>
  </div>

  <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
      <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <!-- Aquí comienzan las tarjetas del carrusel -->

              <div class="col-md-3">
                <a href="editar_producto.php">
                  <div class="card productocard" style="width: 18rem; ">
                    <img src="http://localhost/prueba/PWCI/img/vendedor/productos/camisa_blanca.png"
                      class="card-img-top" alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title"><strong>MXN$300</strong></h5>
                      <p class="card-text">Camisa blanca</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- Agregar más tarjetas aquí -->
              <div class="col-md-3">
                <a href="editar_producto.php">
                  <div class="card productocard" style="width: 18rem; ">
                    <img src="http://localhost/prueba/PWCI/img/vendedor/productos/cosplay_chino.png"
                      class="card-img-top" alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title"><strong>MXN$200</strong></h5>
                      <p class="card-text">Ropa china</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="editar_producto.php">
                  <div class="card productocard" style="width: 18rem; ">
                    <img src="http://localhost/prueba/PWCI/img/vendedor/productos/cosplay_miku.png" class="card-img-top"
                      alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title"><strong>MXN$1000</strong></h5>
                      <p class="card-text">Hatsune Miku cosplay</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="editar_producto.php">
                  <div class="card productocard" style="width: 18rem; ">
                    <img src="http://localhost/prueba/PWCI/img/vendedor/productos/Gojo.png" class="card-img-top"
                      alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title"><strong>MXN$6000</strong></h5>
                      <p class="card-text">Gojo cosplay maid</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <!-- Continuación de las tarjetas del carrusel -->
              <div class="col-md-3">
                <a href="editar_producto.php">
                  <div class="card productocard" style="width: 18rem;">
                    <img src="http://localhost/prueba/PWCI/img/vendedor/productos/camisa_linda.png" class="card-img-top"
                      alt="Producto 5" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title"><strong>MXN$450</strong></h5>
                      <p class="card-text">Vestido lindo</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- Agregar más tarjetas aquí -->
              <div class="col-md-3">
                <a href="editar_producto.php">
                  <div class="card productocard" style="width: 18rem; ">
                    <img src="http://localhost/prueba/PWCI/img/vendedor/productos/sirvienta.png" class="card-img-top"
                      alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title"><strong>MXN$8000</strong></h5>
                      <p class="card-text">Traje lindo de sirvienta</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="editar_producto.php">
                  <div class="card productocard" style="width: 18rem; ">
                    <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_blanco.png"
                      class="card-img-top" alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title"><strong>MXN$4000</strong></h5>
                      <p class="card-text">Vestido blanco</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="editar_producto.php">
                  <div class="card productocard" style="width: 18rem; ">
                    <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindo.png"
                      class="card-img-top" alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title"><strong>MXN$500</strong></h5>
                      <p class="card-text">Vestido de temporada</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- Agregar más elementos "carousel-item" según sea necesario -->
        </div>
        <a class="carousel-control-prev" href="#productCarousel" role="button" data-bs-slide="prev" style="margin-left: -15%;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#productCarousel" role="button" data-bs-slide="next" style="margin-right: -15%;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </a>
      </div>
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