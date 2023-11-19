<?php
include('../BackEnd/conexion/cn_db.php');
try {
    if(isset($_SESSION['usuarioId'])){
        $email = $_SESSION['usuario'];
        $id_seller = $_SESSION['usuarioId'];
    } else {
        header("Location: ../Front/login.php");
        exit(); 
    }

    $consulta = "SELECT * FROM tb_usuarios 
    WHERE email = :email";
    
    $stmt = $conn->prepare($consulta);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    
        $consultad = "SELECT * FROM tb_normaluser 
    WHERE usuario_id = :idb";
    
    $stmtd = $conn->prepare($consultad);
    $stmtd->bindParam(':idb', $usuario['id']);
    $stmtd->execute();
    $usuarioNormal = $stmtd->fetch(PDO::FETCH_ASSOC);
        
    $mime_type = 'image/png';
    
    $imagen_url = 'data:' . $mime_type . ';base64,' . base64_encode($usuarioNormal['img']);

    $consultaConversaciones = "SELECT * FROM tb_mensajes 
    WHERE id_receptor = :idemi";
        
    $stmtConversaciones = $conn->prepare($consultaConversaciones);
    $stmtConversaciones->bindParam(':idemi', $id_seller);
    $stmtConversaciones->execute();
    $usuarioConversaciones = $stmtConversaciones->fetchAll(PDO::FETCH_ASSOC);

    $conversacionesConMensajes = [];

    foreach ($usuarioConversaciones as $conversacion) {
        $id_conversacion = $conversacion['id_mensaje'];

        $consultaUltimoMensaje = "SELECT mensaje FROM tb_mensajesEnviados WHERE id_chat = :id_conversacion ORDER BY fecha_enviado DESC LIMIT 1";
        $stmtUltimoMensaje = $conn->prepare($consultaUltimoMensaje);
        $stmtUltimoMensaje->bindParam(':id_conversacion', $id_conversacion);
        $stmtUltimoMensaje->execute();
        $ultimoMensaje = $stmtUltimoMensaje->fetch(PDO::FETCH_ASSOC);

        $conversacion['ultimo_mensaje'] = $ultimoMensaje['mensaje'];
        $conversacionesConMensajes[] = $conversacion;
    }    
} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
    exit();
}
?>