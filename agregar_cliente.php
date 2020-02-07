<?php
	
//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["name"], $_POST["last_name"], $_POST["email"],$_POST["address"],$_POST["card_no"],$_POST["cvv"],$_POST["password"]) and $_POST["name"] !="" and $_POST["last_name"]!="" and  $_POST["email"]!="" and $_POST["address"]!=""and$_POST["card_no"]!=""and$_POST["cvv"]!="" and $_POST["password"]!="" ){

	require_once 'negocios/cliente_negocio.php';

	$cliente= new Clientes();

	$nombre=$_POST["name"];
	$usuario=$_POST["user"];
	$apellido=$_POST["last_name"];
	$correo=$_POST["email"];
	$direccion=$_POST["address"];
	$tarjeta=$_POST["card_no"];
	$cvv=$_POST["cvv"];
	$contrasena=$_POST["password"];
	$cliente->insertar($nombre,$apellido,$correo,$direccion,$tarjeta,$cvv,$usuario,$contrasena);
	header('Location:index.php');
}

else {
	echo '<script type="text/javascript">alert("Complete el formulario");</script>';
	header('Location:registro.php');}

  ?>