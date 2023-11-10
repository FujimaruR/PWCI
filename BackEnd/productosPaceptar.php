<?php 
header('Content-Type: application/json');
include('../BackEnd/conexion/cn_db.php');

try {
    /*if(isset($_SESSION['usuario'])){
        $email = $_SESSION['usuario'];
    } else {
        header("Location: ../Front/login.php"); 
        exit();
    }*/


    $sqlpu = "SELECT * FROM vista_productos";
    $stmt = $conn->prepare($sqlpu);
    $stmt->execute();

    $productosnaceptados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    foreach ($productosnaceptados as &$producto) {
        $producto['img'] = base64_encode($producto['img']);
    }

    echo json_encode($productosnaceptados);

} catch (PDOException $e) {
    echo json_encode(array('error' => 'Error en la base de datos: ' . $e->getMessage()));
    exit();
}
?>