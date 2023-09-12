function validarCorreo() {
    var correo = document.getElementById("correoLogin").value;
    var patronCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!patronCorreo.test(correo)) {
        alert("El correo electrónico no es válido");
        correo.value = '';
        correo.focus();
    }
}

function validarUsuario() {
    var usuarioInput = document.getElementById('usuario');
    var usuarioValue = usuarioInput.value;

    if (usuarioValue.length < 3) {
        alert('El usuario debe tener al menos 3 caracteres.');
        usuarioInput.value = '';
        usuarioInput.focus();
    }
}

function validarPassword() {
    var passwordInput = document.getElementById('PasswordLogin');
    var passwordValue = passwordInput.value;

    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (!passwordPattern.test(passwordValue)) {
        alert('La contraseña debe tener al menos 8 caracteres, una mayúscula, una minúscula, un número y un carácter especial.');
        passwordInput.value = '';
        passwordInput.focus();
    }
}

function validarNombre() {
    var nombreInput = document.getElementById('usuarioNombre');
    var nombreValue = nombreInput.value;

    var nombrePattern = /^[A-Za-z]+$/;

    if (!nombrePattern.test(nombreValue)) {
        alert('El nombre no debe contener números ni caracteres especiales.');
        nombreInput.value = '';
        nombreInput.focus();
    }
}

function validarFormulario() {
    validarCorreo();
    validarUsuario();
    validarPassword();
    validarNombre();

    return !document.querySelectorAll('.alert').length;
}


function validarFecha() {
    var fechaInput = document.getElementById("R_FECHA");
    var fechaIngresada = new Date(fechaInput.value);
    var fechaHoy = new Date();

    if (fechaIngresada >= fechaHoy) {
        alert("La fecha de nacimiento debe ser anterior a la fecha actual.");
        fechaInput.value = "";
    }
}