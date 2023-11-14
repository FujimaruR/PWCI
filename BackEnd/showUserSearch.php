<?php
include('../BackEnd/conexion/cn_db.php');
try {
    if (isset($_GET['idListaProdVer'])) {
        $idListaProdVer = $_GET['idListaProdVer'];
        $consultaProdLista = "SELECT * FROM v_lista_producto_img WHERE IDlista = :idListaProd";
        $stmtConsultaProd = $conn->prepare($consultaProdLista);
        $stmtConsultaProd->bindParam(':idListaProd', $idListaProdVer);
        $stmtConsultaProd->execute();
        $listaProductosV = $stmtConsultaProd->fetchAll(PDO::FETCH_ASSOC);
        $rowListasProdCount = $stmtConsultaProd->rowCount();
    }
    
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

    if(isset($_GET['idUserSearch'])){
        $idUserSearch = $_GET['idUserSearch'];

        $consultauserS = "SELECT * FROM tb_usuarios 
        WHERE id = :idus";
        
        $stmtSearch = $conn->prepare($consultauserS);
        $stmtSearch->bindParam(':idus', $idUserSearch);
        $stmtSearch->execute();
        $usuarioSearch = $stmtSearch->fetch(PDO::FETCH_ASSOC);
        
        $consultaduserS = "SELECT * FROM tb_normaluser 
        WHERE usuario_id = :idbd";
        
        $stmtdSearch = $conn->prepare($consultaduserS);
        $stmtdSearch->bindParam(':idbd', $idUserSearch);
        $stmtdSearch->execute();
        $usuarioNormalSearch = $stmtdSearch->fetch(PDO::FETCH_ASSOC);
            
        $mime_typeSearch = 'image/png';
        
        $imagen_urlSearch = 'data:' . $mime_typeSearch . ';base64,' . base64_encode($usuarioNormalSearch['img']);

        $consultaUserSearch = "SELECT * FROM tb_userinformation WHERE usuario_idInfo = :useridinf";

        $stmtt = $conn->prepare($consultaUserSearch);
        $stmtt->bindParam(':useridinf', $idUserSearch);
        $stmtt->execute();
        $usuarioNormalInfoSearch = $stmtt->fetch(PDO::FETCH_ASSOC);

        $consultarTabla = "SELECT * FROM tb_listas 
        WHERE id_usuarioLista = :iduserLista AND privacidad = 0";
    
        $stmtTabla = $conn->prepare($consultarTabla);
        $stmtTabla->bindParam(':iduserLista', $idUserSearch);
        $stmtTabla->execute();
        $TablaOver = $stmtTabla->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>