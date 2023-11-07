<?php
include('../BackEnd/conexion/cn_db.php');

try {
    if(isset($_SESSION['usuario'])){
        $email = $_SESSION['usuario'];
    } else {
        header("Location: ../Front/login.php"); 
        exit();
    }

    $sql = "SELECT id_categ, nombre FROM tb_categorias";
    $catestmt = $conn->prepare($sql);
    $catestmt->execute();


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        try {
            if (isset($_FILES['imguploaderNprod']) && $_FILES['imguploaderNprod']['error'] === UPLOAD_ERR_OK) {
                $nombreArchivo = $_FILES['imguploaderNprod']['name'];
                $rutaTempArchivo = $_FILES['imguploaderNprod']['tmp_name'];

                $extensionesPermitidas = array("jpg", "jpeg", "png", "gif", "mp4", "mov");

                $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                if (!in_array(strtolower($extension), $extensionesPermitidas)) {
                    header("Location: ../Front/n_producto.php?error=Archivo%20no%20permitido.");
                    exit();
                }

                $contenidoArchivo = file_get_contents($rutaTempArchivo);
            } else {
                header("Location: ../Front/n_producto.php?error=Error%20al%20subir%20el%20archivo.");
                exit();
            }


            $stmt = $conn->prepare("CALL InsertarProductos(:p_nombre, :p_descripcion, :p_precio, :p_estatus, :p_t_producto, :p_cant_disp, :p_rating, :p_id_usuarioProd, :p_imagenes, @idProducto)");
            
            $name = trim($_POST['productinput']);
            $descripcion = trim($_POST['floatingTextarea']);
            $cantidad = trim($_POST['floatingInput']);
            $estatus = false;
            if (isset($_POST['flexSwitchCheckDefault']) && $_POST['flexSwitchCheckDefault'] == 'cotizar') {
                $t_producto = false;
                $precio = 0;
            } else {
                $t_producto = true; // esto es si es de tipo cotizado o normal. En este caso 1 sera normal
                $precio = trim($_POST['priceinput']);
            }
            $rating = 0; 
            $id_usuarioProd = $_SESSION['usuarioId'];

            $stmt->bindParam(':p_nombre', $name, PDO::PARAM_STR);
            $stmt->bindParam(':p_descripcion', $descripcion, PDO::PARAM_STR);
            $stmt->bindParam(':p_precio', $precio, PDO::PARAM_INT);
            $stmt->bindParam(':p_estatus', $estatus, PDO::PARAM_BOOL);
            $stmt->bindParam(':p_t_producto', $t_producto, PDO::PARAM_BOOL);
            $stmt->bindParam(':p_cant_disp', $cantidad, PDO::PARAM_INT);
            $stmt->bindParam(':p_rating', $rating, PDO::PARAM_INT);
            $stmt->bindParam(':p_id_usuarioProd', $id_usuarioProd, PDO::PARAM_INT);
            $stmt->bindParam(':p_imagenes', $contenidoArchivo, PDO::PARAM_LOB);

            if($stmt->execute()){

                $stmt = $conn->query("SELECT @idProducto AS idProducto");
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $idProducto = $result['idProducto'];
                $categoriasArray = json_decode($_POST['categoriasInput']);

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
                    $stmtInsertRelacion->bindParam(':idProducto', $idProducto); // Debes definir $idProducto antes de esta línea
                    $stmtInsertRelacion->bindParam(':idCategoria', $idCategoria);
                    $stmtInsertRelacion->execute();
                }
                header("Location: ../Front/vendedor.php");
                
                exit(); 
            } else {
                header("Location: ../Front/n_producto.php?error=Error%20en%20la%20creacion%20del%20usuario.");
                exit();
            }
        } catch (PDOException $e) {
            echo "Error en la base de datos: " . $e->getMessage();
            exit();
        }
    }
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}

?>