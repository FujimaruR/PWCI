<?php
session_start();
include("../BackEnd/showSeller.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/mensajes_usuario.css">
    <script src="http://localhost/prueba/PWCI/Front/js/mensajes_usuario.js"></script>
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
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

    <?php
        include_once('../assets/General/footer.php');
    ?>
    
</body>

</html>