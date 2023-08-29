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
</head>

<body>
  <nav class="navbar navbar-expand-lg" style="background-color: #FFDBDB;">
    <div class="container-fluid">
      <a class="navbar-brand" href="vendedor.php">
        <img src="http://localhost/prueba/PWCI/img/logo/Micherry.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Micherry
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="n_producto.php">Nuevo producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mensajes_vendedor.php">Mensajes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Volver al perfil de comprador</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="vendedor_general">
    <div class="row">
      <div class="vendeprin">
        <h1>
          PERFIL DEL VENDEDOR
        </h1>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <div class="card mb-3" id="cardperfil" style="max-width: 540px; height: 27%; background-color: rgba(255, 219, 219, 0.7);">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="http://localhost/prueba/PWCI/img/Lilysa.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Yair Castillo</h5>
                <p class="card-text">Correo: yair.castillo.p1@gmail.com</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <div class="card w-75" style="width: 30%; background-color: rgba(255, 219, 219, 0.7);">
          <div class="card-body">
            <h5 class="card-title">Consulta de ventas</h5>
            <p class="card-text">Ingrese el rango de fechas: </p>
            <p class="me-2">Desde: </p>
            <input type="date" name="dateIni" class="form-control mb-2 mb-md-0" />
            <p class="me-2">Hasta: </p>
            <input type="date" name="dateFin" class="form-control mb-2 mb-md-0"/>

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
            <textarea disabled cols="40" rows="5" id="categorias" name="categorias"></textarea>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#consulvent">
              Confirmar
            </button>
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
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="menupri">
    <h1>PRODUCTOS PUBLICADOS</h1>
  </div>

  <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <!-- Aquí comienzan las tarjetas del carrusel -->
                    <div class="col-md-3">
                        <div class="card productocard" style="width: 18rem; ">
                            <img src="http://localhost/prueba/PWCI/img/vendedor/productos/camisa_blanca.png" class="card-img-top" alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title"><strong>MXN$300</strong></h5>
                                <p class="card-text">Camisa blanca</p>
                            </div>
                        </div>
                    </div>
                    <!-- Agregar más tarjetas aquí -->
                    <div class="col-md-3">
                      <div class="card productocard" style="width: 18rem; ">
                          <img src="http://localhost/prueba/PWCI/img/vendedor/productos/cosplay_chino.png" class="card-img-top" alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                          <div class="card-body">
                              <h5 class="card-title"><strong>MXN$200</strong></h5>
                              <p class="card-text">Ropa china</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card productocard" style="width: 18rem; ">
                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/cosplay_miku.png" class="card-img-top" alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title"><strong>MXN$1000</strong></h5>
                            <p class="card-text">Hatsune Miku cosplay</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="card productocard" style="width: 18rem; ">
                      <img src="http://localhost/prueba/PWCI/img/vendedor/productos/Gojo.png" class="card-img-top" alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                      <div class="card-body">
                          <h5 class="card-title"><strong>MXN$6000</strong></h5>
                          <p class="card-text">Gojo cosplay maid</p>
                      </div>
                  </div>
              </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <!-- Continuación de las tarjetas del carrusel -->
                    <div class="col-md-3">
                        <div class="card productocard" style="width: 18rem;">
                            <img src="http://localhost/prueba/PWCI/img/vendedor/productos/camisa_linda.png" class="card-img-top" alt="Producto 5" style="object-fit: cover; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title"><strong>MXN$450</strong></h5>
                                <p class="card-text">Vestido lindo</p>
                            </div>
                        </div>
                    </div>
                    <!-- Agregar más tarjetas aquí -->
                    <div class="col-md-3">
                      <div class="card productocard" style="width: 18rem; ">
                          <img src="http://localhost/prueba/PWCI/img/vendedor/productos/sirvienta.png" class="card-img-top" alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                          <div class="card-body">
                              <h5 class="card-title"><strong>MXN$8000</strong></h5>
                              <p class="card-text">Traje lindo de sirvienta</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card productocard" style="width: 18rem; ">
                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_blanco.png" class="card-img-top" alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title"><strong>MXN$4000</strong></h5>
                            <p class="card-text">Vestido blanco</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="card productocard" style="width: 18rem; ">
                      <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindo.png" class="card-img-top" alt="Camisa blanca" style="object-fit: cover; height: 200px;">
                      <div class="card-body">
                          <h5 class="card-title"><strong>MXN$500</strong></h5>
                          <p class="card-text">Vestido de temporada</p>
                      </div>
                  </div>
              </div>
                </div>
            </div>
            <!-- Agregar más elementos "carousel-item" según sea necesario -->
        </div>
        <a class="carousel-control-prev" href="#productCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#productCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </a>
    </div>
</div>

</body>

</html>