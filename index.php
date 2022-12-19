
<!-- Manejo de sesion -->
<?php session_start(); ?>
<!-- Requerimos un archivo php -->
<?php require_once("script/configuracion/requerimientos.php"); ?> 
<!-- Codigo html -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!-- Titulo de la paguina -->
		<title>Inicio De Sesion</title>
		<!-- Determinamos el CSS de la paguina-->
		<link href="css/estilo.css" type="text/css" rel="stylesheet">
		<!--Scrip ReCaptcha-->
		<script src='https://www.google.com/recaptcha/api.js'></script> 
	</head>
	<body>
		<!--Llamamos al metodo login-->
		<?php login(); ?> 
	</body>
</html>
