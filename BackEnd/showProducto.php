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

        $consultaVcomentarios = "SELECT * FROM vista_usuarios_comentarios 
        WHERE IDproductoCom = :idpro";
        
        $stmtVcom = $conn->prepare($consultaVcomentarios);
        $stmtVcom->bindParam(':idpro', $idProductoEn);
        $stmtVcom->execute();
        $usuarioVcomentario = $stmtVcom->fetchAll(PDO::FETCH_ASSOC);


        $consultaCotizar = "SELECT * FROM tb_cotizaciones 
        WHERE id_productoC = :idprocot AND id_userC = :idusercot";
        
        $stmtVcoti = $conn->prepare($consultaCotizar);
        $stmtVcoti->bindParam(':idprocot', $idProductoEn);
        $stmtVcoti->bindParam(':idusercot', $id_seller);
        $stmtVcoti->execute();
        $usuarioVcotizar = $stmtVcoti->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "ID del producto no proporcionado.";
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['btncomentariomod'])){
            $IDuserCom = $id_seller;
            $IDproductoCom = $_GET['idProductoEn']; 
            $comentario = trim($_POST['comentario']);
            $calificacion = trim($_POST['numStarsForm']);
            
            $sqlComentario = "SELECT insertar_comentario_y_actualizar_rating(?, ?, ?, ?) as result";
            $stmtComentario = $conn->prepare($sqlComentario);
            $stmtComentario->bindParam(1, $IDuserCom, PDO::PARAM_INT);
            $stmtComentario->bindParam(2, $IDproductoCom, PDO::PARAM_INT);
            $stmtComentario->bindParam(3, $comentario, PDO::PARAM_STR);
            $stmtComentario->bindParam(4, $calificacion, PDO::PARAM_INT);
            $stmtComentario->execute();

            $result = $stmtComentario->fetch(PDO::FETCH_ASSOC);

            if ($result['result'] == 1) {
                header("Location: ../Front/vistaProducto.php?idProductoEn=$IDproductoCom"); 
                exit();
            } else {
                echo "Error al ejecutar la función.";
            }
        }

        if(isset($_POST['confirmBTNagregarL'])){
            $idListaL = trim($_POST['idListaAgregarIDl']);
            $idProdL = trim($_POST['idListaAgregarProd']);
    
            $consultaInsertProdL = "INSERT INTO tb_listasprod (IDlista, IDproductoLista) 
            VALUES (:idLIS, :idPROD)";
            
            $stmtIprodL = $conn->prepare($consultaInsertProdL);
            $stmtIprodL->bindParam(':idLIS', $idListaL);
            $stmtIprodL->bindParam(':idPROD', $idProdL);
    
            if($stmtIprodL->execute()){
                header("Location: ../Front/paginaPrincipal.php");
                exit(); 
            } else {
                header("Location: ../Front/paginaPrincipal.php?error=Error%20en%20la%20actualizacion%20de%20la%20lista.");
                exit();
            }
        }

        if(isset($_POST['confirmBTNagregarCarrito'])){
            $idCarritoAgregarProd = trim($_POST['idCarritoAgregarProd']);
            $idCarritoAgregarUser = trim($_POST['idCarritoAgregarUser']);
    
            $consultaInsertProdC = "INSERT INTO tb_carrito (id_productoCar, id_usuariocar) 
            VALUES (:idprodcar, :idusercar)";
            
            $stmtIprodC = $conn->prepare($consultaInsertProdC);
            $stmtIprodC->bindParam(':idprodcar', $idCarritoAgregarProd);
            $stmtIprodC->bindParam(':idusercar', $idCarritoAgregarUser);
    
            if($stmtIprodC->execute()){
                header("Location: ../Front/carrito.php");
                exit(); 
            } else {
                header("Location: ../Front/paginaPrincipal.php?error=Error%20en%20la%20creacion%20del%20carrito.");
                exit();
            }
        }

        if(isset($_POST['btncomentariomodVenta'])){
            $IDuserComV = $id_seller;
            $IDproductoComV = $_GET['idProductoEn']; 
            $comentarioV = trim($_POST['comentarioventa']);
            $calificacionV = trim($_POST['numStarsFormVenta']);
            $precioV = trim($_POST['precioFormVenta']);
            $cantidadV = trim($_POST['cantProdVenta']);

            $consultaInsertVenta = "INSERT INTO tb_ordencompra (subtotal, id_usuario, calificacion) 
            VALUES (:subtotalVenta, :iduserventa, :califven)";
            
            $stmtVenta = $conn->prepare($consultaInsertVenta);
            $stmtVenta->bindParam(':subtotalVenta', $precioV);
            $stmtVenta->bindParam(':iduserventa', $IDuserComV);
            $stmtVenta->bindParam(':califven', $calificacionV);

            $stmtVenta->execute();

            $idVenta = $conn->lastInsertId();

            $consultaInsertOrdenProd = "SELECT insertar_y_actualizarOrden(?, ?, ?, ?) as resultOrden";
            
            $stmtOrdenProd = $conn->prepare($consultaInsertOrdenProd);
            $stmtOrdenProd->bindParam(1, $idVenta, PDO::PARAM_INT);
            $stmtOrdenProd->bindParam(2, $IDproductoComV, PDO::PARAM_INT);
            $stmtOrdenProd->bindParam(3, $precioV, PDO::PARAM_INT);
            $stmtOrdenProd->bindParam(4, $cantidadV, PDO::PARAM_INT);

            $stmtOrdenProd->execute();

            $resultActualizar = $stmtOrdenProd->fetch(PDO::FETCH_ASSOC);

            if ($resultActualizar['resultOrden'] == 1) {
            
                $sqlComentarioV = "SELECT insertar_comentario_y_actualizar_rating(?, ?, ?, ?) as result";
                $stmtComentarioV = $conn->prepare($sqlComentarioV);
                $stmtComentarioV->bindParam(1, $IDuserComV, PDO::PARAM_INT);
                $stmtComentarioV->bindParam(2, $IDproductoComV, PDO::PARAM_INT);
                $stmtComentarioV->bindParam(3, $comentarioV, PDO::PARAM_STR);
                $stmtComentarioV->bindParam(4, $calificacionV, PDO::PARAM_INT);
                $stmtComentarioV->execute();
    
                $resultV = $stmtComentarioV->fetch(PDO::FETCH_ASSOC);
    
                if ($resultV['result'] == 1) {
                    header("Location: ../Front/pedidos.php"); 
                    exit();
                } else {
                    echo "Error al ejecutar la función.";
                    exit();
                }

            } else {
                echo "Error al ejecutar la función.";
                exit();
            }
        }

    }
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>