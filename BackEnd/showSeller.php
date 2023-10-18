<?php
include('../BackEnd/conexion/cn_db.php');

    try{
        if(isset($_SESSION['usuario'])){
            $email = $_SESSION['usuario'];
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
    } catch(PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
        exit();
    }
?>