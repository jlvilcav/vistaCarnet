<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../images/foto.jpg">
<link rel="stylesheet" type="text/css" href="css/Carnet.css"/>
<script type="text/javascript" src="{{asset('js/carnet.js')}}"></script>
<title>Documento sin título</title>
<style type="text/css">
<!--
#apDiv2 {
	position:absolute;
	width:75px;
	height:20px;
	z-index:8;
	left: 220px;
	top: 122px;
}
#apDiv3 {
	position:absolute;
	width:75px;
	height:20px;
	z-index:9;
	left: 220px;
	top: 154px;
}
#apDiv4 {
	position:absolute;
	width:75px;
	height:20px;
	z-index:10;
	left: 220px;
	top: 186px;
}
#apDiv5 {
	position:absolute;
	width:101px;
	height:15px;
	z-index:11;
	left: 820px;
	top: 389px;
}
#apDiv6 {
	position:absolute;
	width:75px;
	height:20px;
	z-index:11;
	left: 220px;
	top: 220px;
}
#apDiv7 {
	position:absolute;
	width:75px;
	height:20px;
	z-index:12;
	left: 220px;
	top: 254px;
}
#apDiv8 {
	position:absolute;
	width:75px;
	height:20px;
	z-index:13;
	left: 220px;
	top: 290px;
}
#apDiv9 {
	position:absolute;
	width:200px;
	height:20px;
	z-index:14;
	left: 298px;
	top: 290px;
}
-->
</style>
</head>

<body>
<form id="formulario">
	
<div id="Carnet">
<div id="apDiv1">

  <label> Codigo:
    <input type="text" name="vTxtCodigo" id="vTxtCodigo" />
  </label>
  <label>
    <input type="submit" name="vBtnBuscar" id="vBtnBuscar" value="Enviar" />
  </label>

					
</div>
    <div id="Univ">  
  		<input type="text" value="" id="vUniv" /> 
  	</div>
  	<div id="Codigod"> 
  		<input type="text" value="" id="Codigo" />
  	</div>
	<div id="Apellidod">
		<input type="text" value="" id="Apellido"  />
	</div>
	<div id="Nombred">
		<input type="text" value="" id="Nombre" />
	</div>
	<div id="Facultadd">
		<input type="text" value="" id="Facultad"/>
	</div>
	<div id="Carrerad">
		<input type="text" value="" id="Carrera"/>
	</div>
  
  
  <div id="Foto" >
 <img src="{{asset('/imagen/foto.jpg')}}" width="100%" height="100%" />
  </div>
  <div id="apDiv2">Código: </div>
  <div id="apDiv3">Apellidos:</div>
  <div id="apDiv4">Nombres:</div>
  <div id="apDiv6">Facultad:</div>
  <div id="apDiv7">Carrera:</div>
  <div id="apDiv8">Fecha Exp.:</div>
  <div id="apDiv9">04/04/2015</div>
</div>

</form>
</body>
</html>