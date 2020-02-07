<?php
require_once('datos/conexion.php');
/**
 *
 */
class Clientes
{


	
	public function listar(){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT * FROM cliente ";
		$cliente=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $cliente;
	}


	public function insertar($nombre,$apellido,$correo_electronico,$no_tarjeta,$cvv,$direccion,$user,$contrasenia	){

		$db=new Datos();
		$db->conectar();
		
		$cadena= "INSERT INTO cliente (nombre, apellido, correo_electronico,no_tarjeta,cvv,direccion,usuario,contrasenia) VALUES('$nombre','$apellido','$correo_electronico','$no_tarjeta','$cvv','$direccion','$user','$contrasenia')";
		$consulta=mysqli_query($db->objetoconexion, $cadena);
		$db->desconectar();
		echo "<script type=\"text/javascript\">alert(\"Registro Agregado\");</script>";
	}
}
 ?>