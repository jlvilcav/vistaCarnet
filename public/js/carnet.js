// Documento Java Script

var dominio = document.domain;
var urlBase = "http://"+ dominio + "/vistaCarnet/public/";

$(document).on('ready',function(){
	$("#formulario").on('submit', function(event){
		event.preventDefault();
	});

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

	$el.llenarCampos = function(dataE){
		var ApeCompleto = dataE.appaterno + ' ' + dataE.apmaterno;

		//procediendo a llenar los campos
		$("#vUniv").val(dataE.descripcion);
		$("#Codigo").val(dataE.codalumno);
		$("#Apellido").val(dataE.descripcion);
		$("#Nombre").val(dataE.nombre);
		$("#Facultad").val(dataE.nomfacultad);
		$("#Carrera").val(dataE.nomcarr);

		alert(ApeCompleto);
	}

	$el.buscarxCarnet = function(){
		var codigo = $("#vTxtCodigo").val();
		
		if(codigo.length == 0){
			alert('por favor llene el campo de documento');
			$("#vTxtCodigo").focus();
			return false;
		}

		$el.url = $el.url + $("#vTxtCodigo").val();

		alert($el.url);
		var request = $.ajax({
			url:  $el.url,
			method:  "GET",
			dataType:  "json"
		});

		request.done(function(data){
			if(data[0]){
				$el.llenarCampos(data[0])
			}else{
				$el.trigger('noseEncontro');
			}
		});

		request.fail(function( jqXHR, textStatus){
			console.log( "Request failed: " + textStatus);
		});
	}
	return $el;
}