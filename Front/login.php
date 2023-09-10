<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/login.css">
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">

    <style>
        body{ background-image: url(http://localhost/prueba/PWCI/img/login/fondoLogReg.gif);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center min-vh-100">

        <div class="col-sm-8 col-md-6 col-lg-4 transparent-bg py-5 rounded ">
          <div class="col-12 text-center">
             <img class="mx-auto mb-3" src="http://localhost/prueba/PWCI/img/logo/Micherry.png" alt="Centered Image" style="max-width: 150px;">
            <h4>Micherry</h4>
          </div>
            <form action="" class="col-8 mx-auto">
                  <input type="email" class="form-control my-3" id="correoLogin" placeholder="name@example.com" required>

                  <input type="Password" class="form-control my-3" id="PasswordLogin"name="Password" placeholder="password" required> 

                  <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Recordar cuenta</label>
                  </div>
                  
                  <div class="col-12 text-center py-3">
                    <button type="submit" class="btn btn-danger mt-3">Sign in</button>
                  </div> 

            </form>
            <div class="col-8  mx-auto align-items-center">
              <label>No tienes cuenta?</label><a href="registro.php" style="color:brown">Regístrate</a>
            </div>
        </div>
    </div>

  </div>
</body>
</html>