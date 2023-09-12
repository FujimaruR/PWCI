function validarCorreo() {
    var correo = document.getElementById("correoLogin").value;
    var patronCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!patronCorreo.test(correo)) {
        alert("El correo electrónico no es válido");
        correo.value = '';
        correo.focus();
        return false;
    }
    return true;
}

function validarUsuario() {
    var usuarioInput = document.getElementById('usuario');
    var usuarioValue = usuarioInput.value;

    if (usuarioValue.length < 3) {
        alert('El usuario debe tener al menos 3 caracteres.');
        usuarioInput.value = '';
        usuarioInput.focus();
        return false;

    }
    return true;
}

function validarPassword() {
    var passwordInput = document.getElementById('PasswordLogin');
    var passwordValue = passwordInput.value;

    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?/¿&.:;,=-_+*#¡{}"'])[A-Za-z\d@$!%*?/¿&.:;,=-_+*#¡{}"']{8,}$/;

    if (!passwordPattern.test(passwordValue)) {
        alert('La contraseña debe tener al menos 8 caracteres, una mayúscula, una minúscula, un número y un carácter especial.');
        passwordInput.value = '';
        passwordInput.focus();
        return false;

    }
    return true;
}

function validarNombre() {
    var nombreInput = document.getElementById('usuarioNombre');
    var nombreValue = nombreInput.value;

    var nombrePattern = /^[A-Za-z\s]+$/;

    if (!nombrePattern.test(nombreValue)) {
        alert('El nombre no debe contener números ni caracteres especiales.');
        nombreInput.value = '';
        nombreInput.focus();
    }
    return true;
}

function validarFormulario() {
    var correoValido = validarCorreo();
    var usuarioValido = validarUsuario();
    var passwordValido = validarPassword();
    var nombreValido = validarNombre();

    return correoValido && usuarioValido && passwordValido && nombreValido;
}


function validarFecha() {
    var fechaInput = document.getElementById("R_FECHA");
    var fechaIngresada = new Date(fechaInput.value);
    var fechaHoy = new Date();

    if (fechaIngresada >= fechaHoy) {
        alert("La fecha de nacimiento debe ser anterior a la fecha actual.");
        fechaInput.value = "";
        return false;

    }
    return true;

}

document.addEventListener("DOMContentLoaded", function () {
    const registroForm = document.getElementById("registroForm");

    registroForm.addEventListener("submit", function (event) {
        if (!validarFormulario()) {
            event.preventDefault();
            alert("Por favor, corrige los errores en el formulario antes de enviarlo.");
        }
    });
});
