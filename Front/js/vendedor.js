function validarFechaI() {
    var fechaInputI = document.getElementById("dateIni");
    var fechaIngresadaI = new Date(fechaInputI.value);
    var fechaHoyI = new Date();

    if (fechaIngresadaI > fechaHoyI) {
        alert("La fecha de inicial no debe ser posterior a la fecha actual.");
        fechaInputI.value = "";
    }
}

function validarFechaF() {
    var fechaInputF = document.getElementById("dateFin");
    var fechaIngresadaF = new Date(fechaInputF.value);
    var fechaHoyF = new Date();

    if (fechaIngresadaF < fechaHoyF) {
        alert("La fecha de final no debe ser anterior a la fecha actual.");
        fechaInputF.value = "";
    }
}