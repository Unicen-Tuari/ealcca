"use strict";
document.addEventListener('DOMContentLoaded', iniciar);

function iniciar(event) {

    function sortear() {

        let descganado = document.getElementById("desc-ganado");
        descganado.innerHTML = porcentaje();

        let serviganado = document.getElementById("servi-ganado");
        serviganado.innerHTML = servicio();

        let openbox = document.getElementById("box");
        openbox.style.display = "block"

    }

    function porcentaje() {
        let descuento = Math.floor(Math.random() * (51 - 20) + 20);
        return descuento;
    }

    function servicio() {
        let indice = Math.floor(Math.random() * 6);
        let arr_servicios = ["Liftin", "Extensi&oacuten", "Servis", "Perfilado", "Make up clasico", "Make up artistico"];
        let servicioganado = arr_servicios[indice];
        return servicioganado;
    }

    function closebox() {
        let close = document.getElementById("box");
        close.style.display = "none";
    }

    let btnparticipar = document.getElementById("btn-participar");
    btnparticipar.addEventListener("click", sortear);

    let btnclose = document.getElementById("btn-close");
    btnclose.addEventListener("click", closebox);


}