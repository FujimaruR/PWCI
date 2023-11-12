<?php
session_start();
include('../BackEnd/conexion/cn_db.php');

try {
    $nomLista = trim($_POST['nomLista']);
    $descLista = trim($_POST['descLista']);
    $privacidad = isset($_POST['privacidad']) && $_POST['privacidad'] == '1' ? 1 : 0;
    $id_usuario = $_SESSION['usuarioId'];
    $id_producto= trim($_POST['idProdLista']);

    if (isset($_FILES['imgupload']) && $_FILES['imgupload']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['imgupload']['name'];
        $rutaTempArchivo = $_FILES['imgupload']['tmp_name'];

        $extensionesPermitidas = array("jpg", "jpeg", "png", "gif");

        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        if (!in_array(strtolower($extension), $extensionesPermitidas)) {
            header("Location: ../Front/paginaPrincipal.php?error=Archivo%20no%20permitido.");
            exit();
        }

        $contenidoArchivo = file_get_contents($rutaTempArchivo);
    } else {
        var_dump($_FILES['imgupload']);
        exit();
        header("Location: ../Front/paginaPrincipal.php?error=Error%20al%20subir%20el%20archivo.");
        exit();
    }

    $stmt = $conn->prepare("CALL InsertarListaYProductos(:nombre, :descripcion, :privacidad, :img, :id_usuarioLista, :id_productoLista)");

    $stmt->bindParam(':nombre', $nomLista, PDO::PARAM_STR);
    $stmt->bindParam(':descripcion', $descLista, PDO::PARAM_STR);
    $stmt->bindParam(':privacidad', $privacidad, PDO::PARAM_BOOL);
    $stmt->bindParam(':img', $contenidoArchivo, PDO::PARAM_LOB);
    $stmt->bindParam(':id_usuarioLista', $id_usuario, PDO::PARAM_INT);
    $stmt->bindParam(':id_productoLista', $id_producto, PDO::PARAM_INT);

    if($stmt->execute()){
        header("Location: ../Front/paginaPrincipal.php");
        exit(); 
    } else {
        header("Location: ../Front/paginaPrincipal.php?error=Error%20en%20la%20creacion%20de%20la%20lista.");
        exit();
    }
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>