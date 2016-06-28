"use strict";
const _credito = 100;  //credito con el que disponemos
const _valorApuesta = 1;	//costo de la apuesta
const _abonoPleno = 10;
const _abonoPares = 5;
const _abonoColor = 5;
const _abonoMayores = 4;
const _abonoMenores = 4;

function Credito(){   //-----------------------OBJETO Credito-------------------------//
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

function Ruleta(){    //-----------------------OBJETO Ruleta-------------------------//
  Ruleta.prototype.tirar = function(){
			return Math.floor((Math.random() * 11));  //la cantidad 11 por el numero de casillas
	}
};

function Casilla(n){	//-----------------------OBJETO Casilla-------------------------//
	this.valor = parseInt(n);
	this.elcolor = String("");
};

function Juego(){     //-----------------------OBJETO Juego-------------------------//
  this.listaApuestas=[];		 //arr de objetos Apuesta
  this.listaCasilleros=[];
  this.flag="";
  this.credito = new Credito();//Instancia del objeto Credito
  this.revancha=false;

};
