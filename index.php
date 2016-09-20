<html>
<head>
	<title>Ejercicio 35</title>
</head>
<body>

<form enctype="multipart/form-data" method="post" action="nexo.php">
<div class ="CajaInicio Animated bounceIn">

<lavel> Cargue un archivo para copiar en</lavel>	

<?php  include_once("PHP/gestor.php");
$path=Gestor::ObtenerPath();
echo "$path"; 
?>	

<br> </br>
<input type="text" name="nombre_archivo" id="nombre_archivo"> </input>
<br> </br>
<input class= "MiBotonUtn" type= "submit" value="cargar" name="cargar" id="text"> </input>
<input class= "MiBotonUtn" type= "file" value="file" name="file" id="file"> </input> 

</div>
</form>

</body>
</html>