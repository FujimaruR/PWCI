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

    if(isset($_GET['idProductoEn'])){
        $idProductoEn = $_GET['idProductoEn'];

        $consultaImagenes = "SELECT img, id_categoriac, nombre_categoria FROM vista_productos_completo WHERE id_Producto = :idprod";
        $stmtImagenes = $conn->prepare($consultaImagenes);
        $stmtImagenes->bindParam(':idprod', $idProductoEn);
        $stmtImagenes->execute();
        $filasImagenes = $stmtImagenes->fetchAll(PDO::FETCH_ASSOC);

        $imagenesPorCategoria = [];
        $categoriasString = '';
        foreach ($filasImagenes as $fila) {
            $categoria = $fila['id_categoriac'];
            $nombreCategoria = $fila['nombre_categoria'];
            $imagen = $fila['img'];
            if (!isset($imagenesPorCategoria[$categoria])) {
                $imagenesPorCategoria[$categoria] = $imagen;
                $categoriasString .= $nombreCategoria . ', ';
            }
        }
        $categoriasString = rtrim($categoriasString, ', ');   

        $consultaImgV = "SELECT id_img, img FROM tb_img WHERE id_prod = :idprod";
        $stmtImgv = $conn->prepare($consultaImgV);
        $stmtImgv->bindParam(':idprod', $idProductoEn);
        $stmtImgv->execute();
        $ImagenesFila = $stmtImgv->fetchAll(PDO::FETCH_ASSOC);

        $consultap = "SELECT * FROM vista_producto_aceptado
        WHERE id_Producto = :idprod";
    
        $stmtproducto = $conn->prepare($consultap);
        $stmtproducto->bindParam(':idprod', $idProductoEn);
        $stmtproducto->execute();
        $productoBuscado = $stmtproducto->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "ID del producto no proporcionado.";
    }
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>