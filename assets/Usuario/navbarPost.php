<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/prueba/PWCI/BackEnd/conexion/cn_db.php');

try {
    $nombreprodnavbar = trim($_POST['bproductonav']);
    $nombreprodnavbar = "%{$nombreprodnavbar}%";
    $precioU = trim($_POST['precioMeNavbar']);
    $precioD = trim($_POST['precioMaNavbar']);
    $califChe = trim($_POST['calificadoNavbar']);
    $vendiSel = trim($_POST['vendidosNavbar']);
    $categoriasArrayNav = json_decode($_POST['categoriasNavbar']);

    $consulta = "SELECT * FROM vista_productos_pruebas 
    WHERE nombre LIKE :nomnavbar";

    if (!empty($precioU)) {
        $consulta .= " AND precio >= :precioIni";
    }

    if (!empty($precioD)) {
        $consulta .= " AND precio <= :precioFin";
    }

    if (!empty($califChe)) {
        $consulta .= " AND rating = :ratingN";
    }

    if (!empty($categoriasArrayNav)) {
        $consulta .= " AND FIND_IN_SET(:categoria, categorias) > 0";
    }
    
    $stmt = $conn->prepare($consulta);
    $stmt->bindParam(':nomnavbar', $nombreprodnavbar);

    if (!empty($precioU)) {
        $stmt->bindParam(':precioIni', $precioU);
    }

    if (!empty($precioD)) {
        $stmt->bindParam(':precioFin', $precioD);
    }

    if (!empty($califChe)) {
        $ratingnav = 3;
        $stmt->bindParam(':ratingN', $ratingnav);
    }

    if (!empty($categoriasArrayNav)) {
        foreach ($categoriasArrayNav as $categoria) {
            $stmt->bindParam(':categoria', $categoria);
            
        }
    }

    if($stmt->execute()){
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['resultadoBusqueda'] = $resultados;
        header("Location: http://localhost/prueba/PWCI/Front/b_producto.php");  
        exit(); 
    }

    /*foreach ($resultados as $filtroNav) {
        echo $filtroNav['nombre'];
        echo "hola";
    }
    $stmt->execute();
    $filtroNav = $stmt->fetch(PDO::FETCH_ASSOC);*/
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>