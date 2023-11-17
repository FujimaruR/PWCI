<?php
include('../BackEnd/conexion/cn_db.php');

try {
    if(isset($_SESSION['usuarioId'])){
        $email = $_SESSION['usuario'];
        $id_user = $_SESSION['usuarioId'];
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

    $sqlShowPedido = "SELECT * FROM vista_ordencompraproductos 
    WHERE id_usuario = :iduserpedi";
    
    $stmtshowpedido = $conn->prepare($sqlShowPedido);
    $stmtshowpedido->bindParam(':iduserpedi', $id_user);
    $stmtshowpedido->execute();
    $pedidoShow = $stmtshowpedido->fetchAll(PDO::FETCH_ASSOC);

    
    $categoriasFiltrosPedidos = "SELECT id_categ, nombre FROM tb_categorias";
    $catestmtFiltrosPedidos = $conn->prepare($categoriasFiltrosPedidos);
    $catestmtFiltrosPedidos->execute();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['confirmSP'])){
            $dateIni = trim($_POST['dateIni']);
            $dateFin = trim($_POST['dateFin']);
            $categoriasArraySP = json_decode($_POST['categoriaSParray']);

            $sqlbusquedaSP= "SELECT * FROM vista_ordensearch 
            WHERE id_usuario = :iduserpedi AND :dateI < fechaCompra AND :dateF > fechaCompra";

            if (!empty($categoriasArraySP)) {
                $sqlbusquedaSP .= " AND FIND_IN_SET(:categoria, nombre_categoria) > 0";
            }
            
            $stmtbusquedapedido = $conn->prepare($sqlbusquedaSP);
            $stmtbusquedapedido->bindParam(':iduserpedi', $id_user);
            $stmtbusquedapedido->bindParam(':dateI', $dateIni);
            $stmtbusquedapedido->bindParam(':dateF', $dateFin);
            if (!empty($categoriasArraySP)) {
                foreach ($categoriasArraySP as $categoria) {
                    $stmtbusquedapedido->bindParam(':categoria', $categoria);
                }
            }
            $stmtbusquedapedido->execute();
            if($stmtbusquedapedido->rowCount() > 0){
            $pedidoShow = $stmtbusquedapedido->fetchAll(PDO::FETCH_ASSOC);
            } else {
            $pedidoShow = null;
            }
        } 
    }
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>