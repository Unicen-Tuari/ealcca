"use strict";

function elegirapuesta(){
  var x = document.getElementById("clase-apuesta").value;
  if (x == "pleno"){
    var x = document.getElementById("valor-apuesta");
    var option = document.createElement("option");
    option.text = "1";
    x.add(option);
    alert("bien");
  }

  alert(x);

}



