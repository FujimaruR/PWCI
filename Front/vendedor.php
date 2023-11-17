<?php
session_start();
include("../BackEnd/showSeller.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/vendedor.css">
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
    <script src="js/vendedor.js"></script>
    <style>
    a {
        text-decoration: none;
        color: black;
    }
    </style>
</head>

<body>
    <?php
        $_GET['logged'] = '2';
        include_once('../assets/General/navbarSettings.php');
    ?>

    <div class="container-fluid mt-5 p-5">
        <div class="row">
            <div class="col-lg-9 col-md-10 col-sm-12 mx-auto">
                <h5>Perfil vendedor</h5>
                <div class="card" style="background-color:#f5d3dfe4; border-radius: 30px;">
                    <div class="card-body">
                        <form action="" id="formCV" method="post">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-8 m-4">
                                    <div class="col-lg-8 col-md-8 col-sm-8 ">
                                        <img src="<?php echo $imagen_url; ?>" class="img-fluid rounded-start" alt="..."
                                            style="height: 100%; width: 80%;">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $usuario['nombre']; ?></h5>
                                            <p class="card-text">Correo: <?php echo $usuario['email']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mx-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Consulta de ventas</h5>
                                        <p class="card-text">Ingrese el rango de fechas: </p>
                                        <p class="me-2">Desde: </p>
                                        <input type="date" name="dateIni" id="dateIni" class="form-control mb-2 mb-md-0"
                                            onchange="validarFechaI()" required />
                                        <p class="me-2">Hasta: </p>
                                        <input type="date" name="dateFin" id="dateFin" class="form-control mb-2 mb-md-0"
                                            onchange="validarFechaF()" required />
                                    </div>
                                </div>
                                <div class="col-lg-3 mx-auto">
                                    <label for="combobox" class="me-2">Selecciona una categoria:</label>
                                    <div class="input-group form-floating my-2">
                                        <select id="comboboxCV" name="comboboxCV" class="form-control">
                                            <?php
                                        if ($catestmt->rowCount() > 0) {
                                            while($row = $catestmt->fetch(PDO::FETCH_ASSOC)) {
                                                echo '<option value="' . $row['id_categ'] . '">' . $row['nombre'] . '</option>';
                                            }
                                        } else {
                                            echo '<option value="' . 1 . '"> Error </option>';
                                        }
                                        ?>
                                        </select>
                                        <button class="btn btn-danger" type="button"
                                            id="buttonAgregarCategoriaVendedor">Confirmar</button>
                                    </div>
                                    <p>Categorias: </p>
                                    <textarea disabled class="form-control" id="textCategVen"
                                        name="textCategVen"></textarea>


                                    <div>
                                        <ul class="ml-2">
                                            <li>
                                                <button class="btn btn-outline-danger my-2" type="button"
                                                    id="elimCategcv" name="elimCategcv">Eliminar</button>
                                            </li>
                                            <li>
                                                <input type="hidden" name="categoriaCVarray" id="categoriaCVarray">

                                                <button type="submit" name="confirmcvbtn" id="confirmcvbtn"
                                                    class="btn btn-danger my-2">Confirmar</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class=" modal fade" id="consulvent" tabindex="-1" aria-labelledby="consulventLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Consulta de ventas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 consuagrupa">
                            <h1>Detallada</h1>
                            <?php
                            if ($consultaVenta !== null){
                                foreach ($consultaVenta as $consulta){
                                    $idProductoEn = $consulta['id_producto'];

                                    $consultaImagenes = "SELECT img, id_categoriac, nombre_categoria FROM vista_productos_completo WHERE id_Producto = :idprod";
                                    $stmtImagenes = $conn->prepare($consultaImagenes);
                                    $stmtImagenes->bindParam(':idprod', $idProductoEn);
                                    $stmtImagenes->execute();
                                    $filasImagenes = $stmtImagenes->fetchAll(PDO::FETCH_ASSOC);

                                    $imagenesPorCategoria = [];
                                    $categoriasString = '';
                                    foreach ($filasImagenes as $fila) {
                                        $categoria = $fila['id_categoriac'];
                                        $nombreCategoria = $fila['nombre_categoria'];
                                        $imagen = $fila['img'];
                                        if (!isset($imagenesPorCategoria[$categoria])) {
                                            $imagenesPorCategoria[$categoria] = $imagen;
                                            $categoriasString .= $nombreCategoria . ', ';
                                        }
                                    }
                                    $categoriasString = rtrim($categoriasString, ', '); 

                                    echo'<div class="consualtagrupada">
                                    <p class="izquierda">Fecha y hora de la venta:</p>
                                    <p class="derecha">'.$consulta['fechaCompra'].'</p>
                                    <p class="izquierda">Categoria:</p>
                                    <p class="derecha">'.$categoriasString.'</p>
                                    <p class="izquierda">Producto:</p>
                                    <p class="derecha">'.$consulta['nombre_producto'].'</p>
                                    <p class="izquierda">Calificacion:</p>
                                    <p class="derecha">'.$consulta['calificacion'].' estrellas</p>
                                    <p class="izquierda">Precio:</p>
                                    <p class="derecha">MXN$'.$consulta['precio_producto'].'</p>
                                    <p class="izquierda">Existencia actual:</p>
                                    <p class="derecha">'.$consulta['cant_disp_producto'].'</p>
                                    <p>Producto detallado</p>
                                </div>';
                                }
                            } else{
                                echo '<div class="consualtagrupada">
                                <p>No compras en el rango de fechas.</p>
                                </div>';
                            }
                            ?>
                        </div>
                        <div class="col-md-6 consuagrupa">
                            <h1>Agrupada</h1>
                            <?php 
                            if ($consultaVenta !== null){
                                foreach ($consultaVenta as $consultag){
                                    $idProductoEng = $consultag['id_producto'];

                                    $consultaImagenesg = "SELECT img, id_categoriac, nombre_categoria FROM vista_productos_completo WHERE id_Producto = :idprod";
                                    $stmtImagenesg = $conn->prepare($consultaImagenesg);
                                    $stmtImagenesg->bindParam(':idprod', $idProductoEng);
                                    $stmtImagenesg->execute();
                                    $filasImagenesg = $stmtImagenesg->fetchAll(PDO::FETCH_ASSOC);

                                    $imagenesPorCategoriag = [];
                                    $categoriasStringr = '';
                                    foreach ($filasImagenesg as $filag) {
                                        $categoriag = $filag['id_categoriac'];
                                        $nombreCategoriag = $filag['nombre_categoria'];
                                        $imageng = $filag['img'];
                                        if (!isset($imagenesPorCategoriag[$categoriag])) {
                                            $imagenesPorCategoriag[$categoriag] = $imageng;
                                            $categoriasStringr .= $nombreCategoriag . ', ';
                                        }
                                    }
                                    $categoriasStringr = rtrim($categoriasStringr, ', '); 

                                    echo '<div class="consualtagrupada">
                                    <p class="izquierda">Mes y año de la venta:</p>
                                    <p class="derecha">'.date('m/Y', strtotime($consultag['fechaCompra'])).'</p>
                                    <p class="izquierda">Categoria:</p>
                                    <p class="derecha">'.$categoriasString.'</p>
                                    <p class="izquierda">Ventas:</p>
                                    <p class="derecha">'.$consultag['cantidadComprada'].' piezas</p>
                                    <p>Producto agrupado</p>
                                </div>';
                                }
                            } else{
                                echo '<div class="consualtagrupada">
                                <p>No compras en el rango de fechas.</p>
                                </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="menupri">
        <h4>Productos Publicados</h4>
    </div>

    <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                if ($productosAceptados !== null){
                    $contadorA = 0;
                    foreach ($productosAceptados as $productoas){
                        if ($contadorA % 4 == 0) {
                            echo '<div class="carousel-item' . ($contadorA === 0 ? ' active' : '') . '"><div class="row">';
                        }
                        $imagen_base64a = base64_encode($productoas['primera_imagen']);
                        $imagen_urla = 'data:image/png;base64,' . $imagen_base64a;

                        echo '<div class="col-md-3">
                            <a href="../Front/editar_producto.php?idProductoEn=' . $productoas['id_Producto'] . '">
                                <div class="card productocard" style="width: 18rem;">
                                    <img src="' . $imagen_urla . '" class="card-img-top" alt="' . $productoas['nombre'] . '"
                                        style="object-fit: cover; height: 200px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>MXN$' . $productoas['precio'] . '</strong></h5>
                                        <p class="card-text">' . $productoas['nombre'] . '</p>
                                    </div>
                                </div>
                            </a>
                        </div>';

                        $contadorA++;
                        if ($contadorA % 4 == 0) {
                            echo '</div></div>';
                        }
                    }

                    if ($contadorA % 4 != 0) {
                        echo '</div></div>';
                    }
                } else {
                    echo '<div class="col-md-3">
                                <div class="card productocard" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>No producto encontrado</strong></h5>
                                    </div>
                                </div>
                        </div>';
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#productCarousel" role="button" data-bs-slide="prev"
                style="margin-left: -15%;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#productCarousel" role="button" data-bs-slide="next"
                style="margin-right: -15%;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </a>
        </div>
    </div>

    <?php
        include_once('../assets/General/footer.php');
    ?>


    <script>
    var categoriasAgregadasCV = [];
    document.getElementById("buttonAgregarCategoriaVendedor").addEventListener("click",
        function() {
            var selectCV = document.getElementById("comboboxCV");
            var categoriaSeleccionadaCV = selectCV.options[selectCV.selectedIndex]
                .text;
            var textareacv = document.getElementById("textCategVen");
            if (!categoriasAgregadasCV.includes(categoriaSeleccionadaCV)) {
                textareacv.value += categoriaSeleccionadaCV + "\n";
                categoriasAgregadasCV.push(categoriaSeleccionadaCV);
            } else {
                alert("¡Esta categoría ya ha sido agregada!");
            }
        });

    document.addEventListener('DOMContentLoaded', function() {


        var confirmFormBtncv = document.getElementById('confirmcvbtn');
        var elimCategoriaBtncv = document.getElementById('elimCategcv');

        confirmFormBtncv.addEventListener('click', function() {

            var categoriasJSONcv = categoriasAgregadasCV.length > 0 ?
                JSON.stringify(categoriasAgregadasCV) : null;

            document.getElementById("categoriaCVarray").value =
                categoriasJSONcv;

        });

        elimCategoriaBtncv.addEventListener('click', function() {

            document.getElementById('textCategVen').value = null;
            categoriasAgregadasCV = [];
        });
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</body>

</html>