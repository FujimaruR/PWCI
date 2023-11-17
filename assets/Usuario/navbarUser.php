<nav class="bg-custom-color navbar navbar-expand-lg sticky-top">
    <div class="container-fluid ">
        <img src="http://localhost/prueba/PWCI/img/logo/Micherry.png" alt="" height="40">
        <a class="nav-link active mx-2" aria-current="page"
            href="http://localhost/prueba/PWCI/Front/paginaPrincipal.php">
            <h5 class="letraFuente text-white">Micherry</h5>
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex justify-content-center" role="search" action="../assets/Usuario/navbarPost.php" id="formNavbar" method="post">
                <input class="form-control me-2 " type="search" placeholder="Buscar producto" name="bproductonav" aria-label="Search" required>
                <input type="hidden" name="precioMeNavbar" id="precioMeNavbar">
                <input type="hidden" name="precioMaNavbar" id="precioMaNavbar">
                <input type="hidden" name="calificadoNavbar" id="calificadoNavbar">
                <input type="hidden" name="vendidosNavbar" id="vendidosNavbar">
                <input type="hidden" name="categoriasNavbar" id="categoriasNavbar">
                <button type="submit" class="btn btnColorCard btnHover" name="buscarNavbar">Buscar</button>
            </form>
            <button class="btn btnColorCard btnHover" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFiltros" aria-expanded="false" aria-controls="collapseExample"
                style="margin-left: 1%;">
                Filtros
            </button>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                <li class="nav-item">
                    <a class="nav-link disabled">
                        <h6>Usuario</h6>
                    </a>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="<?php echo $imagen_url; ?>" alt="" height="35"
                            style="border-radius: 20px 20px">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="http://localhost/prueba/PWCI/Front/perfil_usuario.php">Mi
                                perfil</a></li>
                        <li><a class="dropdown-item" href="http://localhost/prueba/PWCI/Front/carrito.php">Carrito</a>
                        </li>
                        <li><a class="dropdown-item" href="http://localhost/prueba/PWCI/Front/pedidos.php">Mis
                                pedidos</a></li>
                        <li><a class="dropdown-item" href="http://localhost/prueba/PWCI/Front/vendedor.php">Perfil
                                vendedor</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" aria-current="page" data-bs-toggle="modal"
                                data-bs-target="#salirsesionF" style="cursor: pointer;">Salir de la sesion</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/prueba/PWCI/Front/mensajes_usuario.php">
                        <h6>Mensajes</h6>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="modal fade" id="salirsesionF" tabindex="-1" aria-labelledby="salirsesionFLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="salirsesionFLabel">Salir de la sesion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Quieres salir de la sesion?
            </div>
            <div class="modal-footer">
                <a href="http://localhost/prueba/PWCI/Front/login.php" role="button" class="btn btn-danger">Salir</a>
            </div>
        </div>
    </div>
</div>

<div class="collapse" id="collapseFiltros">
    <div class="card card-body">
        <ul class="ml-2">
            <li>
                <div class="configbus">
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="offcanvas"
                        data-bs-target="#categorias" aria-controls="categorias">Categorias</button>
                </div>
            </li>
            <li>
                <div class="precio-input">
                    <span>Precio:</span>
                    <input type="number" id="inputPrecioNavU" name="inputPrecioNavU">
                    - <input type="number" id="inputPrecioNavD" name="inputPrecioNavD">
                </div>
            </li>
            <li>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkCalificados">
                    <label class="form-check-label" for="flexCheckDefault">
                        Mejor calificados
                    </label>
                </div>
            </li>
            <li>
                <select class="form-select tamanven" aria-label="Default select example" id="selectMvendidos">
                    <option value="0" selected>Mas vendidos</option>
                    <option value="1">Menos vendidos</option>
                </select>
            </li>
            <li>
                <button type="button" class="btn btn-outline-danger" name="confirmfiltrosNavbar" id="confirmfiltrosNavbar">Confirmar</button>
            </li>
        </ul>
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="categorias" aria-labelledby="titulocatego">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="titulocatego">Menu de categorias</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="input-group">
            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <?php
                    $categoriasFiltros = "SELECT id_categ, nombre FROM tb_categorias";
                    $catestmtFiltros = $conn->prepare($categoriasFiltros);
                    $catestmtFiltros->execute();
                    if ($catestmtFiltros->rowCount() > 0) {
                        while($row = $catestmtFiltros->fetch(PDO::FETCH_ASSOC)) {
                            echo '<option value="' . $row['id_categ'] . '">' . $row['nombre'] . '</option>';
                        }
                    } else {
                        echo '<option value="' . 1 . '"> Error </option>';
                    }
                ?>
            </select>
            <button class="btn btn-outline-danger" type="button" id="agregarCateNav">Confirmar</button>
        </div>
        <div class="form-floating my-2">
            <textarea disabled class="form-control" placeholder="Leave a comment here"
                id="textCateNav"></textarea>
            <label for="textCateNav">Categorias del producto</label>
        </div>
        <div>
            <ul class="ml-2">
                <li>
                    <button class="btn btn-outline-danger" type="button" name="elimCategNavbar" id="elimCategNavbar">Eliminar</button>
                </li>
                <li>
                    <button class="btn btn-outline-danger" type="button" name="confirmCategNavbar" id="confirmCategNavbar">Confirmar</button>
                </li>
            </ul>

        </div>
    </div>
