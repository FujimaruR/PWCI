<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('../BackEnd/conexion/cn_db.php');

    $emaila = trim($_POST['correoLogin']);
    $contrab = trim($_POST['PasswordLogin']);
    $tuser = trim($_POST['formControlTypeUser']);

    try {
        $consulta = "SELECT id, email, contrasena, tuser FROM tb_usuarios WHERE email = :emailb AND tuser = :tuserb";
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':emailb', $emaila);
        $stmt->bindParam(':tuserb', $tuser);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $row['contrasena'];
            $db_tuser = $row['tuser'];
            $db_id_user = $row['id'];
            if ($tuser == 0) {
                if ($contrab == $hashed_password && $tuser == $db_tuser) {
                    $_SESSION['usuario'] = $emaila;
                    $_SESSION['usuarioId'] = $db_id_user;
                    header("Location: ../Front/administrador.php");
                    exit();
                } else {
                    header("Location: ../Front/login.php?error=Usuario,%20contraseña%20o%20tipo%20de%20usuario%20incorrectos.");
                    exit();
                }
            } elseif ($tuser == 1) {
                if (password_verify($contrab, $hashed_password) && $tuser == $db_tuser) {
                    $_SESSION['usuario'] = $emaila;
                    $_SESSION['usuarioId'] = $db_id_user;
                    header("Location: ../Front/paginaPrincipal.php");
                    exit();
                } else {
                    header("Location: ../Front/login.php?error=Usuario,%20contraseña%20o%20tipo%20de%20usuario%20incorrectos.");
                    exit();
                }
            } else {
                header("Location: ../Front/login.php?error=Tipo%20de%20usuario%20incorrectos.");
                exit();
            }
        } else {
            header("Location: ../Front/login.php?error=Usuario%no%20encontrado.");
            exit();
        }
    } catch(PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
        exit();
    }
}
?>