<?php
include('../BackEnd/conexion/cn_db.php');
try {
    
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>