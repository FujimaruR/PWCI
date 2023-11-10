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
        <form class="d-flex" role="search" action="" method="POST">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="productobuscar">
            <button class="btn btn-danger text-light" type="submit" name="buscarProducto">Search</button>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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