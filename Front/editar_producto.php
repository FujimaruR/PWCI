<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/editar_producto.css">
  <script
    src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet"
    href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
  <title>Micherry</title>
  <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
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

<div class="container mt-2 my-5">
      <div class="row">
      <div class="col-md-6 col-lg-6 imgven mx-auto">
        <div class="card " style="background-color:#f5d3dfe4; border-radius: 30px;">
          <div class="card-body ">
            <h4>Laptop</h4>
            <p class="mb-2 mb-md-0 py-2">Modificar las imágenes y el video del producto</p>

            <div id="mediaCarousel" class="carousel slide py-2" >
              <div class="carousel-inner text-center" id="mediaCarouselInner">
                <div class="carousel-item active">
                  <img src="http://localhost/prueba/PWCI/img/principal/compu.jpg" alt="..." style="max-width: 100%; max-height: 400px">
                </div>
                <div class="carousel-item">
                  <img src="http://localhost/prueba/PWCI/img/principal/lampara.jpg" class="d-block w-100" alt="..." style="max-width: 100%; max-height: 400px">
                </div>
                <div class="carousel-item">
                  <img src="http://localhost/prueba/PWCI/img/principal/Labial.jpg" class="d-block w-100" alt="..." style="max-width: 100%; max-height: 400px">
                </div>
                <div class="carousel-item">
                  <video controls style="max-width: 100%; height: 400px;">
                    <source src="../img/cubo.mp4" type="video/mp4">
                    Tu navegador no admite el elemento de video.
                  </video>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#mediaCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#mediaCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            <video id="video-preview" controls style="display: none;"></video>
            <input class="form-control" type="file" id="img-uploader-nprod" accept="image/*, video/*" multiple>
          </div>
        </div>

      </div>
      <div class="col-md-6 col-lg-4 datven " >
        <div class="card"style="background-color:#f5d3dfe4;  border-radius: 30px;">  
          <div class="card-body">
            <h5 class="text-center">Datos del producto</h5>
            <div class="form-floating my-2" >
              <input type="text" class="form-control" id="productinput" placeholder="...">
              <label for="productinput">Nombre del producto</label>
            </div>
            <div class="form-floating my-2">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
              <label for="floatingTextarea">Descripcion del producto</label>
            </div>
            <div class="form-floating my-2">
              <input type="number" class="form-control" id="floatingInput" placeholder="...">
              <label for="floatingInput">Cantidad del producto</label>
            </div>
            <p>Categorias: </p>
            <div class="form-floating my-2">
              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Anime</option>
                <option value="1">Ropa</option>
                <option value="2">Electronica</option>
                <option value="3">Figuras</option>
              </select>
              <label for="floatingSelect">Categoria del producto</label>
            </div>
            <div class="input-group my-2">
              <input type="text" class="form-control" placeholder="Nueva categoria" aria-label="Nueva categoria" aria-describedby="button-addon2">
              <button class="btn btn-danger" type="button" id="button-addon2">Confirmar</button>
            </div>
            <div class="form-floating my-2">
              <textarea disabled class="form-control" placeholder="Leave a comment here" id="floatingTextaread"></textarea>
              <label for="floatingTextaread">Categorias del producto</label>
              <hr>
            </div>
            <div class="form-floating my-2">
              <input type="number" class="form-control" id="priceinput" placeholder="...">
              <label for="priceinput">Precio del producto</label>
            </div>
            <button type="button" class="btn btn-secondary">Cancelar</button>
            <button type="button" class="btn btn-danger">Confirmar</button>
            <button type="button" class="btn" style="background-color:#7D2C6F; margin-top: 1%; color: white;">Eliminar producto</button>
          </div>
        </div>


      </div>
    </div>
</div>

  <script src="http://localhost/prueba/PWCI/Front/js/editar_producto.js"></script>
</body>
<footer class="bg-dark text-white p-5" >
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