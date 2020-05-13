"use strict";

let btnparticipar = document.getElementById("btn-participar");
btnparticipar.addEventListener("click", sortear);

let btnclose = document.getElementById("btn-close");
btnclose.addEventListener("click", closebox);

function closebox() {
    document.getElementById("box").style.display = "none";
}

function sortear() {
    let descuento = Math.floor(Math.random() * (61 - 20) + 20);
    let descganado = document.getElementById("desc-ganado");
    let serviganado = document.getElementById("servi-ganado");

    let servicios = ["Liftin", "Extensi&oacuten", "Servis", "Perfilado", "Make up clasico", "Make up artistico"];
    let servicio = Math.floor(Math.random() * 6);
    let servicioganado = servicios[servicio];

    descganado.innerHTML = descuento;
    serviganado.innerHTML = servicioganado;
    document.getElementById("box").style.display = "block";

}