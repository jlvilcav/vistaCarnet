// Documento Java Script

var dominio = document.domain;
var urlBase = "http://"+ dominio + "/reclamaciones/public/";

$(document).on('ready',function(){

	$("#vBtnBuscar").on('click', function(){

		alert("Hola Jorge :D!");
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

	$el.llenarCampos = function(dataE){
		var ApeCompleto = dataE.appaterno + ' ' + dataE.apmaterno;

		//procediendo a llenar los campos
		$("#vUniv").val(dataE.descripcion);
		$("#Codigo").val(dataE.codalumno);
		$("#Apellido").val(dataE.descripcion);
		$("#Nombre").val(dataE.nombre);
		$("#Facultad").val(dataE.nomfacultad);
		$("#Carrera").val(dataE.nomcarr);
	}

	$el.buscarxCarnet = function(){
		var codigo = $("#vTxtCodigo").val();

		if(codigo.length == 0){
			alert('por favor llene el campo de documento');
			$("#vTxtCodigo").focus();
			return false;
		}

		$el.url = $el.url + codigo;

		var request = $.ajax({
			url:  $el.url,
			method:  "GET",
			dataType:  "json"
		});

		request.fail(function( jqXHR, textStatus){
			console.log( "Request failed: " + textStatus);
		});
	}
	return $el;
}