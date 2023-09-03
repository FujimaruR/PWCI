<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/n_producto.css">
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
        <img src="http://localhost/prueba/PWCI/img/logo/Micherry.png" alt="Logo" width="30" height="24"
          class="d-inline-block align-text-top">
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


  <div class="vproducto">
    <div class="row">
      <h1>PRODUCTO NUEVO</h1>
      <div class="col-md-6 imgven">
        <h2 class="me-2">Imagenes y videos</h2>
        <p class="mb-2 mb-md-0">Ingresa las imágenes y el video del producto</p>

        <div id="mediaCarousel" class="carousel slide">
          <div class="carousel-inner" id="mediaCarouselInner">
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
      <div class="col-md-6 datven">
        <h2>Datos del producto</h2>
        <div class="form-floating my-2">
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
        </div>
        <div class="form-check form-switch d-flex">
          <label class="form-check-label px-5" for="flexSwitchCheckDefault">Vender</label>
          <input class="form-check-input px-3" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">Cotizar</label>
        </div>
        <div class="form-floating my-2">
          <input type="number" class="form-control" id="priceinput" placeholder="...">
          <label for="priceinput">Precio del producto</label>
        </div>
        <button type="button" class="btn btn-danger">Confirmar</button>
      </div>
    </div>
  </div>

  <script src="http://localhost/prueba/PWCI/Front/js/n_producto.js"></script>
</body>
</html>