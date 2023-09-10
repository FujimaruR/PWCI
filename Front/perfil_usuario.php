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

  <div class="datos_usuario">
    <h1>Perfil de usuario</h1>
    <div class="row">
      <div class="col-md-6">

        <div class="card mb-3" style="max-width: 90%; margin-left: 5%;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="http://localhost/prueba/PWCI/img/fotoPerfil.jpg" class="img-fluid rounded-start" alt="..."
                style="height: 100%; width: 100%; object-fit:cover;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <div class="badge rounded-pill btnColorCard">Lucero </div>
                <hr>
                <p class="card-text" style="padding-top: 1%;">Correo: lucero@gmail.com</p>
                <p>Codigo postal:  66420</p>
                <p>Direccion de entrega: Cinco # 629, col VILLAZUL,  San Nicolas de los Garza,  Nuevo Leon,  MX</p>
                <p>Numero telefonico: 8183321706</p>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editarPerfil">Editar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h2>Otras configuraciones</h2>
        <a class="btn btn-danger" href="vendedor.php" role="button">
          Ir al perfil de vendedor
        </a>
        <h3>Perfil</h3>
        <div class="form-check form-switch d-flex my-2 ">
          <label class="form-check-label px-5 " for="genderSwitch">Publico</label>
          <input class="form-check-input px-3" type="checkbox" id="genderSwitch">
          <label class="form-check-label" for="genderSwitch">Privado</label>
        </div>
      </div>
    </div>

  </div>

  <div class="modal fade" id="editarPerfil" tabindex="-1" aria-labelledby="editarPerfilLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editarPerfilLabel">Editar perfil</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="postalcod">Codigo postal: </label>
          <input type="text" class="form-control" id="postalcod" placeholder="...">
          <label for="direc">Direccion: </label>
          <input type="text" class="form-control" id="direc" placeholder="...">
          <label for="telef">Numero telefonico:</label>  
          <input type="number" class="form-control" id="telef" placeholder="...">
          

          <div class="col-4">
            <label for="formFile" class="form-label">Foto de perfil</label>
              <div class="card">
                <input class="form-control" style="background-size: 50%" type="file" id="#img-preview" onchange="loadFile(event)" required>
                <img id="#img-uploader"/>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger">Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="listas">
    <h1>Listas del usuario</h1>
    <div class="MlisUno">
      <ul class="ml-2">
        <li>
          <h3><strong>Ropa bonita</strong></h3>
        </li>
        <li class="posder">
          <h3>Cambiar nombre<i class="bi bi-pencil-square"></i></h3>
        </li>
        <li class="posder">
          <h3>Borrar<i class="bi bi-trash3-fill"></i></h3>
        </li>
      </ul>
      <ul class="ml-2">
        <li>
          <h4>6 articulos</h4>
        </li>
      </ul>
      <ul class="ml-2">
        <li>
          <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_rojo.png" class="img-fluid" alt="...">
        </li>
        <li>
          <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindo.png" class="img-fluid" alt="...">
        </li>
        <li>
          <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindod.png" class="img-fluid" alt="...">
        </li>
        <li class="img-container">
          <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_blanco.png" class="img-fluid" alt="...">
          <div class="overlay">
            <h2>+</h2>
            <p>15 productos</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
  
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