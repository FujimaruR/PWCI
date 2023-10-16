<?php
session_start();
include("../BackEnd/registroUser.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/login.css">
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">

    <style>
    body {
        background-image: url(http://localhost/prueba/PWCI/img/login/fondoLogReg.gif);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100 py-5">
            <div class="col-sm-8 col-md-6 col-lg-6 transparent-bg py-5 rounded ">
                <div class="col-12 text-center">
                    <img class="mx-auto mb-3" src="http://localhost/prueba/PWCI/img/logo/Micherry.png"
                        alt="Centered Image" style="max-width: 150px;">
                    <h4>Micherry</h4>
                </div>
                <form action="" method="post" class="row g-3" id="registroForm" enctype="multipart/form-data">
                    <div class="col-12 text-center align-items-center">
                        <h5>Registro de usuario</h5>
                    </div>
                    <div class="col-1 mx-4"></div>
                    <div class="col-4">
                        <input type="email" class="form-control " id="correoLogin" name="correoLogin"
                            placeholder="name@example.com" required title="Por favor, ingresa tu correo">

                        <input type="text" class="form-control my-2" id="usuario" name="usuario" placeholder="usuario"
                            required>

                        <input type="Password" class="form-control my-2" id="PasswordLogin" name="Password"
                            placeholder="password" required>

                        <input type="text" class="form-control my-2" id="usuarioNombre" name="usuarioNombre"
                            placeholder="nombre completo" required>
                    </div>
                    <div class="col-4">
                        <label for="formFile" class="form-label" id="registroForm">Foto de perfil</label>
                        <div class="card">
                            <input class="form-control" style="background-size: 50vh" name="imgupload" type="file"
                                id="#img-preview" onchange="loadFile(event)" required>
                            <img id="#img-uploader" />
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="form-check form-switch d-flex my-2 ">
                            <label class="form-check-label px-5 " for="genderSwitch">Mujer</label>
                            <input class="form-check-input px-3" type="checkbox" id="genderSwitch" name="genderSwitch"
                                value="1">
                            <label class="form-check-label" for="genderSwitch">Hombre</label>
                        </div>
                        <label for="form-label" class="form-label col-sm-8 col-md-5 col-lg-5 px-5">Fecha de nacimiento
                            <input type="date" class="form-control" id="R_FECHA" name="R_FECHA"
                                onchange="validarFecha()" required>
                    </div>
                    <div class="col-12 text-center">
                        <div class="form-check mb-3">
                            <label class="form-check-label" for="rememberMeR">Recordar cuenta
                                <input type="checkbox" class="form-check-input" id="rememberMeR"></label>

                        </div>
                        <button type="submit" name="btn_registro" class="btn btn-danger mt-3">Registrar</button>
                    </div>
                </form>
                <div class="col-sm-8 mx-auto text-center">
                    <label>Ya tienes cuenta?</label><a href="login.php" style="color:brown">Inicia sesion</a>
                </div>

                <?php
                if (isset($_GET['error'])) {
                    echo "Error: " . urldecode($_GET['error']);
                }
                ?>
            </div>
        </div>
    </div>
    <script src="js/registro.js"></script>
    <script src="js/cargaImagen.js"></script>
</body>

</html>