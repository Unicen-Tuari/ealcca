"use strict";
document.addEventListener('DOMContentLoaded', iniciar);

function iniciar() {
    let password = document.getElementById("inputPass");
    password.addEventListener('change', validarPassword);


    function validarPassword() {
        let correo = document.getElementById("inputPass");
        let valorCorreo = correo.value;
        let expresion = /\w+@\w+\.+[a-z]/;
        if (!expresion.test(valorCorreo)) {
            correo.value = "";
            correo.focus();
            alert("Formato de mail incorrecto");
        }

    }
}