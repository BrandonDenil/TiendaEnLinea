<?php 
	session_start();
	$id= $_POST["exis"];
	 $_SESSION["lista"][]=$id;
	 header("Location:catalogo.php");
 ?>