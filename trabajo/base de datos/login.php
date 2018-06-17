<?php
session_start();
if (isset($_POST['submit'])){
	$nombre="josef";
	$contraseña="12345josef";
	if((isset($_POST['nombre']))&&(isset($POST['contraseña']))){
		$nom=$_POST['nombre'];
		$contra=$_POST['contraseña'];
		if (($nom==$nombre)&&($contra==$contraseña)) {
			$_SESSION['nombre']=$nom;
			header("localition:user.php");
		}else{
			echo "ingresaste".$nom."y contraseña:".$contra."</br>";
			echo "y los guardados son: ".$nombre."y la contraseña: ".$contraseña;
		}
	}else{
		header("location:index.php");
	}
	}else{
		header("location:index.php");
	}
?>