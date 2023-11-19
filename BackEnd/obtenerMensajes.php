<?php
session_start();
include("../BackEnd/conexion/cn_db.php");

if (isset($_GET['id_conversacion'])) {
    try {
        $id_conversacion = $_GET['id_conversacion'];

        // Consulta para obtener los mensajes de la conversación
        $consultaMensajes = "SELECT mensaje FROM tb_mensajesEnviados WHERE id_chat = :id_conversacion ORDER BY fecha_enviado";
        $stmtMensajes = $conn->prepare($consultaMensajes);
        $stmtMensajes->bindParam(':id_conversacion', $id_conversacion);
        $stmtMensajes->execute();

        // Obtiene los resultados como un array asociativo
        $mensajes = $stmtMensajes->fetchAll(PDO::FETCH_ASSOC);

        // Devuelve los mensajes en formato JSON
        header('Content-Type: application/json');
        echo json_encode($mensajes);
    } catch (PDOException $e) {
        // Manejo de errores
        echo json_encode(array('error' => 'Error en la base de datos: ' . $e->getMessage()));
    }
} else {
    // Si no se proporciona el parámetro id_conversacion
    echo json_encode(array('error' => 'Parámetro id_conversacion no proporcionado'));
}
?>