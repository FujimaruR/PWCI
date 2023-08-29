<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/mensajes_vendedor.css">
  <script src="http://localhost/prueba/PWCI/Front/js/mensajes_vendedor.js"></script>
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

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-3">
        <ul class="list-group" id="user-list">
          <li class="list-group-item active list-group-item-danger" data-user="usuario1">Usuario 1</li>
          <li class="list-group-item list-group-item-danger" data-user="usuario2">Usuario 2</li>
          <!-- Agrega más usuarios aquí -->
        </ul>
      </div>
      <div class="col-md-9">
        <div class="card" id="conversation-card">
          <div class="card-header">
            Conversación
          </div>
          <div class="card-body">
            <ul class="list-group" id="message-list">
              <!-- Mensajes se agregarán aquí dinámicamente -->
            </ul>
          </div>
          <div class="card-footer">
            <form id="message-form">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Escribe tu mensaje...">
                <div class="input-group-append">
                  <button class="btn btn-danger" type="submit">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>