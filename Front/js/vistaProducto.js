const stars = document.querySelectorAll('.star');

stars.forEach(function (star, index) {
    star.addEventListener('click', function () {
        for (let i = 0; i <= index; i++) {
            stars[i].classList.add('checked');
        }
        for (let i = index + 1; i < stars.length; i++) {
            stars[i].classList.remove('checked');
        }
    })
});



const numTarjetaInput = document.getElementById("numTarjetaCredit");
const cvcTarjetaInput = document.getElementById("cvcTarjetaCredit");
const validarBtn = document.getElementById("validarBtnTarjeta");

numTarjetaInput.addEventListener("input", function () {
    this.value = this.value.replace(/[^0-9]/g, "");
});

numTarjetaInput.addEventListener("input", function () {
    if (this.value.length > 19) {
        this.value = this.value.slice(0, 19);
    }
});

cvcTarjetaInput.addEventListener("input", function () {
    this.value = this.value.replace(/[^0-9]/g, "");
});

validarBtn.addEventListener("click", function () {
    const numTarjeta = numTarjetaInput.value;
    const cvcTarjeta = cvcTarjetaInput.value;

    if (numTarjeta.length < 15 || numTarjeta.length > 19) {
        alert("El número de tarjeta debe tener entre 15 y 19 dígitos.");
    } else if (cvcTarjeta.length !== 3) {
        alert("El código CVC debe tener 3 dígitos.");
    } else {
        validarBtn.setAttribute("data-bs-toggle", "modal");
        validarBtn.setAttribute("data-bs-target", "#CalificarProducto");
        validarBtn.click();
    }
});


const validarBtnComen = document.getElementById("btncomentariomod");

validarBtnComen.addEventListener("click", function () {
    validarBtn.removeAttribute("data-bs-toggle");
    validarBtn.removeAttribute("data-bs-target");
});


