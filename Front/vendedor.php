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
  <title>Vendedor</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar scroll</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Link</a>
          </li>
        </ul>
        <span class="navbar-text">
          Navbar text with an inline element
        </span>
      </div>
    </div>
  </nav>
  
  <div class="vendedor_general">
        <div class="row">
          <div class="col-md-6 d-flex justify-content-center">
            <div class="card mb-3" style="max-width: 540px; height: 33%;">
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
            <div class="card w-75" style="width: 30%;">
              <div class="card-body">
              <h5 class="card-title">Consulta de ventas</h5>
              <p class="card-text">Ingrese el rango de fechas: </p>
              <p>Desde: </p>
              <input type="date" name="dateIni"/>
              <p>Hasta: </p>
              <input type="date" name="dateFin"/>

              <label for="combobox">Selecciona o escribe una categoria:</label>
              <select id="combobox" name="combobox">
                  <option value="opcion1">Anime</option>
                  <option value="opcion2">Ropa</option>
                  <option value="opcion3">Electronica</option>
                  <option value="opcion4">Figuras</option>
              </select>
              <input type="text" id="nuevaOpcion" name="nuevaOpcion" placeholder="Escribe una nueva categoria">
              <button type="button" class="btn btn-primary btn-sm">Agregar categoria</button>
              <p>Categorias: </p>
              <textarea disabled cols="40" rows="5" id="categorias" name="categorias"></textarea>


              <a href="#" class="btn btn-primary">Confirmar</a>
              </div>
          </div>
          </div>
        </div>
      </div>

</body>

</html>