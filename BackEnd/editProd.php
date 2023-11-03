<?php
include('../BackEnd/conexion/cn_db.php');

try {
    if(isset($_SESSION['usuario'])){
        $email = $_SESSION['usuario'];
    } else {
        header("Location: ../Front/login.php"); 
        exit();
    }


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        try {
            //code...
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