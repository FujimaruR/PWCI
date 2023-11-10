<?php
session_start();
include("../BackEnd/editProd.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/prueba/PWCI/Front/css/n_producto.css">
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
                            <h4>Producto nuevo</h4>
                            <p class="mb-2 mb-md-0 py-2">Ingresa las imágenes y el video del producto</p>

                            <div id="mediaCarousel" class="carousel slide py-2">
                                <div class="carousel-inner text-center" id="mediaCarouselInner">
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#mediaCarousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#mediaCarousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
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
                                <input type="text" class="form-control" id="productinput" name="productinput" placeholder="...">
                                <label for="productinput">Nombre del producto</label>
                            </div>
                            <div class="form-floating my-2">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" name="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Descripcion del producto</label>
                            </div>
                            <div class="form-floating my-2">
                                <input type="number" class="form-control" id="floatingInput" name="floatingInput" placeholder="...">
                                <label for="floatingInput">Cantidad del producto</label>
                            </div>
                            <p>Categorias: </p>
                            <div class="input-group form-floating my-2">
                                <select class="form-select" id="floatingSelect" name="floatingSelect"
                                    aria-label="Floating label select example">
                                    <?php
                                    if ($catestmt->rowCount() > 0) {
                                        while($row = $catestmt->fetch(PDO::FETCH_ASSOC)) {
                                            echo '<option value="' . $row['id_categ'] . '">' . $row['nombre'] . '</option>';
                                        }
                                    } else {
                                        echo '<option value="' . 1 . '"> hola </option>';
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
                                    id="floatingTextaread" name="floatingTextaread"></textarea>
                                <label for="floatingTextaread">Categorias del producto</label>
                            </div>
                            <input type="hidden" id="categoriasInput" name="categoriasInput" value="">
                            <div class="form-check form-switch d-flex">
                                <label class="form-check-label px-5" for="flexSwitchCheckDefault">Vender</label>
                                <input class="form-check-input px-3" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault" name="flexSwitchCheckDefault" value="cotizar">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Cotizar</label>
                            </div>
                            <div class="form-floating my-2">
                                <input type="number" class="form-control" id="priceinput" name="priceinput" placeholder="...">
                                <label for="priceinput">Precio del producto</label>
                            </div>
                            <button type="submit" class="btn btn-danger">Confirmar</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </form>

    <script src="http://localhost/prueba/PWCI/Front/js/n_producto.js"></script>

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


    </script>

    <?php
        include_once('../assets/General/footer.php');
    ?>
</body>

</html>