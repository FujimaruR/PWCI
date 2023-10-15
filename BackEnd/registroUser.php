<?php

include('../BackEnd/conexion/cn_db.php');

//isset($_POST['btn_registro'])

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = trim($_POST['usuario']);
    $email = trim($_POST['correoLogin']);
    $contra = trim($_POST['Password']);
    $tuser = 1;
    $fecha_registro = date("d/m/y");

    $consulta = "INSERT INTO tb_usuarios(nombre, email, contrasena, tuser, fecha_registro) 
    VALUES (:nombre, :email, :contrasena, :tuser, :fecha_registro)";

    $stmt = $conn->prepare($consulta);
    $stmt->bindParam(':nombre', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':contrasena', $contra);
    $stmt->bindParam(':tuser', $tuser);
    $stmt->bindParam(':fecha_registro', $fecha_registro);
    $stmt->execute();


    if($resultado){
        
        if(isset($_FILES['img-upload']) && $_FILES['img-upload']['error'] === UPLOAD_ERR_OK) {
            $nombreArchivo = $_FILES['img-upload']['name']; 
            $tipoArchivo = $_FILES['img-upload']['type']; 
            $tamanoArchivo = $_FILES['img-upload']['size']; 
            $rutaTempArchivo = $_FILES['img-upload']['tmp_name']; 
        
            $archivoBinario = fopen($rutaTempArchivo, 'rb');
            $contenidoArchivo = fread($archivoBinario, $tamanoArchivo);
            fclose($archivoBinario);
        }
        $nomcom = trim($_POST['usuarioNombre']);
        $fecha_nacimiento = trim($_POST['R_FECHA']);
        $sexo = trim($_POST['genderSwitch']);
        $user_id = trim($_POST['t']);


        $consultaD = "INSERT INTO tb_normaluser(img, complete_name, fecha_nacimiento, sexo, usuario_id) 
        VALUES ('$contenidoArchivo','$nomcom','$fecha_nacimiento','$sexo','$user_id')";

        $resultadoD= mysqli_query($conn, $consultaD);
    }
}

?>