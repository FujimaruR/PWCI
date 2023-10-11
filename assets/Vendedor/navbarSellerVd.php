<nav class="navbar navbar-expand-lg sticky-top" style="background-color:#7D2C6F;">
    <div class="container-fluid letraFuente">
        <a class="navbar-brand text-light" href="vendedor.php">
            <img src="http://localhost/prueba/PWCI/img/logo/Micherry.png" alt="Logo" height="30"
                class="d-inline-block align-text-top">
            Micherry
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
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

<div class="modal fade" id="UsuarioVendedorPer" tabindex="-1" aria-labelledby="UsuarioVendedorPerLabel"
    aria-hidden="true">
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