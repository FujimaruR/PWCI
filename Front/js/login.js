document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", function (event) {
        event.preventDefault(); 

        // Redirigir al usuario a la página deseada
        window.location.href = "paginaPrincipal.php";
    });
});
