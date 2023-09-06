<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script
    src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet"
    href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    
  <title>Micherry</title>
  <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
  <link rel="stylesheet" href="./css/vistaProducto.css">
</head>

<body class="letraFuente">
    <nav class="bg-custom-color navbar navbar-expand-lg sticky-top">
        <div class="container-fluid ">
        <img src="http://localhost/prueba/PWCI/img/logo/Micherry.png" alt="" height="40">
        <a class="nav-link active mx-2" aria-current="page" href="paginaPrincipal.html">
            <h5 class="letraFuente text-white">Micherry</h5>
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex justify-content-center" role="search">
            <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btnColorCard btnHover" type="submit">Search</button>
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
                <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                <li><a class="dropdown-item" href="#">Wishlist</a></li>
                <li><a class="dropdown-item" href="#">Mis pedidos</a></li>
                <li><a class="dropdown-item" href="#">Vender producto</a></li>

                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <h6>carrito</h6>
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
    <div class="container mt-5">
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
                                <img src="https://http2.mlstatic.com/D_NQ_NP_2X_869344-CBT45737948226_042021-F.webp" style="max-width: 400px; height: 500px;"class="card-img-top object-fit-cover" alt="Imagen 1">
                            </div>
                            <div class="carousel-item">
                                <img src="https://http2.mlstatic.com/D_NQ_NP_2X_893241-CBT45561506333_042021-F.webp" style="max-width: 400px; height: 500px;"class="card-img-top object-fit-cover" alt="Imagen 2">
                            </div>
                            <div class="carousel-item">
                                <img src="https://http2.mlstatic.com/D_NQ_NP_2X_707924-CBT45561506330_042021-F.webp" style="max-width: 400px; height: 500px;"class="card-img-top object-fit-cover" alt="Imagen 3">
                            </div>
                            <!-- Video -->
                            <div class="carousel-item">
                                <video controls style="width:100%; max-width: 400px; height: 500px;">
                                    <source src="../img/cubo.mp4" type="video/mp4">
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
                <div class="card" style="height: 550px;">
                    <div class="card-body mx-5">
                        <div class="text-end">
                            <div class="dropdown">
                                <button class="heart-button text-lg-end text-md-end text-sm-end my-0 " data-bs-toggle="dropdown">
                                  <span class="heart-icon">&#x2665;</span>
                                </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Lista 1</a></li>
                                <li><a class="dropdown-item" href="#">Lista 2</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#crearLista">Crear lista</a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4>Lampara de Satoru Gojo</h4>
                            <p>Disponible en distintos colores.</p>
                        </div>
                        <h4>$500</h4>
                        <p><span class="info-label">Cantidad disponible:</span> 20</p>
                        <p><span class="info-label">Categoria:</span> Anime</p>
                        <button type="button" class="btn btnColorCard btnHover"  style="color:aliceblue;">Cotizar</button>
                            <div class="text-center my-5">
                                  <div class="btn-group" role="group" aria-label="Grupo de botones">
                                     <button type="button" class="btn btnColorCard btnHover " style="color:aliceblue;"data-toggle="modal" data-target="#comprar">Comprar</button>
                                     <button type="button" class="btn btnHover" style="background-color: #7dcf72;color:aliceblue;">&#128722;</button>
                                  </div>
                            </div>
                        <!-- Modal -->
                        <div class="modal fade" id="comprar">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            
                                <!-- Cabecera del Modal -->
                                <div class="modal-header">
                                <h4 class="modal-title">Método de pago</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Contenido del Modal -->
                                <div class="modal-body text-center">
                                    <p><span>Un articulo en tu carrito</span></p>                     
                                    <div class="row">
                                        <div class="col-4 mx-5" >
                                            <p><span>Subtotal=</span></p>
                                        </div>
                                        <div class="col-4">
                                            <p><span>$500</span></p>
                                        </div>   
                                    </div>
                                    <button class="btn btnHover" style="background-color: #FFC43A; color:#03258C;"><h5>Pagar con PayPal</h5></button>
                                </div>
                                
                                <!-- Pie del Modal -->
                                <div class="modal-footer">
                                <button type="button" class="btn btnColorCard btnHover" data-dismiss="modal">Cerrar</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        <!-- Crear Lista  -->
                        <div class="modal fade" id="crearLista" tabindex="-1" aria-labelledby="crearLista" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            
                                <!-- Cabecera del Modal -->
                                <div class="modal-header">
                                <h4 class="modal-title">Crear lista</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Contenido del Modal -->
                                <div class="modal-body text-center">
                
                                    <div class="row">
                                        <div class="col-5 mx-5 my-5" >
                                            <input type="text" class="form-control my-2" id="nomLista" placeholder="Nombre de la lista" required>
                                            <input type="text" class="form-control my-2" id="descLista" placeholder="Descripción" required>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <input class="form-control" style="background-size: 50vh" type="file" id="#img-preview" onchange="loadFile(event)" required>
                                                <img id="#img-uploader" src="../img/principal/abanico.jpg"/>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                                
                                <!-- Pie del Modal -->
                                <div class="modal-footer">
                                    <button class="btn btnHover" style="background-color: #FFC43A; color:#03258C; color:aliceblue;">Crear</button>
                                    <button type="button" class="btn btnColorCard btnHover" data-dismiss="modal" style="color:aliceblue;">Cerrar</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-6 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="my-3 mx-2">Comentarios</h5>
                            <div class="my-2">

                                <img src="../img/fotoPerfil.jpg" alt="" style="width: 30px; height: 30px; object-fit: cover; border-radius: 10px 10px 10px 10px;">
                                <span style="background-color: rgb(251, 233, 226); border-radius: 10px 10px 10px 10px;">Jaky</span>
                                <p class="mx-5" >
                                    Me encanta!!, es de las mejores lamparas del mercado xd, muy bonitaaa </p>   
                            </div>
                            <div class="my-2">
                                <img src="../img/Lilysa.png" alt="" style="width: 30px; height: 30px; object-fit: cover; border-radius: 10px 10px 10px 10px;">
                                <span style="background-color: rgb(251, 233, 226); border-radius: 10px 10px 10px 10px;">Mei</span>
                                <p class="mx-5" >
                                    Me gustaria que tuvieran mas variedad de colores, no se, tal vez uno de color turqueza estaria bastante bien
                            </div>
                            <div class="my-2">
                                <img src="../img/Lilysa.png" alt="" style="width: 30px; height: 30px; object-fit: cover; border-radius: 10px 10px 10px 10px;">
                                <span style="background-color: rgb(251, 233, 226); border-radius: 0px 10px 10px 10px;">uwu</span>
                                <br>
                                <p class="mx-5" >
                                    Bastante buena
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="comentario" class="form-label">Qué te pareció este producto?</label>
                                    <div class="rating">
                                        <i class="bi bi-star-fill star "></i>
                                        <i class="bi bi-star-fill star "></i>
                                        <i class="bi bi-star-fill star "></i>
                                        <i class="bi bi-star-fill star"></i>
                                        <i class="bi bi-star-fill star"></i>
                                    </div>
                                    <textarea class="form-control" id="comentario" rows="4" placeholder="Escribe tu comentario aquí"></textarea>
                                </div>
                                <button type="submit" class="btn btnColorCard btnHover" style="color:aliceblue;">Publicar Comentario</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../Front/js/cargaImagen.js"></script>
    <script src="../Front/js/vistaProducto.js"></script>
