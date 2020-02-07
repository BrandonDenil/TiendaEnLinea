<?php
session_start();
unset($_SESSION["lista"]);
	$_SESSION["lista"]=array();
	header('Location:carrito_compras.php');
  ?>