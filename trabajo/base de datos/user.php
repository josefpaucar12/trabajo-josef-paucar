<?php
session_start();
if(isset($_SESSION['nombre'])){
	echo "Bienvenido".$_SESSION['nombre'];
}else{
	echo "no tienes acceso a esta pagina";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenidos</title>
	<link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>
<body>

</body>
</html>