</div>


<script>
    var categoriasAgregadas = [];
    document.getElementById("agregarCateNav").addEventListener("click", function() {
    var select = document.getElementById("inputGroupSelect04");
    var categoriaSeleccionada = select.options[select.selectedIndex].text;
    var textarea = document.getElementById("textCateNav");
    if (!categoriasAgregadas.includes(categoriaSeleccionada)) {
        textarea.value += categoriaSeleccionada + "\n";
        categoriasAgregadas.push(categoriaSeleccionada);
    } else {
        alert("¡Esta categoría ya ha sido agregada!");
    }
    });



    document.addEventListener('DOMContentLoaded', function () {
        var formulario = document.getElementById('formNavbar');

        var inputPrecioNavU = document.getElementById('inputPrecioNavU');
        var inputPrecioNavD = document.getElementById('inputPrecioNavD');
        var checkCalificados = document.getElementById('checkCalificados');
        var selectMvendidos = document.getElementById('selectMvendidos');

        var confirmFiltrosBtn = document.getElementById('confirmfiltrosNavbar');

        var confirmCategoriaBtn = document.getElementById('confirmCategNavbar');
        var textCategoriasNav = document.getElementById('textCateNav');

        var elimCategoriaBtn = document.getElementById('elimCategNavbar');

        confirmFiltrosBtn.addEventListener('click', function () {
            var input1Value = inputPrecioNavU.value !== '' ? inputPrecioNavU.value : null;
            var input2Value = inputPrecioNavD.value !== '' ? inputPrecioNavD.value : null;
            var checkboxValue = checkCalificados.checked;
            var selectValue = selectMvendidos.value !== '' ? selectMvendidos.value : null;

            document.getElementById('precioMeNavbar').value = input1Value;
            document.getElementById('precioMaNavbar').value = input2Value;
            document.getElementById('calificadoNavbar').value = checkboxValue ? 'calificado' : null;
            document.getElementById('vendidosNavbar').value = selectValue;
        });

        confirmCategoriaBtn.addEventListener('click', function () {
            /*var textAreaNav = textCategoriasNav.value;

            document.getElementById('categoriasNavbar').value = textAreaNav;*/

            var categoriasJSON = categoriasAgregadas.length > 0 ? JSON.stringify(categoriasAgregadas) : null;

            document.getElementById("categoriasNavbar").value = categoriasJSON;
        });

        elimCategoriaBtn.addEventListener('click', function () {
            document.getElementById('textCateNav').value = null;
            categoriasAgregadas = [];
        });
    });


    var input1 = document.getElementById("inputPrecioNavU");
    var input2 = document.getElementById("inputPrecioNavD");

    input1.addEventListener("input", validarNumero);
    input2.addEventListener("input", validarNumero);

    function validarNumero() {
    var valor = parseFloat(this.value);

    if (valor <= 0 || isNaN(valor)) {
        this.value = 1;
    }
    }
</script>