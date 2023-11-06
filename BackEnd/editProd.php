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


            $stmt = $conn->prepare("CALL InsertarDatos(:nombre, :descripcion, :precio, :estatus, :t_producto, :cant_disp, :rating, :id_usuarioProd, :imagenes, :id_categorias)");

            
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
            $id_categorias = trim($_POST['floatingSelect']);

            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
            $stmt->bindParam(':precio', $precio, PDO::PARAM_INT);
            $stmt->bindParam(':estatus', $estatus, PDO::PARAM_BOOL);
            $stmt->bindParam(':t_producto', $t_producto, PDO::PARAM_BOOL);
            $stmt->bindParam(':cant_disp', $cantidad, PDO::PARAM_INT);
            $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
            $stmt->bindParam(':id_usuarioProd', $id_usuarioProd, PDO::PARAM_INT);
            $stmt->bindParam(':imagenes', $contenidoArchivo, PDO::PARAM_LOB);
            $stmt->bindParam(':id_categorias', $id_categorias, PDO::PARAM_INT);

            if($stmt->execute()){
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