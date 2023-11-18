<?php
include('../BackEnd/conexion/cn_db.php');
try {
    if(isset($_SESSION['usuario'])){
        $email = $_SESSION['usuario'];
        $id_seller = $_SESSION['usuarioId'];
    } else {
        header("Location: ../Front/login.php"); 
        exit();
    }

    if(isset($_GET['idProductoEn'])){
    $idProductoEn = $_GET['idProductoEn'];
        

    $sql = "SELECT id_categ, nombre FROM tb_categorias";
    $catestmt = $conn->prepare($sql);
    $catestmt->execute();

    $consulta = "SELECT * FROM tb_usuarios WHERE tuser = 1";
    $stmt = $conn->prepare($consulta);
    $stmt->execute();

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

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    }
    } else {
        echo 'El producto no fue encontrado';
        exit();
    }
    
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>