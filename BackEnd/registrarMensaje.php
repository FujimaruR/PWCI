<?php
session_start();
include('../BackEnd/conexion/cn_db.php');
try {
    if(isset($_SESSION['usuarioId'])){
        $id_user = $_SESSION['usuarioId'];
    } else {
        header("Location: ../Front/login.php"); 
        exit();
    }

    if(isset($_GET['vendedor'])){
        $vendedor = $_GET['vendedor'];

        $consulta = "SELECT * FROM tb_mensajes 
        WHERE id_emisor = :idem AND id_receptor = :idres";
        
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':idem', $id_user);
        $stmt->bindParam(':idres', $vendedor);
        $stmt->execute();

        if ($stmt->rowCount() > 0){
            header("Location: ../Front/mensajes_usuario.php"); 
            exit();
        } else {

            $consultaInsert = "INSERT INTO tb_mensajes (id_emisor, id_receptor) 
            VALUES (:idEmi, :idRec)";
            
            $stmtInsert = $conn->prepare($consultaInsert);
            $stmtInsert->bindParam(':idEmi', $id_user);
            $stmtInsert->bindParam(':idRec', $vendedor);

            $stmtInsert->execute();

            header("Location: ../Front/mensajes_usuario.php"); 
            exit();
            
        }

    } else{
        header("Location: ../Front/login.php"); 
        exit();
    }


} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>