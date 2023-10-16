<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('../BackEnd/conexion/cn_db.php');

    $emaila = trim($_POST['correoLogin']);
    $contrab = trim($_POST['PasswordLogin']);

    try {
        $consulta = "SELECT email, contrasena FROM tb_usuarios WHERE email = :emailb";
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':emailb', $emaila);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $row['contrasena'];

            if (password_verify($contrab, $hashed_password)) {
                $_SESSION['usuario'] = $emaila;
                header("Location: ../Front/paginaPrincipal.php");
                exit(); 
            } else {
                echo "Contraseña incorrecta";

                //echo "Email: " . $row['email'] . "<br>";
                //echo "Contraseña hash: " . $row['contrasena'] . "<br>";
            }
        } else {
            echo "Usuario no encontrado";
        }
    } catch(PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
    }
}
?>