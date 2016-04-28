"use strict";

var saldo= 100;
var numeroelegido = -1;

function sorteo()
{
  return Math.floor(Math.random() * 9);
}

function jugar()
{
    var numeroganador = sorteo(); // guardamos el numero ganador
    var x = document.forms[0]; // asignamos el valor del array del formulario a X
    document.getElementById("numganador").innerHTML = numeroganador; //mostramos en el html el numero ganador.

    for (var i = 0; i < 10; i++) // recorremos el arreglo(formulario)
    {
      if (x[i].checked) // revisamos si tiene el checked
      {
        numeroelegido= i;  // en la afirmacion almacena el numero q tiene el cheked en la variable "numeroelegido"
      }
    }
    if (numeroelegido == -1)  // para el caso en que no hayamos marcado algun radio
    {
      console.log("Elija un numero para apostar");
      return;
    }
    if (numeroelegido == numeroganador)  //revisamos el resultado con el numero de apuesta
    {
      if (numeroelegido==0){      //condiciones sobre el resultado
        saldo += 10;
        console.log("grandioso, ganaste +10");
      }
      if (numeroelegido >= 1 && numeroelegido <6){
        saldo += 4;
        console.log("bien!! ganaste +4");
      }
      else{
        saldo += 2;
        console.log("ganaste")
      }
    }
    else {                        
      saldo = saldo - 1;
      console.log('PERDISTE, vuelve a intentar');
    }
    document.getElementById("udcuenta").innerHTML = "UD. cuenta con = " + saldo; // muestra saldo actualizado en el html
}


