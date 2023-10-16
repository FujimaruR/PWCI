<?php
//isset($_POST['btn_registro'])

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include('../BackEnd/conexion/cn_db.php');

    $name = trim($_POST['usuario']);
    $email = trim($_POST['correoLogin']);
    $contra = trim($_POST['Password']);
    $tuser = 1;
    $fecha_registro = date("d/m/y");

    $hashed_password = password_hash($contra, PASSWORD_DEFAULT);


    try {
        $consulta = "INSERT INTO tb_usuarios(nombre, email, contrasena, tuser, fecha_registro) 
        VALUES (:nombre, :email, :contrasena, :tuser, :fecha_registro)";

        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':nombre', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contrasena', $hashed_password);
        $stmt->bindParam(':tuser', $tuser);
        $stmt->bindParam(':fecha_registro', $fecha_registro);
    
        if($stmt->execute()){

            if ($_FILES['imgupload']['error'] !== UPLOAD_ERR_OK) {
                echo "Error al subir el archivo. Código de error: " . $_FILES['imgupload']['error'];
                exit();
            }
            if (isset($_FILES['imgupload']) && $_FILES['imgupload']['error'] === UPLOAD_ERR_OK) {
                $nombreArchivo = $_FILES['imgupload']['name'];
                $rutaTempArchivo = $_FILES['imgupload']['tmp_name'];

                $extensionesPermitidas = array("jpg", "jpeg", "png", "gif");

                $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                if (!in_array(strtolower($extension), $extensionesPermitidas)) {
                    echo "Error: Archivo no permitido.";
                    exit();
                }

                $contenidoArchivo = file_get_contents($rutaTempArchivo);
            } else {
                echo "Error al subir el archivo.";
                exit();
            }
            
            $nomcom = trim($_POST['usuarioNombre']);
            $fecha_nacimiento = trim($_POST['R_FECHA']);
            $sexo = isset($_POST['genderSwitch']) && $_POST['genderSwitch'] == '1' ? 1 : 0;
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

                if($stmtD->execute()){
                    $_SESSION['usuario'] = $email;
                    header("Location: ../Front/paginaPrincipal.php");
                    exit(); 
                } else {
                    echo "Error en la creacion del usuario.";
                    exit();
                }
            } catch(PDOException $e) {
                echo "Error en la base de datos: " . $e->getMessage();
                exit();
            }
        } else {
            echo "Error al crear el usuario.";
            exit();
        }
    } catch(PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
        exit();
    }
}

?>