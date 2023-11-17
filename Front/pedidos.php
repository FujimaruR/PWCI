<?php
session_start();
include("../BackEnd/showPedidos.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/pedidos.css">
    <script src="http://localhost/prueba/PWCI/Front/js/pedidos.js"></script>
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
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

    <div class="container p-5">
        <div class="row ">
            <div class="col-lg-12">
                <div class="card" style="background-color:#f5d3dfe4; border-radius: 30px;">
                    <div class="card-body">
                        <h5>Filtrar por...</h5>
                        <form action="" id="formPedidos" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Fechas</h6>
                                <div class="d-flex">
                                    <p class="me-2">Desde: </p>
                                    <input type="date" name="dateIni" id="dateIni" class="form-control mb-2 mb-md-0"
                                        onchange="validarFechaI()" required/>
                                    <p class="me-2">Hasta: </p>
                                    <input type="date" name="dateFin" id="dateFin" class="form-control"
                                        onchange="validarFechaF()" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Categorias</h6>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect05"
                                        aria-label="Example select with button addon">
                                        <?php
                                            if ($catestmtFiltrosPedidos->rowCount() > 0) {
                                                while($row = $catestmtFiltrosPedidos->fetch(PDO::FETCH_ASSOC)) {
                                                    echo '<option value="' . $row['id_categ'] . '">' . $row['nombre'] . '</option>';
                                                }
                                            } else {
                                                echo '<option value="' . 1 . '"> Error </option>';
                                            }
                                        ?>
                                    </select>
                                    <button class="btn btn-outline-danger" type="button" id="addCategoriaPedido">Confirmar</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating my-2 col-lg-4 col-md-8 col-sm-12">
                            <textarea disabled class="form-control" placeholder="Leave a comment here"
                                id="floatingTextareapedido" name="floatingTextareapedido"></textarea>
                            <label for="floatingTextareapedido">Categorias del producto</label>
                        </div>
                        <div>
                            <ul class="ml-2">
                                <li>
                                    <button class="btn btn-outline-danger" type="button" id="elimCategSP" name="elimCategSP">Eliminar</button>
                                </li>
                                <li>
                                    <input type="hidden" name="categoriaSParray" id="categoriaSParray">
                                    <button class="btn btn-outline-danger" type="submit" id="confirmSP" name="confirmSP">Confirmar</button>
                                </li>
                            </ul>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <h4>Consulta de pedidos realizados</h4>
    </div>

    <div class="container ">
        <h5>Pedidos</h5>
        <?php 
        if ($pedidoShow !== null){
            foreach ($pedidoShow as $pedido) {
        
                $mime_typeSP = 'image/png';
                
                $imagen_urlSP = 'data:' . $mime_typeSP . ';base64,' . base64_encode($pedido['img']);

                $idProductoEn = $pedido['id_producto'];

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
                echo '
                <a class="link-offset-2 link-underline link-underline-opacity-0 refervista" href="../Front/vistaProducto.php?idProductoEn=' . $pedido['id_producto'] . '"
                    title="Ver detalles del producto">
                    <div class="card mb-3" style="max-width: 60%; background-color:#ecd3f0e4; border-radius: 30px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="'.$imagen_urlSP.'" class="img-fluid rounded-start"
                                    alt="..." style="height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="badge btnColorCard" style="border-radius: 10px 30px;">
                                        <h6>'.$pedido['nombre_producto'].'</h6>
                                    </div>
                                    <p class="card-text" style="padding-top: 1%;">'.$pedido['descripcion_producto'].'</p>
                                    <p class="card-text"><small
                                            class="text-body-secondary"><strong>MXN$'.$pedido['precio_producto'].'</strong></small></p>
                                    <hr>
                                    <p>Fecha y hora de la compra: '.$pedido['fechaCompra'].'</p>
                                    <p>Categorias: '.$categoriasString.'</p>
                                    <p>Cantidad: '.$pedido['cantidadComprada'].'</p>
                                    <p>Calificacion: '.$pedido['calificacion'].' Estrellas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>';
            }
        } else{
            echo '<p>No pedidos</p>';
        }
        ?>
    </div>
    <script>
    var categoriasAgregadasPedido = [];
    document.getElementById("addCategoriaPedido").addEventListener("click", function() {
    var selectsp = document.getElementById("inputGroupSelect05");
    var categoriaSeleccionadasp = selectsp.options[selectsp.selectedIndex].text;
    var textareasp = document.getElementById("floatingTextareapedido");
    if (!categoriasAgregadasPedido.includes(categoriaSeleccionadasp)) {
        textareasp.value += categoriaSeleccionadasp + "\n";
        categoriasAgregadasPedido.push(categoriaSeleccionadasp);
    } else {
        alert("¡Esta categoría ya ha sido agregada!");
    }
    });

    document.addEventListener('DOMContentLoaded', function () {

            
        var confirmFormBtnsp = document.getElementById('confirmSP');
        var elimCategoriaBtnsp = document.getElementById('elimCategSP');

        confirmFormBtnsp.addEventListener('click', function () {
            
            console.log("Click en Confirmar");
            var categoriasJSONsp = categoriasAgregadasPedido.length > 0 ? JSON.stringify(categoriasAgregadasPedido) : null;
            
            console.log("Valor del textarea antes de actualizar:", document.getElementById("floatingTextareapedido").value);
            document.getElementById("categoriaSParray").value = categoriasJSONsp;
            console.log("Valor del textarea después de actualizar:", document.getElementById("categoriaSParray").value);
            
        });

        elimCategoriaBtnsp.addEventListener('click', function () {
            
            console.log("Click en cancelar");
            document.getElementById('floatingTextareapedido').value = null;
            categoriasAgregadasPedido = [];
        });
    });
    </script>

    <?php
        include_once('../assets/General/footer.php');
    ?>
</body>

</html>