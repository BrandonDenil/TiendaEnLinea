<?php
require_once('datos/conexion.php');
/**
 *
 */
class tiendas
{

	public function listar(){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT * FROM sucursal ";
		$resultado=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $resultado;
	}

}
 ?>