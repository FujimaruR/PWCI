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

    $consultabcar = "SELECT * FROM vw_carrito_productos_img 
    WHERE id_usuariocar = :idusercar";
    
    $stmtbcar = $conn->prepare($consultabcar);
    $stmtbcar->bindParam(':idusercar', $usuario['id']);
    $stmtbcar->execute();
    $carritoBuscar = $stmtbcar->fetchAll(PDO::FETCH_ASSOC);
    $rowCarritoNCount = $stmtbcar->rowCount();

    $queryListasS = "SELECT id_Lista, nombre FROM tb_listas";
    
    $stmtSListas = $conn->prepare($queryListasS);
    $stmtSListas->execute();
    $listasCom = $stmtSListas->fetchAll(PDO::FETCH_ASSOC);
    $rowListasNCount = $stmtSListas->rowCount();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['btnElmPCar'])){
            $idpelim = trim($_POST['idProdListaBorrar']);
            $consultaElim = "DELETE FROM tb_carrito 
            WHERE id_productoCar = :idprodca";
            
            $stmtelim = $conn->prepare($consultaElim);
            $stmtelim->bindParam(':idprodca', $idpelim);
            $stmtelim->execute();

            header("Location: ../Front/carrito.php");
                
            exit(); 
        }
    }
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>