<?php
session_start();
include("../BackEnd/modificarProducto.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/editar_producto.css">
    <script src="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet"
        href="http://localhost/prueba/PWCI/Dependencias/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Micherry</title>
    <link rel="shortcut icon" href="http://localhost/prueba/PWCI/img/logo/Micherry.png">
</head>

<body>
    <?php
        $_GET['logged'] = '4';
        include_once('../assets/General/navbarSettings.php');
    ?>
    <form action="" method="post" id="formProducto" enctype="multipart/form-data">
        <div class="container mt-2 my-5">
            <div class="row">
                <div class="col-md-6 col-lg-6 imgven mx-auto">
                    <div class="card " style="background-color:#f5d3dfe4; border-radius: 30px;">
                        <div class="card-body ">
                            <h4><?php echo $productoBuscado['nombre']; ?></h4>
                            <p class="mb-2 mb-md-0 py-2">Modificar las imágenes y el video del producto</p>

                            <div id="mediaCarousel" class="carousel slide py-2">
                                <ol class="carousel-indicators">
                                    <?php
                                // Crear los indicadores del carrusel
                                $numCategorias = count($ImagenesFila);
                                for ($i = 0; $i < $numCategorias; $i++) {
                                    echo '<li data-bs-target="#mediaCarousel" data-bs-slide-to="' . $i . '"';
                                    if ($i === 0) {
                                        echo ' class="active"';
                                    }
                                    echo '></li>';
                                }
                                ?>
                                </ol>
                                <!-- Contenido del carrusel -->
                                <div class="carousel-inner">
                                    <?php
                                $contador = 0;
                                foreach ($ImagenesFila as $index => $fila) {
                                    echo '<div class="carousel-item';
                                    if ($index === 0) {
                                        echo ' active';
                                    }
                                    echo '">';

                                    if ($contador < 3) {
                                    echo '<img src="data:image/jpeg;base64,' . base64_encode($fila['img']) . '" style="max-width: 100%; height: 500px;" class="card-img-top object-fit-cover" alt="Categoría: ' . $fila['id_img'] . '">';
                                    
                                    } else {
                                    $contador = 0;
                                    echo '<video controls style="max-width: 100%; height: 500px;">
                                        <source src="data:image/jpeg;base64,' . base64_encode($fila['img']) . '" type="video/mp4">
                                        Tu navegador no admite el elemento de video.
                                    </video>';
                                    }
                                    $contador++;
                                    echo '</div>';
                                }
                                ?>
                                </div>
                                <a class="carousel-control-prev" href="#mediaCarousel" role="button" data-bs-slide="prev"
                                    style="margin:0 -50px">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#mediaCarousel" role="button" data-bs-slide="next"
                                    style="margin:0 -50px">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Siguiente</span>
                                </a>
                            </div>

                            <video id="video-preview" controls style="display: none;"></video>
                            <input class="form-control" type="file" id="img-uploader-nprod" name="imguploaderNprod[]" accept="image/*, video/*"
                                multiple>
                        </div>
                        <?php
                        if (isset($_GET['error'])) {
                            echo "Error: " . urldecode($_GET['error']);
                        }
                        ?>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 datven ">
                    <div class="card" style="background-color:#f5d3dfe4;  border-radius: 30px;">
                        <div class="card-body">
                            <h5 class="text-center">Datos del producto</h5>
                            <div class="form-floating my-2">
                                <input type="text" class="form-control" id="productinput" name="productinput" value="<?= $productoBuscado['nombre']; ?>">
                                <label for="productinput">Nombre del producto</label>
                            </div>
                            <div class="form-floating my-2">
                                <textarea class="form-control"
                                    id="floatingTextarea" name="floatingTextarea" value="<?= $productoBuscado['descripcion']; ?>"><?= $productoBuscado['descripcion']; ?></textarea>
                                <label for="floatingTextarea">Descripcion del producto</label>
                            </div>
                            <div class="form-floating my-2">
                                <input type="number" class="form-control" id="floatingInput" name="floatingInput" value="<?= $productoBuscado['cant_disp']; ?>">
                                <label for="floatingInput">Cantidad del producto</label>
                            </div>
                            <p>Categorias: </p>
                            <div class="input-group form-floating my-2">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
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
                                <button class="btn btn-danger" type="button" id="buttonAgregarCategoria">Confirmar</button>
                                <label for="floatingSelect">Categoria del producto</label>
                            </div>
                            <div class="input-group my-2">
                                <input type="text" class="form-control" placeholder="Nueva categoria"
                                    aria-label="Nueva categoria" aria-describedby="button-addon2">
                                <button class="btn btn-danger" type="button" id="button-addon2">Confirmar</button>
                            </div>
                            <div class="form-floating my-2">
                                <textarea disabled class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextaread"></textarea>
                                <label for="floatingTextaread">Categorias del producto</label>
                                <button class="btn btn-secondary my-2" type="button" id="btnBorrarCate">Borrar categorias</button>
                                <hr>
                            </div>
                            <input type="hidden" id="categoriasInput" name="categoriasInput" value="">
                            <div class="form-check form-switch d-flex">
                                <label class="form-check-label px-5" for="flexSwitchCheckDefault">Vender</label>
                                <input class="form-check-input px-3" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault" name="flexSwitchCheckDefault" value="cotizar">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Cotizar</label>
                            </div>
                            <div class="input-group form-floating my-2">
                                <div class="input-group-text">
                                    <input class="form-check-input mt-0" type="checkbox" id="checkCot" name="checkCot" value="CotizarUsuario" aria-label="Checkbox for following text input" disabled>
                                </div>
                                <select class="form-select" id="userSelect" name="userSelect" aria-label="Floating label select example" disabled>
                                <?php
                                    if ($stmt->rowCount() > 0) {
                                        while($rowUser = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            echo '<option value="' . $rowUser['id'] . '">' . $rowUser['email'] . '</option>';
                                        }
                                    } else {
                                        echo '<option value="' . 1 . '"> Error </option>';
                                    }
                                    ?>
                                </select>
                                <label for="userSelect" class="text-center">Usuario al que cotizar</label>
                            </div>
                            <div class="form-floating my-2">
                                <input type="number" class="form-control" id="priceinput" name="priceinput" placeholder="..." value="<?= $productoBuscado['precio']; ?>">
                                <label for="priceinput">Precio del producto</label>
                            </div>
                            <a role="button" class="btn btn-secondary" href="../Front/vendedor.php">Cancelar</a>
                            <button type="submit" class="btn btn-danger" id="btnConfirmEdicion" name="btnConfirmEdicion">Confirmar</button>
                            <button type="submit" class="btn"
                                style="background-color:#7D2C6F; margin-top: 1%; color: white;" id="btnEliminarProd" name="btnEliminarProd">Eliminar
                                producto</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </form>

    <script>
        var categoriasAgregadas = [];

        document.getElementById("buttonAgregarCategoria").addEventListener("click", function() {
        var select = document.getElementById("floatingSelect");
        var categoriaSeleccionada = select.options[select.selectedIndex].text;
        var textarea = document.getElementById("floatingTextaread");
        if (!categoriasAgregadas.includes(categoriaSeleccionada)) {
            textarea.value += categoriaSeleccionada + "\n";
            categoriasAgregadas.push(categoriaSeleccionada);
        } else {
            alert("¡Esta categoría ya ha sido agregada!");
        }
        });

        document.getElementById("button-addon2").addEventListener("click", function() {
        var nuevaCategoria = document.getElementById("button-addon2").previousElementSibling.value;
        var textarea = document.getElementById("floatingTextaread");
        if (!categoriasAgregadas.includes(nuevaCategoria)) {
            textarea.value += nuevaCategoria + "\n";
            categoriasAgregadas.push(nuevaCategoria);
            // También puedes limpiar el input después de agregarlo al textarea si lo deseas:
            document.getElementById("button-addon2").previousElementSibling.value = "";
        } else {
            alert("¡Esta categoría ya ha sido agregada!");
        }
        });

        document.getElementById("formProducto").addEventListener("submit", function(event) {

        var categoriasJSON = JSON.stringify(categoriasAgregadas);

        document.getElementById("categoriasInput").value = categoriasJSON;
        });

        var elimCategoriaBtn = document.getElementById('btnBorrarCate');
        elimCategoriaBtn.addEventListener('click', function () {
            document.getElementById('floatingTextaread').value = null;
            categoriasAgregadas = [];
            document.getElementById("categoriasInput").value = null;
        });


    </script>

    <script src="http://localhost/prueba/PWCI/Front/js/editar_producto.js"></script>
    <script>
    const checkbox = document.getElementById('flexSwitchCheckDefault');
    const priceInput = document.getElementById('priceinput');
    const confirmUserCheck = document.getElementById('checkCot');
    const userInput = document.getElementById('userSelect');

    checkbox.addEventListener('change', function () {
    if (this.checked) {
        priceInput.disabled = true; // Desactivar el input
        confirmUserCheck.disabled = false;
    } else {
        priceInput.disabled = false; // Habilitar el input
        confirmUserCheck.disabled = true;
        userInput.disabled = true;
    }
    });

    confirmUserCheck.addEventListener('change', function (){
        if (this.checked){
            userInput.disabled = false;
            priceInput.disabled = false;
        } else {
            userInput.disabled = true;
            priceInput.disabled = true;
        }
    });

    </script>

    <?php
        include_once('../assets/General/footer.php');
    ?>
</body>

</html>