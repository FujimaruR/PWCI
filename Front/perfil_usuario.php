<?php
session_start();
include("../BackEnd/showUser.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/perfil_usuario.css">
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
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
    <?php
        $_GET['logged'] = '1';
        include_once('../assets/General/navbarSettings.php');
    ?>

    <div class="container-fluid mt-5 p-3">
        <div class="row">
            <div class="col-lg-9 col-md-10 col-sm-12 mx-auto">
                <h5>Perfil de usuario</h5>
                <div class="card" style="background-color:#f5d3dfe4; border-radius: 30px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-8 col-sm-8 m-4">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <img src="<?php echo $imagen_url; ?>"
                                        class="img-fluid rounded-start" alt="..."
                                        style="height: 100%; width: 80%;border-radius: 80px 80px 50px 50px;">
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $usuario['nombre']; ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h5>Información</h5>
                                <p class="card-text">Correo: <?php echo $usuario['email']; ?></p>
                                <p class="card-text">Nombre completo: <?php echo $usuarioNormal['complete_name']; ?></p>
                                <p class="card-text">Codigo postal: <?php echo isset($usuarioNormalInfo['codepos']) ? $usuarioNormalInfo['codepos'] : 'No disponible'; ?></p>
                                <p class="card-text">Direccion de entrega: <?php echo isset($usuarioNormalInfo['direc']) ? $usuarioNormalInfo['direc'] : 'No disponible'; ?></p>
                                <p class="card-text">Numero telefonico: <?php echo isset($usuarioNormalInfo['telef']) ? $usuarioNormalInfo['telef'] : 'No disponible'; ?></p>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#editarPerfil">Editar</button>

                            </div>
                            <div class="col-md-5">
                                <div class="card-body ">
                                    <h5>Otras configuraciones</h5>
                                    <a class="btn btn-danger" role="button" data-bs-toggle="modal"
                                        data-bs-target="#UsuarioVendedorPer">
                                        Ir al perfil de vendedor
                                    </a>
                                    <h5>Perfil</h5>
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
        <?php
            if (isset($_GET['error'])) {
                echo "Error: " . urldecode($_GET['error']);
            }
        ?>
    </div>

    <div class="modal fade" id="editarPerfil" tabindex="-1" aria-labelledby="editarPerfilLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editarPerfilLabel">Editar perfil</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="editperfilform" enctype="multipart/form-data">
                        <label for="editnom">Nombre completo: </label>
                        <input type="text" class="form-control" id="editnom" name="editnom" placeholder="..." required>
                        <label for="postalcod">Codigo postal: </label>
                        <input type="text" class="form-control" id="postalcod" name="postalcod" placeholder="..." required>
                        <label for="direc">Direccion: </label>
                        <input type="text" class="form-control" id="direc" name="direc" placeholder="..." required>
                        <label for="telef">Número telefónico:</label>
                        <input type="tel" class="form-control" id="telef" name="telefono" placeholder="Ejemplo: 1234567890" required>
                        <div id="telefError" style="color: red;"></div>

                        <div class="col-4">
                            <label for="formFile" class="form-label">Foto de perfil</label>
                            <div class="card">
                                <input class="form-control" style="background-size: 50%" type="file" id="#img-preview" name="editImg"
                                    onchange="loadFile(event)" required>
                                <img id="#img-uploader" />
                            </div>
                        </div>

                        <button type="submit" class="btn btn-danger" id="guardarButton" style="margin-top: 3%;" disabled>Guardar</button>

                        <script>
                        const telefInput = document.getElementById('telef');
                        const telefError = document.getElementById('telefError');
                        const guardarButton = document.getElementById('guardarButton');

                        telefInput.addEventListener('input', function() {
                            let telefValue = telefInput.value.replace(/\D/g,
                            ''); // Eliminar caracteres no numéricos
                            telefInput.value = telefValue;

                            if (telefValue.length !== 10) {
                                telefError.textContent =
                                'El número de teléfono debe tener 10 dígitos numéricos';
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
                                <li>
                                    <p class="m-1">Lista bonita de ropa que me gusta</p>
                                </li>
                            </ul>
                            <ul class="ml-2">
                                <li>
                                    <h5 class="m-1">6 articulos</h5>
                                </li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target="#verlistaprod">
                                <ul class="ml-2 pointprod">

                                    <li>
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_rojo.png"
                                            class="img-fluid" alt="...">
                                    </li>
                                    <li>
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindo.png"
                                            class="img-fluid" alt="...">
                                    </li>
                                    <li>
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindod.png"
                                            class="img-fluid" alt="...">
                                    </li>
                                    <li class="img-container">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_blanco.png"
                                            class="img-fluid" alt="...">
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

    <div class="modal fade" id="editarlistamod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editarlistamodhead">Editar lista</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container ">
                        <row>
                            <input type="text" class="form-control my-2" id="nomLista" placeholder="Nombre de la lista"
                                required>
                            <input type="text" class="form-control my-2" id="descLista" placeholder="Descripción"
                                required>

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

    <div class="modal fade" id="borrarlistamod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

    <div class="modal fade" id="verlistaprod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabelped">Productos en la lista</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container ">
                        <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                            href="vistaProducto.php" title="Ver detalles del producto">
                            <div class="card mb-3"
                                style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_rojo.png"
                                            class="img-fluid rounded-start" alt="..."
                                            style="height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="badge btnColorCard" style="border-radius: 10px 30px;">
                                                <h6>Vestido rojo</h6>
                                            </div>
                                            <p class="card-text" style="padding-top: 1%;">Vestido lindo color rojo</p>
                                            <p class="card-text"><small
                                                    class="text-body-secondary"><strong>MXN$750.00</strong></small></p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                            href="vistaProducto.php" title="Ver detalles del producto">
                            <div class="card mb-3"
                                style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindo.png"
                                            class="img-fluid rounded-start" alt="..."
                                            style="height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="badge btnColorCard" style="border-radius: 10px 30px;">
                                                <h6>Vestido escolar</h6>
                                            </div>
                                            <p class="card-text" style="padding-top: 1%;">Vestido sacado de un dorama
                                            </p>
                                            <p class="card-text"><small
                                                    class="text-body-secondary"><strong>MXN$1000.00</strong></small></p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                            href="vistaProducto.php" title="Ver detalles del producto">
                            <div class="card mb-3"
                                style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_lindod.png"
                                            class="img-fluid rounded-start" alt="..."
                                            style="height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="badge btnColorCard" style="border-radius: 10px 30px;">
                                                <h6>Vestido para citas</h6>
                                            </div>
                                            <p class="card-text" style="padding-top: 1%;">Vestido lindo para una cita
                                            </p>
                                            <p class="card-text"><small
                                                    class="text-body-secondary"><strong>MXN$1200.00</strong></small></p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                            href="vistaProducto.php" title="Ver detalles del producto">
                            <div class="card mb-3"
                                style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/vestido_blanco.png"
                                            class="img-fluid rounded-start" alt="..."
                                            style="height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="badge btnColorCard" style="border-radius: 10px 30px;">
                                                <h6>Vestido blanco</h6>
                                            </div>
                                            <p class="card-text" style="padding-top: 1%;">Ropa casual lindo</p>
                                            <p class="card-text"><small
                                                    class="text-body-secondary"><strong>MXN$500.00</strong></small></p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                            href="vistaProducto.php" title="Ver detalles del producto">
                            <div class="card mb-3"
                                style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/cosplay_chino.png"
                                            class="img-fluid rounded-start" alt="..."
                                            style="height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="badge btnColorCard" style="border-radius: 10px 30px;">
                                                <h6>Cosplay</h6>
                                            </div>
                                            <p class="card-text" style="padding-top: 1%;">Cosplay chino lindo</p>
                                            <p class="card-text"><small
                                                    class="text-body-secondary"><strong>MXN$2000.00</strong></small></p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="link-offset-2 link-underline link-underline-opacity-0 refervista"
                            href="vistaProducto.php" title="Ver detalles del producto">
                            <div class="card mb-3"
                                style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="http://localhost/prueba/PWCI/img/vendedor/productos/camisa_linda.png"
                                            class="img-fluid rounded-start" alt="..."
                                            style="height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="badge btnColorCard" style="border-radius: 10px 30px;">
                                                <h6>Ropa citas</h6>
                                            </div>
                                            <p class="card-text" style="padding-top: 1%;">Ropa para una cita con tu
                                                novio</p>
                                            <p class="card-text"><small
                                                    class="text-body-secondary"><strong>MXN$1300.00</strong></small></p>
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

    <div class="modal fade" id="UsuarioVendedorPer" tabindex="-1" aria-labelledby="UsuarioVendedorPerLabel"
        aria-hidden="true">
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

    <?php
        include_once('../assets/General/footer.php');
    ?>
</body>

</html>