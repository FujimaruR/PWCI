<?php
include($_SERVER['DOCUMENT_ROOT'] . '/BackEnd/conexion/cn_db.php');
try {
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

        $consulta = "SELECT * FROM vista_producto_aceptado
        WHERE id_Producto = :idprod";
    
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':idprod', $idProductoEn);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "ID del producto no proporcionado.";
    }
    /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["buscarProducto"])) {

            $productobuscado = $_POST["productobuscar"];
            $productobuscado = "%{$productobuscado}%";

            $sqlpu = "SELECT * FROM vista_producto_aceptado WHERE nombre LIKE :nombreproducbus";
            $stmt = $conn->prepare($sqlpu);
            $stmt->bindParam(':nombreproducbus', $productobuscado);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location: ../Front/administrador.php");
                exit(); 
            } else {
                header("Location: ../Front/administrador.php?error=Producto%20no%20encontrado.");
                exit();
            }
        }
    }*/
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>