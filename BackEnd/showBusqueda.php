<?php
include('../BackEnd/conexion/cn_db.php');
try {
    if(isset($_SESSION['usuarioId'])){
        $email = $_SESSION['usuario'];
        $id_seller = $_SESSION['usuarioId'];
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

    $queryListasS = "SELECT id_Lista, nombre FROM tb_listas";
    
    $stmtSListas = $conn->prepare($queryListasS);
    $stmtSListas->execute();
    $listasCom = $stmtSListas->fetchAll(PDO::FETCH_ASSOC);
    $rowListasNCount = $stmtSListas->rowCount();

    if(isset($_POST['confirmBTNagregarL'])){
        $idListaL = trim($_POST['idListaAgregarIDl']);
        $idProdL = trim($_POST['idListaAgregarProd']);

        $consultaInsertProdL = "INSERT INTO tb_listasprod (IDlista, IDproductoLista) 
        VALUES (:idLIS, :idPROD)";
        
        $stmtIprodL = $conn->prepare($consultaInsertProdL);
        $stmtIprodL->bindParam(':idLIS', $idListaL);
        $stmtIprodL->bindParam(':idPROD', $idProdL);

        if($stmtIprodL->execute()){
            header("Location: ../Front/showBusqueda.php");
            exit(); 
        } else {
            header("Location: ../Front/showBusqueda.php?error=Error%20en%20la%20actualizacion%20de%20la%20lista.");
            exit();
        }
    }
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}

?>