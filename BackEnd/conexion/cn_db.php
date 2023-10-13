<?php
$host = 'localhost';
$dbname = 'pwci';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión establecida correctamente";
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>