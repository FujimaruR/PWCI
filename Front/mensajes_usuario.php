<?php
session_start();
include("../BackEnd/showMensajesCom.php");
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
                    <?php 
                    if ($usuarioConversaciones !== null){
                        foreach ($usuarioConversaciones as $conversaciones){
                            echo ' <li class="list-group-item active list-group-item-danger" data-user="'.$conversaciones['id_mensaje'].'">Vendedor '.$conversaciones['id_receptor'].'</li>';
                        }
                    } else {
                        echo ' <li class="list-group-item active list-group-item-danger">No chats</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card" id="conversation-card">
                    <div class="card-header">
                        Conversación
                    </div>
                    <div class="card-body">
                        <ul class="list-group" id="message-list">
                        </ul>
                    </div>
                    <div class="card-footer">
                        <form id="message-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Escribe tu mensaje..." name="mensajeForm" id="mensajeForm" value="">
                                <input type="hidden" name="idchatForm" id="idchatForm" value="">
                                <input type="hidden" name="idemisorForm" id="idemisorForm" value="<?= $id_seller; ?>">
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

    <?php
        include_once('../assets/General/footer.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
</body>

</html>