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
              <img src="http://localhost/prueba/PWCI/img/fotoPerfil.jpg" alt="" height="35" style="border-radius: 20px 20px">
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

  <div class="container-fluid mt-5 p-3">
    <div class="row">
      <div class="col-lg-9 col-md-10 col-sm-12 mx-auto">
        <h5>Perfil de usuario</h5>
        <div class="card"style="background-color:#f5d3dfe4; border-radius: 30px;">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-3 col-md-8 col-sm-8 m-4">
                  <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <img src="http://localhost/prueba/PWCI/img/fotoPerfil.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%; width: 80%;border-radius: 80px 80px 50px 50px;">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                    <h5 class="card-title">Lucero Mendoza</h5>
                    </div>
                  </div>
              </div>
              <div class="col-lg-3">
                      <h5>Información</h5>
                      <p class="card-text">Correo: lucero@gmail.com</p>
                      <p class="card-text">Codigo postal: 66420</p>
                      <p class="card-text">Direccion de entrega: Cinco # 629, col VILLAZUL, San Nicolas de los Garza, Nuevo Leon, MX</p>
                      <p class="card-text">Numero telefonico: 8183321706</p>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editarPerfil">Editar</button>

              </div>
              <div class="col-md-5">
                  <div class="card-body ">
                  <h5>Otras configuraciones</h5>
                    <a class="btn btn-danger" role="button" data-bs-toggle="modal" data-bs-target="#UsuarioVendedorPer">
                      Ir al perfil de vendedor
                    </a>
                    <h5 >Perfil</h5>
                      <div class="form-check form-switch d-flex my-2">
                      <label class="form-check-label px-5" for="genderSwitch">Publico</label>
                      <input class="form-check-input px-3" type="checkbox" id="genderSwitch">
                      <label class="form-check-label" for="genderSwitch">Privado</label>
                    </div>
                  </div>
              </div>
            </div>
          </div>
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
          <form action="">
            <label for="postalcod">Codigo postal: </label>
            <input type="text" class="form-control" id="postalcod" placeholder="..." required>
            <label for="direc">Direccion: </label>
            <input type="text" class="form-control" id="direc" placeholder="..." required>
            <label for="telef">Número telefónico:</label>
            <input type="tel" class="form-control" id="telef" placeholder="Ejemplo: 1234567890" required>
            <div id="telefError" style="color: red;"></div>

            <div class="col-4">
              <label for="formFile" class="form-label">Foto de perfil</label>
                <div class="card">
                  <input class="form-control" style="background-size: 50%" type="file" id="#img-preview" onchange="loadFile(event)" required>
                  <img id="#img-uploader"/>
                </div>
            </div>
            
            <button type="submit" class="btn btn-danger" id="guardarButton" disabled>Guardar</button>

                  <script>
                  const telefInput = document.getElementById('telef');
                  const telefError = document.getElementById('telefError');
                  const guardarButton = document.getElementById('guardarButton');

                  telefInput.addEventListener('input', function () {
                    let telefValue = telefInput.value.replace(/\D/g, ''); // Eliminar caracteres no numéricos
                    telefInput.value = telefValue;

                    if (telefValue.length !== 10) {
                      telefError.textContent = 'El número de teléfono debe tener 10 dígitos numéricos';
                      guardarButton.disabled = true; // Deshabilitar el botón "Guardar"
                    } else {
                      telefError.textContent = '';
                      guardarButton.disabled = false; // Habilitar el botón "Guardar"
                    }
                  });
                  </script>


        </form>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 mx-auto p-5">
        <h5 class=" my-4">Listas del usuario</h5>

        <div class="card" style="border-radius: 10px 10px 10px 10px;background-color:#e1f5fae4;">
          <div class="card-body">
          <div class="text-center">

      </div>
      <div class="MlisUno">
        <ul class="ml-2">
          <li>
            <h5 class="m-1"><strong>Ropa bonita</strong></h5>
          </li>
          <li class="posder">
            <a data-bs-toggle="modal" data-bs-target="#editarlistamod" class="hovlist">
            <h6 class="m-1">Editar lista<i class="bi bi-pencil-square"></i></h6>
            </a>
          </li>
          <li class="posder">
            <a data-bs-toggle="modal" data-bs-target="#borrarlistamod" class="hovlist">
              <h6 class="m-1">Borrar<i class="bi bi-trash3-fill"></i></h6>
            </a>
          </li>
        </ul>
        <ul class="ml-2">
          <li><p class="m-1">Lista bonita de ropa que me gusta</p></li>
        </ul>
        <ul class="ml-2">
          <li>
            <h5 class="m-1">6 articulos</h5>
          </li>
        </ul>
        <a data-bs-toggle="modal" data-bs-target="#verlistaprod">
        <ul class="ml-2 pointprod">
        
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
              <p>3 productos</p>
            </div>
          </li>
        
        </ul>
        </a>
        
      </div>
  </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editarlistamod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editarlistamodhead">Editar lista</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="container ">
          <row>
              <input type="text" class="form-control my-2" id="nomLista" placeholder="Nombre de la lista" required>
              <input type="text" class="form-control my-2" id="descLista" placeholder="Descripción" required>

              <label for="privacidad">Tipo</label>
              <div class="d-flex my-switch">
                <div class="form-text text-1">Pública</div>
                <div class="form-check form-switch form-check-inline">
                  <input id="privacidad" class="form-check-input form-check-inline" type="checkbox">
                </div>
                <div class="form-text text-2">Privada</div>
              </div>

          </row>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger">Confirmar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="borrarlistamod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="borrarlistamodhead">Eliminar lista</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container ">
            <h4>¿Seguro que quieres eliminar la lista?</h4>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger">Confirmar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="verlistaprod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabelped">Productos en la lista</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <div class="container ">
          <a class="link-offset-2 link-underline link-underline-opacity-0 refervista" href="vistaProducto.php"
          title="Ver detalles del producto">
          <div class="card mb-3" style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_rojo.png" class="img-fluid rounded-start" alt="..."
                  style="height: 100%; object-fit: cover;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="badge btnColorCard" style="border-radius: 10px 30px;"><h6>Vestido rojo</h6> </div>
                  <p class="card-text" style="padding-top: 1%;">Vestido lindo color rojo</p>
                  <p class="card-text"><small class="text-body-secondary"><strong>MXN$750.00</strong></small></p>
                  <hr>
                </div>
              </div>
            </div>
          </div>
          </a>

          <a class="link-offset-2 link-underline link-underline-opacity-0 refervista" href="vistaProducto.php"
          title="Ver detalles del producto">
          <div class="card mb-3" style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindo.png" class="img-fluid rounded-start" alt="..."
                  style="height: 100%; object-fit: cover;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="badge btnColorCard" style="border-radius: 10px 30px;"><h6>Vestido escolar</h6> </div>
                  <p class="card-text" style="padding-top: 1%;">Vestido sacado de un dorama</p>
                  <p class="card-text"><small class="text-body-secondary"><strong>MXN$1000.00</strong></small></p>
                  <hr>
                </div>
              </div>
            </div>
          </div>
          </a>

          <a class="link-offset-2 link-underline link-underline-opacity-0 refervista" href="vistaProducto.php"
          title="Ver detalles del producto">
          <div class="card mb-3" style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindod.png" class="img-fluid rounded-start" alt="..."
                  style="height: 100%; object-fit: cover;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="badge btnColorCard" style="border-radius: 10px 30px;"><h6>Vestido para citas</h6> </div>
                  <p class="card-text" style="padding-top: 1%;">Vestido lindo para una cita</p>
                  <p class="card-text"><small class="text-body-secondary"><strong>MXN$1200.00</strong></small></p>
                  <hr>
                </div>
              </div>
            </div>
          </div>
          </a>

          <a class="link-offset-2 link-underline link-underline-opacity-0 refervista" href="vistaProducto.php"
          title="Ver detalles del producto">
          <div class="card mb-3" style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_blanco.png" class="img-fluid rounded-start" alt="..."
                  style="height: 100%; object-fit: cover;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="badge btnColorCard" style="border-radius: 10px 30px;"><h6>Vestido blanco</h6> </div>
                  <p class="card-text" style="padding-top: 1%;">Ropa casual lindo</p>
                  <p class="card-text"><small class="text-body-secondary"><strong>MXN$500.00</strong></small></p>
                  <hr>
                </div>
              </div>
            </div>
          </div>
          </a>

          <a class="link-offset-2 link-underline link-underline-opacity-0 refervista" href="vistaProducto.php"
          title="Ver detalles del producto">
          <div class="card mb-3" style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="http://localhost/prueba/PWCI/img/vendedor/productos/cosplay_chino.png" class="img-fluid rounded-start" alt="..."
                  style="height: 100%; object-fit: cover;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="badge btnColorCard" style="border-radius: 10px 30px;"><h6>Cosplay</h6> </div>
                  <p class="card-text" style="padding-top: 1%;">Cosplay chino lindo</p>
                  <p class="card-text"><small class="text-body-secondary"><strong>MXN$2000.00</strong></small></p>
                  <hr>
                </div>
              </div>
            </div>
          </div>
          </a>

          <a class="link-offset-2 link-underline link-underline-opacity-0 refervista" href="vistaProducto.php"
          title="Ver detalles del producto">
          <div class="card mb-3" style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="http://localhost/prueba/PWCI/img/vendedor/productos/camisa_linda.png" class="img-fluid rounded-start" alt="..."
                  style="height: 100%; object-fit: cover;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="badge btnColorCard" style="border-radius: 10px 30px;"><h6>Ropa citas</h6> </div>
                  <p class="card-text" style="padding-top: 1%;">Ropa para una cita con tu novio</p>
                  <p class="card-text"><small class="text-body-secondary"><strong>MXN$1300.00</strong></small></p>
                  <hr>
                </div>
              </div>
            </div>
          </div>
          </a>

        </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="UsuarioVendedorPer" tabindex="-1" aria-labelledby="UsuarioVendedorPerLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="UsuarioVendedorPerLabel">Perfil vendedor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Quieres ir al perfil de vendedor?
        </div>
        <div class="modal-footer">
          <a href="vendedor.php" role="button" class="btn btn-danger">Confirmar</a>
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