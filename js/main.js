"use strict";


let sorteo = document.getElementById("btn-sorteo");
sorteo.addEventListener("click",saludar);

function saludar(){
    document.getElementById("box").style.display = "block";
}

let close = document.getElementById("btn-close");
close.addEventListener("click",closebox);

function closebox(){
    document.getElementById("box").style.display = "none";
}

