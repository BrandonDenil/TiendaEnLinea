<?php
require_once('datos/conexion.php');
/**
 *
 */
class Sucursal
{

	public function listar(){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT * FROM rol ";
		$sucursal=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $sucursal;
	}

	
}
 ?>