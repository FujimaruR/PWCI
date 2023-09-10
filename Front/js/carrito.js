const radio = document.getElementById("productrad1");
const radiod = document.getElementById("productrad2");
const radfir = document.getElementById("flexRadioDefault1");
var checado = false;
var checadod = false;
var checadofir = false;

radfir.addEventListener("click", () => {

    if (checadofir != true) {
        radio.checked = !radio.checked;
        radiod.checked = !radiod.checked;
        radfir.checked = !radfir.checked;
        checadofir = true;
    } else {
        radio.checked = radio.checked;
        radiod.checked = radiod.checked;
        radfir.checked = radfir.checked;
        checadofir = false;
    }


});

radio.addEventListener("click", () => {

    if (checado != false) {
        radio.checked = !radio.checked;
        checado = false;
    } else {
        checado = true;
    }


});

radiod.addEventListener("click", () => {

    if (checadod != false) {
        radiod.checked = !radiod.checked;
        checadod = false;
    } else {
        checadod = true;
    }


});