</body>
<footer class="bg-dark text-white p-5">
    <div class="container Footer">
        <div class="row">
            <div class="col-md-3 col-lg-3 text-reset text-uppercase d-flex align-items-center">
                <!-- Logo inferior -->
                <img src="http://localhost/prueba/PWCI/img/logo/Micherry.png" width="60" alt="Logo Micherry" class="img-logo mr-2">
                Micherry
            </div>
  
            <div class="col-md-3 col-lg-3">
                <!-- Menú 1 -->
                <ul class="list-unstyled">
                    <li class="my-2">1975922</li>
                    <li class="my-2">Lucero Jaqueline Mendoza Alejandro</li>
                </ul>
            </div>
  
            <div class="col-md-3 col-lg-3">
                <!-- Menú 2 -->
                <ul class="list-unstyled">
                    <li class="my-2"></li>
                    <li class="my-2">1975922</li>
                    <li class="my-2">Emilio Yair Castillo Pacheco</li>
                </ul>
            </div>
  
            <div class="col-md-3 col-lg-3">
                <!-- Menú 3 -->
                <ul class="list-unstyled">
                    <li class="my-3">Materia</li>
                    <li class="my-2">Programación web de capa intermedia</li>
                </ul>
            </div>
        </div>
    </div>
    </footer>
</html>