"use strict";
const _credito = 100;  //credito con el que disponemos
const _valorApuesta = 1;	//costo de la apuesta
const _abonoPleno = 10;	
const _abonoPares = 5;
const _abonoColor = 5;
const _abonoMayores = 4;
const _abonoMenores = 4;

function Credito(){		//-----------------------OBJETO Credito-------------------------//
	var saldo = _credito;   // privado
	Credito.prototype.getSaldo = function(){   //Creamos una funcion getSaldo para ingresar 
		return saldo;
	}
	Credito.prototype.incrementar = function(n){  //nos pasamos como parametro el saldo
		saldo += n;
	}
	Credito.prototype.disminuir = function(n){
		saldo -= n;
	}
};

function Apuesta(){		//-----------------------OBJETO Apuesta-------------------------//
	this.valor;	
	this.tipo;
	this.cantidad;
};

function Ruleta(){		//-----------------------OBJETO Ruleta-------------------------//
	Ruleta.prototype.tirar = function(){
			return Math.floor((Math.random() * 11));  //la cantidad 11 por el numero de casillas
	}
};

function Casilla(n){		//-----------------------OBJETO Casilla-------------------------//
	this.valor = parseInt(n);
	this.elcolor = String("");
};

function Juego(){   //-----------------------OBJETO Juego-------------------------//
	this.listaApuestas=[];		 //arr de objetos Apuesta
	this.listaCasilleros=[];  
	this.flag="";                
	this.credito = new Credito();//Instancia del objeto Credito
	this.revancha=false;        

	Juego.prototype.iniciar = function(){  //-------METODOS del objeto JUEGO-----------//
		this.cargaValores();	//carga listaCasilleros con objetos Casilla seteados por valor y color
		this.ocultarSelects();	//ocultamos todos los select
		var select = document.getElementById("clase-apuesta");
		select.options[0].selected = "selected";						//solo para reset del select
		document.getElementById('saldo').innerHTML = this.credito.getSaldo();    //obtengo el saldo
		document.getElementById('botonTirar').style.visibility = "hidden";
		document.getElementById('mayores').firstElementChild.options[0].text = "Del 5 al 10";
		document.getElementById('menores').firstElementChild.options[0].text = "Del 6 al 0";
	}
	Juego.prototype.cargaValores = function (){
		for (var i = 0; i < 11; i++) {
	    this.listaCasilleros[i]=new Casilla(i);
			if(i!=0){
				switch(i){
					case 1:
						this.listaCasilleros[i].elcolor="rojo";
						break;
					case 2:
						this.listaCasilleros[i].elcolor="negro";
						break;
					case 3:
						this.listaCasilleros[i].elcolor="rojo";
						break;
					case 4:
						this.listaCasilleros[i].elcolor="negro";
						break;
					case 5:
						this.listaCasilleros[i].elcolor="rojo";
						break;
					case 6:
						this.listaCasilleros[i].elcolor="rojo";
						break;
					case 7:
						this.listaCasilleros[i].elcolor="negro";
						break;
					case 8:
						this.listaCasilleros[i].elcolor="rojo";
						break;
					case 9:
						this.listaCasilleros[i].elcolor="negro";
						break;
					case 10:
						this.listaCasilleros[i].elcolor="negro";
						break;
				}
			}
	  	}
	}
	Juego.prototype.ocultarSelects = function(){
		var select = document.getElementById("clase-apuesta");
		for (var i = 1; i < select.length; i++) {
			var id = String(select.options[i].value);
			if (document.getElementById(id)) {
				document.getElementById(id).style.visibility="hidden";
				document.getElementById(id).style.position="absolute";
			}
		}
	}
  	Juego.prototype.elegirApuesta = function(){
		var tipoApuesta = document.getElementById('clase-apuesta').value;
    	switch (tipoApuesta) {
			case "selecciona":
					this.flag = "";
					this.ocultarSelects();
					break;
      		case "pleno":
					this.flag = tipoApuesta;
					this.ocultarSelects();
          			document.getElementById(tipoApuesta).style.visibility="visible";
					document.getElementById(tipoApuesta).style.position="relative";
					document.getElementById(tipoApuesta).firstElementChild.options.item(0).selected="selected"; //reset del select
          			break;
      		case "paridad":
					this.flag = tipoApuesta;
					this.ocultarSelects();
					document.getElementById(tipoApuesta).style.visibility="visible";
					document.getElementById(tipoApuesta).style.position="relative";
					document.getElementById(tipoApuesta).firstElementChild.options.item(0).selected="selected";
					break;
			case "color":
					this.ocultarSelects();
					document.getElementById(tipoApuesta).style.visibility="visible";
					document.getElementById(tipoApuesta).style.position="relative";
					this.flag = tipoApuesta;
					break;
			case "mayores":
					this.ocultarSelects();
        			document.getElementById(tipoApuesta).style.visibility="visible";
					document.getElementById(tipoApuesta).style.position="relative";
					this.flag = tipoApuesta;
					break;
			case "menores": 
					this.ocultarSelects();
					document.getElementById(tipoApuesta).style.visibility="visible";
					document.getElementById(tipoApuesta).style.position="relative";
					this.flag = tipoApuesta;
					break; 
		}
	}
	Juego.prototype.validarCantidad = function(n){
		if (n == ""){
			alert("Tiene que apostar minimo 1 ficha")
		}
		else{
			if (n < parseInt(this.credito.getSaldo())){
				document.getElementById('botonTirar').style.visibility = "visible";
				return true;

				}
				else{
					alert("Por favor apueste la cantidad correcta");
					return false;
				}
			}
	}
	Juego.prototype.imprimemiApuesta = function(miapuesta){
		var lista = "";
		for (var i = 0; i < miapuesta.length; i++) {
			lista += "Valor:"+miapuesta[i].valor+"-Tipo:"+miapuesta[i].tipo+"-Cantidad:"+miapuesta[i].cantidad+"<br>";
		}
		document.getElementById('lista').innerHTML = lista;
	}
	Juego.prototype.agregarApuesta = function(){
		if (this.flag != "") {
			var id = String(this.flag); 	//guardamos el select elegido
			var tagSelect = document.getElementById(id).children;	// entramos al children y guardamos el tipo de apuesta
			var cantidad = parseInt(document.getElementById('cantidad').value); //guardamos la cantidad de fichas
			var validarCantidad = this.validarCantidad(cantidad);	//Controlamos la cantidad con un boolean
			if (validarCantidad) {
				if(tagSelect[0].value != "Seleccione valor"){
					var miApuesta = new Apuesta();
					miApuesta.valor = tagSelect[0].value;
					miApuesta.tipo = id;
					miApuesta.cantidad = cantidad;
					if (miApuesta.tipo == "pleno" && miApuesta.valor % 4 == 0 && miApuesta.valor != 0) {
						alert("PROMOCION; Ud esta apostando X4 / el valor de la apuesta X2 / pero si gana es X3!!!");
						this.credito.disminuir(cantidad * _valorApuesta * 2);
					}else {
						this.credito.disminuir(cantidad * _valorApuesta);
					}
					this.listaApuestas.push(miApuesta);  //agregamos a la lista(arr) de apuestas miApuesta
					this.imprimemiApuesta(this.listaApuestas);
				}
				document.getElementById('saldo').innerHTML = this.credito.getSaldo();
			}
		}
	}
	Juego.prototype.imprimeTirada = function(random){
		for (var i = 0; i < this.listaCasilleros.length; i++) {
			if(this.listaCasilleros[i].valor == random){
				if (random != 0) {
					document.getElementById('salio').innerHTML = this.listaCasilleros[i].elcolor + " el " + random;
					break;
				}else{
					document.getElementById('salio').innerHTML = random; // en el caso q nos salga el cero; no tiene color.
					break;
				}
			}
		}
	}
	Juego.prototype.evaluar = function(){
		if(document.getElementById('lista').innerHTML != ""){
			var premio = 0;
			var miRuleta = new Ruleta(); // instancia del objeto Ruleta
			var random = miRuleta.tirar();
			this.imprimeTirada(random);
			for (var i = 0; i < this.listaApuestas.length; i++) {
				var apuesta = this.listaApuestas[i].tipo;
				switch (apuesta) { 
					case "pleno":
							if (random == this.listaApuestas[i].valor) {
								if (random % 4 == 0) {
										premio += (this.listaApuestas[i].cantidad * _abonoPleno * 3);
								}else {
										premio += (this.listaApuestas[i].cantidad * _abonoPleno);
								}
							}
							break;
					case "paridad":
							if (random !=0) {
								if (random % 2 == 0 && this.listaApuestas[i].valor == "par") {
										premio += this.listaApuestas[i].cantidad * _abonoPares;
								}
								if (random % 2 == 1 && this.listaApuestas[i].valor == "impar") {
										premio += this.listaApuestas[i].cantidad * _abonoPares;
								}
							}
							break;
					case "color":
							for (var e = 0; e < this.listaCasilleros.length; e++) {
								if(this.listaCasilleros[e].valor == random && this.listaCasilleros[e].elcolor == this.listaApuestas[i].valor){
									premio += this.listaApuestas[i].cantidad * _abonoColor;
								}
							}
							break;
					case "mayores":
							if (random > 5) {
									premio += this.listaApuestas[i].cantidad * _abonoMayores;
							}
							break;
					case "menores":
							if (random < 6) {
									premio += this.listaApuestas[i].cantidad * _abonoMenores;
							}
							break;
				}
			}
			if(premio!=0){
				document.getElementById('premio').innerHTML = "Gano!! "+premio;
				this.credito.incrementar(premio);
				document.getElementById('saldo').innerHTML = this.credito.getSaldo();
			}else {
				document.getElementById('premio').innerHTML = "Perdio!! ";
				if (!this.revancha) {

					if (confirm("PERDIO! se anima a la revancha? a solo 10 repite el tiro")) {

						this.revancha=true;
						this.credito.disminuir(10);
						document.getElementById('saldo').innerHTML = this.credito.getSaldo();
						this.evaluar();
					}
					}else {
						this.revancha=false;
					}
			}
			this.listaApuestas = [];
			document.getElementById('lista').innerHTML = "";
		}
	}
};
