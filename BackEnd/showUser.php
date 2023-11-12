<?php
include('../BackEnd/conexion/cn_db.php');

    try{
        if(isset($_SESSION['usuario'])){
            $email = $_SESSION['usuario'];
            $id_usuarioNom = $_SESSION['usuarioId'];
        } else {
            header("Location: ../Front/login.php"); 
            exit();
        }
    
        $consulta = "SELECT * FROM tb_usuarios 
        WHERE email = :email";
    
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    
        $consultad = "SELECT * FROM tb_normaluser 
        WHERE usuario_id = :idb";
    
        $stmtd = $conn->prepare($consultad);
        $stmtd->bindParam(':idb', $usuario['id']);
        $stmtd->execute();
        $usuarioNormal = $stmtd->fetch(PDO::FETCH_ASSOC);
        
        $mime_type = 'image/png';
    
        $imagen_url = 'data:' . $mime_type . ';base64,' . base64_encode($usuarioNormal['img']);


        $consultat = "SELECT * FROM tb_userinformation WHERE usuario_idInfo = :useridinf";

        $stmtt = $conn->prepare($consultat);
        $stmtt->bindParam(':useridinf', $usuario['id']);
        $stmtt->execute();
        $usuarioNormalInfo = $stmtt->fetch(PDO::FETCH_ASSOC);

        $consultarTabla = "SELECT * FROM tb_listas 
        WHERE id_usuarioLista = :iduserLista";
    
        $stmtTabla = $conn->prepare($consultarTabla);
        $stmtTabla->bindParam(':iduserLista', $id_usuarioNom);
        $stmtTabla->execute();
        $TablaOver = $stmtTabla->fetch(PDO::FETCH_ASSOC);        
    } catch(PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
        exit();
    }


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = trim($_POST['editnom']);
        $postal = trim($_POST['postalcod']);
        $direc = trim($_POST['direc']);
        $telef = trim($_POST['telefono']);

        try {
            if (isset($_FILES['editImg']) && $_FILES['editImg']['error'] === UPLOAD_ERR_OK) {
                $nombreArchivo = $_FILES['editImg']['name'];
                $rutaTempArchivo = $_FILES['editImg']['tmp_name'];

                $extensionesPermitidas = array("jpg", "jpeg", "png", "gif");

                $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                if (!in_array(strtolower($extension), $extensionesPermitidas)) {
                    header("Location: ../Front/perfil_usuario.php?error=Archivo%20no%20permitido.");
                    exit();
                }

                $contenidoArchivo = file_get_contents($rutaTempArchivo);
            } else {
                header("Location: ../Front/perfil_usuario.php?error=Error%20al%20subir%20el%20archivo.");
                exit();
            }


            $checkQuery = "SELECT COUNT(*) FROM tb_userinformation WHERE usuario_idInfo = :useridinfo";
            $stmtCheck = $conn->prepare($checkQuery);
            $stmtCheck->bindParam(':useridinfo', $usuario['id']);
            $stmtCheck->execute();
            $rowCount = $stmtCheck->fetchColumn();

            if ($rowCount > 0) {
                $updateQuery = "UPDATE tb_userinformation SET codepos = :postal, direc = :direccion, telef = :telefono WHERE usuario_idInfo = :useridin";
                $stmtUpdate = $conn->prepare($updateQuery);
                $stmtUpdate->bindParam(':postal', $postal);
                $stmtUpdate->bindParam(':direccion', $direc);
                $stmtUpdate->bindParam(':telefono', $telef);
                $stmtUpdate->bindParam(':useridin', $usuario['id']);
                $stmtUpdate->execute();


                $updateQueryD = "UPDATE tb_normaluser SET complete_name = :namecom, img = :imgupd WHERE usuario_id = :uridin";
                $stmtUpdateD = $conn->prepare($updateQueryD);
                $stmtUpdateD->bindParam(':namecom', $name);
                $stmtUpdateD->bindParam(':imgupd', $contenidoArchivo);
                $stmtUpdateD->bindParam(':uridin', $usuario['id']);
                $stmtUpdateD->execute();

                header("Location: ../Front/perfil_usuario.php");
                exit(); 
            } else {
                $insertQuery = "INSERT INTO tb_userinformation (codepos, direc, telef, usuario_idInfo) VALUES (:postal, :direccion, :telefono, :useridinfor)";
                $stmtInsert = $conn->prepare($insertQuery);
                $stmtInsert->bindParam(':postal', $postal);
                $stmtInsert->bindParam(':direccion', $direc);
                $stmtInsert->bindParam(':telefono', $telef);
                $stmtInsert->bindParam(':useridinfor', $usuario['id']);
                $stmtInsert->execute();

                $insertQueryD = "UPDATE tb_normaluser SET complete_name = :namecomp, img = :imgins WHERE usuario_id = :useridinforms";
                $stmtInsertd = $conn->prepare($insertQueryD);
                $stmtInsertd->bindParam(':namecomp', $name);
                $stmtInsertd->bindParam(':imgins', $contenidoArchivo);
                $stmtInsertd->bindParam(':useridinforms', $usuario['id']);
                $stmtInsertd->execute();

                header("Location: ../Front/perfil_usuario.php");
                exit(); 
            }
        } catch (PDOException $e) {
            echo "Error en la base de datos: " . $e->getMessage();
            exit();
        }
    }
?>