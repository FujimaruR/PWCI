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

        $consultap = "SELECT * FROM vista_productos_pruebas
        WHERE id_Producto = :idprod";
    
        $stmtproducto = $conn->prepare($consultap);
        $stmtproducto->bindParam(':idprod', $idProductoEn);
        $stmtproducto->execute();
        $productoBuscado = $stmtproducto->fetch(PDO::FETCH_ASSOC);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['btnConfirmEdicion'])){
            if (isset($_FILES['imguploaderNprod']) && !empty($_FILES['imguploaderNprod']['name'][0])) {
                $extensionesPermitidas = array("jpg", "jpeg", "png", "gif", "mp4", "mov");
                $archivos = array();
            
                foreach ($_FILES['imguploaderNprod']['name'] as $key => $nombreArchivo) {
                    $rutaTempArchivo = $_FILES['imguploaderNprod']['tmp_name'][$key];
                    $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
            
                    if (!in_array(strtolower($extension), $extensionesPermitidas)) {
                        header("Location: ../Front/editar_producto.php?error=Archivo%20no%20permitido.");
                        exit();
                    }
            
                    $contenidoArchivo = file_get_contents($rutaTempArchivo);
            
                    $archivos[] = array(
                        'nombre' => $nombreArchivo,
                        'tipo' => $extension,
                        'contenido' => $contenidoArchivo
                    );
            
                }
            } else {
                header("Location: ../Front/editar_producto.php?error=Error%20al%20subir%20el%20archivo.");
                var_dump($_FILES['imguploaderNprod']);
                exit();
            }

            $stmtInsertarp = $conn->prepare("UPDATE tb_productos SET nombre = :p_nombre, descripcion = :p_descripcion, precio = :p_precio, estatus = :p_estatus, t_producto = :p_t_producto, cant_disp = :p_cant_disp, rating = :p_rating WHERE id_Producto = :id_productoc");
            
            $name = trim($_POST['productinput']);
            $descripcion = trim($_POST['floatingTextarea']);
            $cantidad = trim($_POST['floatingInput']);
            $estatus = true;
            if (isset($_POST['flexSwitchCheckDefault']) && $_POST['flexSwitchCheckDefault'] == 'cotizar') {
                $t_producto = false;
                if (isset($_POST['checkCot']) && $_POST['checkCot'] == 'CotizarUsuario'){
                    $userCoti = trim($_POST['userSelect']);
                    $precio = trim($_POST['priceinput']);
                    $permiso = 1;

                    $stmtCotizar = $conn->prepare("CALL insert_or_update_cotizacion(?, ?, ?)");
                    $stmtCotizar->bindParam(1, $idProductoEn, PDO::PARAM_INT);
                    $stmtCotizar->bindParam(2, $userCoti, PDO::PARAM_INT);
                    $stmtCotizar->bindParam(3, $permiso, PDO::PARAM_BOOL);
                    $stmtCotizar->execute();
                } else{
                    $precio = 0;
                }
            } else {
                $t_producto = true; // esto es si es de tipo cotizado o normal. En este caso 1 sera normal
                $precio = trim($_POST['priceinput']);
            }
            $rating = 0; 
            $id_usuarioProd = $_SESSION['usuarioId'];

            $stmtInsertarp->bindParam(':p_nombre', $name);
            $stmtInsertarp->bindParam(':p_descripcion', $descripcion);
            $stmtInsertarp->bindParam(':p_precio', $precio);
            $stmtInsertarp->bindParam(':p_estatus', $estatus);
            $stmtInsertarp->bindParam(':p_t_producto', $t_producto);
            $stmtInsertarp->bindParam(':p_cant_disp', $cantidad);
            $stmtInsertarp->bindParam(':p_rating', $rating);
            $stmtInsertarp->bindParam(':id_productoc', $idProductoEn);

            if($stmtInsertarp->execute()){
                $categoriasArray = json_decode($_POST['categoriasInput']);

                $stmtc = $conn->prepare("DELETE FROM tb_categoriasprod WHERE id_productoc = :idProductodel");
                $stmtc->bindParam(':idProductodel', $idProductoEn);
                $stmtc->execute();

                foreach ($categoriasArray as $categoria) {
                    $stmtd = $conn->prepare("SELECT id_categ FROM tb_categorias WHERE nombre = :categoria");
                    $stmtd->bindParam(':categoria', $categoria);
                    $stmtd->execute();
                    $result = $stmtd->fetch(PDO::FETCH_ASSOC);
                    if (!$result) {
                        $stmtInsertCategoria = $conn->prepare("INSERT INTO tb_categorias (nombre) VALUES (:categoria)");
                        $stmtInsertCategoria->bindParam(':categoria', $categoria);
                        $stmtInsertCategoria->execute();
                        $idCategoria = $conn->lastInsertId();
                    } else {
                        $idCategoria = $result['id_categ'];
                    }
                
                    $stmtInsertRelacion = $conn->prepare("INSERT INTO tb_categoriasprod (id_productoc, id_categoriac) VALUES (:idProducto, :idCategoria)");
                    $stmtInsertRelacion->bindParam(':idProducto', $idProductoEn); // Debes definir $idProducto antes de esta línea
                    $stmtInsertRelacion->bindParam(':idCategoria', $idCategoria);
                    $stmtInsertRelacion->execute();
                }

                $stmtci = $conn->prepare("DELETE FROM tb_img WHERE id_prod = :idProductoAr");
                $stmtci->bindParam(':idProductoAr', $idProductoEn);
                $stmtci->execute();

                foreach ($archivos as $archivo) {
                    $contenidoArchivo = $archivo['contenido'];
                
                    $stmtInsertImagen = $conn->prepare("INSERT INTO tb_img (img, id_prod) VALUES (:contenidoArchivo, :idProducto)");
                    $stmtInsertImagen->bindParam(':contenidoArchivo', $contenidoArchivo, PDO::PARAM_LOB);
                    $stmtInsertImagen->bindParam(':idProducto', $idProductoEn, PDO::PARAM_INT);
                    $stmtInsertImagen->execute();
                }

                header("Location: ../Front/vendedor.php");
                
                exit(); 
            }
        }
        if(isset($_POST['btnEliminarProd'])){
            echo 'Eliminar';
            exit();
        }
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