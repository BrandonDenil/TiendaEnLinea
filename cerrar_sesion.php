<?php
	session_start();
	$_SESSION["sesion"]=0;
	$_SESSION["sesion_sistema"]=0;
	header('Location:index.php');
  ?>