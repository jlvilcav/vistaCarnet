// Documento Java Script

var dominio = document.domain;
var urlBase = "http://"+ dominio + "/reclamaciones/public/";

$(document).on('ready',function(){

	$("#vBtnBuscar").on('click', function(){
		var buscar = new buscarCarnetAlumno();
		buscar.buscarxCarnet();
	});

});

function buscarCarnetAlumno(){
	var $el =$("<div>");
	$el.url = urlBase + 'carnet/lista/';

	$el.on('noseEncontro', function(){
		alert('No se ha emitido carnet para el código ingresado');
		$('#vTxtCodigo').focus();
	});


}