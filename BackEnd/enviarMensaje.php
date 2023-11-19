<?php
session_start();
include('../BackEnd/conexion/cn_db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $mensaje = $_POST["mensaje"];
        $id_chat = $_POST["id_chat"];
        $id_emisor = $_POST["id_emisor"];

        $consultaInsertarMensaje = "INSERT INTO tb_mensajesEnviados (mensaje, fecha_enviado, id_chat, id_emisor) VALUES (:mensaje, NOW(), :id_chat, :id_emisor)";
        $stmtInsertarMensaje = $conn->prepare($consultaInsertarMensaje);
        $stmtInsertarMensaje->bindParam(':mensaje', $mensaje);
        $stmtInsertarMensaje->bindParam(':id_chat', $id_chat);
        $stmtInsertarMensaje->bindParam(':id_emisor', $id_emisor);
        $stmtInsertarMensaje->execute();

        echo json_encode(array('success' => 'Mensaje enviado con éxito'));
    } catch (PDOException $e) {
        echo json_encode(array('error' => 'Error en la base de datos: ' . $e->getMessage()));
    }
} else {
    echo json_encode(array('error' => 'Método no permitido'));
}
?>