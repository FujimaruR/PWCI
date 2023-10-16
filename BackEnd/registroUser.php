<?php
//isset($_POST['btn_registro'])

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include('../BackEnd/conexion/cn_db.php');

    $name = trim($_POST['usuario']);
    $email = trim($_POST['correoLogin']);
    $contra = trim($_POST['Password']);
    $tuser = 1;
    $fecha_registro = date("d/m/y");


    try {
        $consulta = "INSERT INTO tb_usuarios(nombre, email, contrasena, tuser, fecha_registro) 
        VALUES (:nombre, :email, :contrasena, :tuser, :fecha_registro)";

        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':nombre', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contrasena', $contra);
        $stmt->bindParam(':tuser', $tuser);
        $stmt->bindParam(':fecha_registro', $fecha_registro);
        $stmt->execute();
    } catch(PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
    }


    if($stmt->execute()){

        if(isset($_FILES['imgupload']) && $_FILES['imgupload']['error'] === UPLOAD_ERR_OK) {
            $nombreArchivo = $_FILES['imgupload']['name'];
            $tipoArchivo = $_FILES['imgupload']['type'];
            $tamanoArchivo = $_FILES['imgupload']['size'];
            $rutaTempArchivo = $_FILES['imgupload']['tmp_name'];
            
            $extensionesPermitidas = array("jpg", "jpeg", "png", "gif");
            
            $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
            if(!in_array(strtolower($extension), $extensionesPermitidas)) {
                echo "Error: Archivo no permitido o excede el tamaño máximo permitido.";
            } else {
                $contenidoArchivo = file_get_contents($rutaTempArchivo);
            }
        } else {
            echo "Error al subir el archivo.";
        }
        
        $nomcom = trim($_POST['usuarioNombre']);
        $fecha_nacimiento = trim($_POST['R_FECHA']);
        $sexo = trim($_POST['genderSwitch']);
        $user_id = $conn->lastInsertId();

        try {
            $consultaD = "INSERT INTO tb_normaluser(img, complete_name, fecha_nacimiento, sexo, usuario_id) 
            VALUES (:imag, :comname, :datebirth, :sex, :userid)";

            $stmtD = $conn->prepare($consultaD);
            $stmtD->bindParam(':imag', $contenidoArchivo);
            $stmtD->bindParam(':comname', $nomcom);
            $stmtD->bindParam(':datebirth', $fecha_nacimiento);
            $stmtD->bindParam(':sex', $sexo);
            $stmtD->bindParam(':userid', $user_id);
            $stmtD->execute();

            if($stmtD->execute()){
                $_SESSION['usuario'] = $name;
                header("Location: ../Front/paginaPrincipal.php");
                exit(); 
            }
        } catch(PDOException $e) {
            echo "Error en la base de datos: " . $e->getMessage();
        }
    }
}

?>