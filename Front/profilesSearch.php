<?php
session_start();
include("../BackEnd/showUserSearch.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/perfil_usuario.css">
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <style>
    body {
        background-image: url(http://localhost/prueba/PWCI/img/principal/fondoPrincipal.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }
    </style>
</head>

<body>
    <?php
        $_GET['logged'] = '1';
        include_once('../assets/General/navbarSettings.php');
    ?>

    <div class="container-fluid mt-5 p-3">
        <div class="row">
            <div class="col-lg-9 col-md-10 col-sm-12 mx-auto">
                <h5>Perfil de usuario</h5>
                <div class="card" style="background-color:#f5d3dfe4; border-radius: 30px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <img src="<?php echo $imagen_urlSearch; ?>" class="img-fluid rounded-start"
                                        alt="..." style="height: 100%; width: 80%;border-radius: 80px 80px 50px 50px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h5>Información del usuario</h5>
                                <?php
                                if($usuarioNormalInfoSearch['privado'] === 0){
                                    echo'
                                    <p class="card-text">Nombre de usuario: '.$usuarioSearch['nombre'].'</p>
                                    <p class="card-text">Correo: '.$usuarioSearch['email'].'</p>
                                    <p class="card-text">Nombre completo: '.$usuarioNormalSearch['complete_name'].'</p>';
                                } else{
                                    echo'
                                    <p class="card-text">Este perfil es privado</p>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            if (isset($_GET['error'])) {
                echo "Error: " . urldecode($_GET['error']);
            }
        ?>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 mx-auto p-5">
                <h5 class=" my-4">Listas de <?php echo $usuarioSearch['nombre']; ?></h5>
                <?php
                if($usuarioNormalInfoSearch['privado'] === 0){
                    
                if ($TablaOver !== null) {
                    foreach ($TablaOver as $TablaListas) {
                        echo '<div class="card" style="border-radius: 10px 10px 10px 10px;background-color:#e1f5fae4;">
                            <div class="card-body">
                                <div class="text-center">
        
                                </div>
                                <div class="MlisUno">
                                    <ul class="ml-2">
                                        <li>
                                            <h5 class="m-1"><strong>'.$TablaListas['nombre'].'</strong></h5>
                                        </li>
                                    </ul>
                                    <ul class="ml-2">
                                        <li>
                                            <p class="m-1">'.$TablaListas['descripcion'].'</p>
                                        </li>
                                    </ul>
                                    <ul class="ml-2">
                                        <li>
                                            <h5 class="m-1">Ver articulos</h5>
                                        </li>
                                    </ul>
                                    <a class="hovlist" data-bs-toggle="modal" data-bs-target="#verlistaprod" href="../Front/perfil_usuario.php?idListaProdVer='.$TablaListas['id_Lista'].'">
                                        <ul class="ml-2 pointprod">';
        
                                            $mime_typeL = 'image/png';
            
                                            $imagen_urlL = 'data:' . $mime_typeL . ';base64,' . base64_encode($TablaListas['img']);
        
        
                                            echo '<li>
                                                <img src="' . $imagen_urlL . '"
                                                    class="img-fluid" alt="...">
                                            </li>
                                            <li>
                                                <h3><strong>Presiona para ver los articulos</strong></h2>
                                            </li>
        
                                        </ul>
                                    </a>
        
                                </div>
                            </div>
                        </div>';
                    } 
                } else {
                    echo '<p>No listas disponibles</p>';
                }
                } else {
                    echo '<p>Perfil privado</p>';
                }
                ?>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="verlistaprod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabelped">Productos en la lista</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container ">
                        <?php
                        if ($listaProductosV !== null){
                            foreach ($listaProductosV as $ProductosListados){
                                echo '<a class="link-offset-2 link-underline link-underline-opacity-0 refervista" href="vistaProducto.php?idProductoEn='.$ProductosListados['id_Producto'].'" title="Ver detalles del producto">
                            <div class="card mb-3" style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
                                <div class="row g-0">
                                    <div class="col-md-4">';
                                            $mime_typeProd = 'image/png';
            
                                            $imagen_urlProd = 'data:' . $mime_typeProd . ';base64,' . base64_encode($ProductosListados['img_blob']);
                                        echo '<img src="'.$imagen_urlProd.'" class="img-fluid rounded-start" alt="..." style="height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="badge btnColorCard" style="border-radius: 10px 30px;">
                                                <h6>'.$ProductosListados['producto_nombre'].'</h6>
                                            </div>
                                            <p class="card-text" style="padding-top: 1%;">'.$ProductosListados['producto_descripcion'].'</p>
                                            <p class="card-text"><small class="text-body-secondary"><strong>MXN$ '.$ProductosListados['producto_precio'].'</strong></small></p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>';
                            }
                        } else {
                            echo 'No articulos disponibles';
                        }
                        ?>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="UsuarioVendedorPer" tabindex="-1" aria-labelledby="UsuarioVendedorPerLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="UsuarioVendedorPerLabel">Perfil vendedor</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Quieres ir al perfil de vendedor?
                </div>
                <div class="modal-footer">
                    <a href="vendedor.php" role="button" class="btn btn-danger">Confirmar</a>
                </div>
            </div>
        </div>
    </div>

    <script>

    function storeProductIdEdit(idProducto) {
        var modal = document.getElementById('idListaEditar');
        modal.value = idProducto;
    }

    function storeProductIdBorrar(idProducto) {
        var modald = document.getElementById('idListaBorrar');
        modald.value = idProducto;
    }

    document.addEventListener('DOMContentLoaded', function() {
        var idListaProdVer = <?php echo isset($_GET['idListaProdVer']) ? $_GET['idListaProdVer'] : 'null'; ?>;

        if (idListaProdVer !== null) {
            var modal = new bootstrap.Modal(document.getElementById('verlistaprod'));
            modal.show();
        }
    });
    </script>

    <script src="http://localhost/prueba/PWCI/Front/js/perfil_usuario.js"></script>

    <?php
        include_once('../assets/General/footer.php');
    ?>
</body>

</html>