<?php
	$destino = "daniel29@javerianacali.edu.co";
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$info = $_POST["info"];
	$pais = $_POST["pais"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: ".$nombre."\nApellido: ".$apellido."\nCorreo: ".$correo."\nTeléfono: ".$telefono."\nPaís: ".$pais."\n Mensaje: ".$mensaje;

	mail($destino,$info,$contenido);
	header("Location:../gracias.html")
?>