<?php
include('../BackEnd/conexion/cn_db.php');

try {
    if(isset($_SESSION['usuarioId'])){
        $id_admin = $_SESSION['usuarioId'];
    } else {
        header("Location: ../Front/login.php"); 
        exit();
    }

    $sqlpu = "SELECT * FROM vista_productos";
    $stmt = $conn->prepare($sqlpu);
    $stmt->execute();

    $productosnaceptados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $sqlac = "SELECT * FROM vista_producto_aceptado";
    $stmtt = $conn->prepare($sqlac);
    $stmtt->execute();

    $productosAceptados = $stmtt->fetchAll(PDO::FETCH_ASSOC);

    if (isset($_POST['confirmarBtn'])){
        $idProducto = $_POST['idProducto'];
        $estatusc = 1;

        $sqlcon = "UPDATE tb_productos SET estatus = :estatusc WHERE id_Producto = :id_productoc";
        $stmtd = $conn->prepare($sqlcon);
        $stmtd->bindParam(':estatusc', $estatusc);
        $stmtd->bindParam(':id_productoc', $idProducto);
        if($stmtd->execute()){
            $consultaAceptado = "INSERT INTO tb_productoaceptado (id_prodAceptado, id_adminAceptado) VALUES (:id_prodtado, :id_adtado)";
            $stmtAceptado = $conn->prepare($consultaAceptado);
            $stmtAceptado->bindParam(':id_prodtado', $idProducto);
            $stmtAceptado->bindParam(':id_adtado', $id_admin);
            if($stmtAceptado->execute()){
                header("Location: ../Front/administrador.php");  
                exit(); 
            } else {
                header("Location: ../Front/administrador.php?error=Producto%20no%20encontrado.");
                exit();
            }
        } else {
            header("Location: ../Front/administrador.php?error=Producto%20no%20encontrado.");
            exit();
        }
    }
    
    if (isset($_POST["buscarProducto"])) {

        $productobuscado = $_POST["productobuscar"];
        $productobuscado = "%{$productobuscado}%";

        $sqlbu = "SELECT * FROM vista_producto_aceptado WHERE nombre LIKE :nombreproducbus";
        $stmtc = $conn->prepare($sqlbu);
        $stmtc->bindParam(':nombreproducbus', $productobuscado);
        $stmtc->execute();
        if($stmtc->rowCount() > 0){
            $productosAceptados = $stmtc->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $productosAceptados = null;
        }
    }

} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>