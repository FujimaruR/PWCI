<?php

include('../BackEnd/conexion/cn_db.php');

if(isset($_POST['btn_registro'])){

    $name = trim($_POST['usuario']);
    $email = trim($_POST['correoLogin']);
    $contra = trim($_POST['Password']);
    $nomcom = trim($_POST['usuarioNombre']);

    $consulta = "INSERT INTO tb_usuarios(id, nombre, email, contrasena, tuser, fecha_registro) 
    VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])";
}

?>