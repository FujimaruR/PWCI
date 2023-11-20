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
        if(isset($_POST['btncomentariomodVenta'])){
            $IDuserComV = $id_seller;
            $IDproductoComV = json_decode($_POST['idProdCarritoForm']); 
            $comentarioV = trim($_POST['comentarioventa']);
            $calificacionV = trim($_POST['numStarsFormVenta']);
            $precioV = json_decode($_POST['precioCarritoForm']);
            $cantidadV = json_decode($_POST['cantidadCarritoForm']);

            $carritoData = array_map(function($idProducto, $precio, $cantidad) {
                return [
                    'idProducto' => $idProducto,
                    'precio' => $precio,
                    'cantidad' => $cantidad,
                ];
            }, $IDproductoComV, $precioV, $cantidadV);

            foreach ($carritoData as $producto){
                $idProducto = $producto['idProducto'];
                $precio = $producto['precio'];
                $cantidad = $producto['cantidad'];

                $consultaInsertVenta = "INSERT INTO tb_ordencompra (subtotal, id_usuario, calificacion) 
                VALUES (:subtotalVenta, :iduserventa, :califven)";
                
                $stmtVenta = $conn->prepare($consultaInsertVenta);
                $stmtVenta->bindParam(':subtotalVenta', $precio);
                $stmtVenta->bindParam(':iduserventa', $IDuserComV);
                $stmtVenta->bindParam(':califven', $calificacionV);

                $stmtVenta->execute();

                $idVenta = $conn->lastInsertId();

                $consultaInsertOrdenProd = "SELECT insertar_y_actualizarOrden(?, ?, ?, ?) as resultOrden";
            
                $stmtOrdenProd = $conn->prepare($consultaInsertOrdenProd);
                $stmtOrdenProd->bindParam(1, $idVenta, PDO::PARAM_INT);
                $stmtOrdenProd->bindParam(2, $idProducto, PDO::PARAM_INT);
                $stmtOrdenProd->bindParam(3, $precio, PDO::PARAM_INT);
                $stmtOrdenProd->bindParam(4, $cantidad, PDO::PARAM_INT);

                $stmtOrdenProd->execute();
                $resultActualizar = $stmtOrdenProd->fetch(PDO::FETCH_ASSOC);


                if ($resultActualizar['resultOrden'] == 1) {
            
                    $sqlComentarioV = "SELECT insertar_comentario_y_actualizar_rating(?, ?, ?, ?) as result";
                    $stmtComentarioV = $conn->prepare($sqlComentarioV);
                    $stmtComentarioV->bindParam(1, $IDuserComV, PDO::PARAM_INT);
                    $stmtComentarioV->bindParam(2, $idProducto, PDO::PARAM_INT);
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
    }
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>