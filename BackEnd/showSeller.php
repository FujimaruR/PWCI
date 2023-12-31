<?php
include('../BackEnd/conexion/cn_db.php');

    try{
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

        $sql = "SELECT id_categ, nombre FROM tb_categorias";
        $catestmt = $conn->prepare($sql);
        $catestmt->execute();

        $sqlac = "SELECT * FROM vista_producto_aceptado WHERE id_usuarioProd = :useridi";
        $stmtt = $conn->prepare($sqlac);
        $stmtt->bindParam(':useridi', $id_seller);
        $stmtt->execute();

        $productosAceptados = $stmtt->fetchAll(PDO::FETCH_ASSOC);

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['confirmcvbtn'])){
                $dateIni = trim($_POST['dateIni']);
                $dateFin = trim($_POST['dateFin']);
                $categoriasArrayCV = json_decode($_POST['categoriaCVarray']);


                $sqlbusquedaCV= "SELECT * FROM vista_ordensearch 
                WHERE id_UserCreador = :iduserprod AND :dateI < fechaCompra AND :dateF > fechaCompra";

                if (!empty($categoriasArrayCV)) {
                    $sqlbusquedaCV .= " AND FIND_IN_SET(:categoria, nombre_categoria) > 0";
                }
                
                $stmtconsultaVenta = $conn->prepare($sqlbusquedaCV);
                $stmtconsultaVenta->bindParam(':iduserprod', $id_seller);
                $stmtconsultaVenta->bindParam(':dateI', $dateIni);
                $stmtconsultaVenta->bindParam(':dateF', $dateFin);
                if (!empty($categoriasArrayCV)) {
                    foreach ($categoriasArrayCV as $categoria) {
                        $stmtconsultaVenta->bindParam(':categoria', $categoria);
                    }
                }
                $stmtconsultaVenta->execute();
                if($stmtconsultaVenta->rowCount() > 0){
                $consultaVenta = $stmtconsultaVenta->fetchAll(PDO::FETCH_ASSOC);
                } else {
                $consultaVenta = null;
                }

                echo '<script>
                    window.onload = function() {
                        const myModal = new bootstrap.Modal(document.getElementById("consulvent"));
                        myModal.show();
                    };
                </script>';
            }
        }
    } catch(PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
        exit();
    }
?>