<?php

$nombre=$_POST['nombre'];
$apellido=$_POST['usuario'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$query="INSERT INTO base de datos(nombre,usuario,contraseña) VALUES('$nombre','$apellido','email',$contraseña)";
$ejecutar=@mysqli_query($conectar,$mysqli);
$resultado =$conexion - >query($query); 
if ($result){
	echo "ingreso completado";
	
}
else
	{
		echo "fallo al conectar";
	}
?> 