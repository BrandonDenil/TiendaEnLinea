<?php
require_once('datos/conexion.php');
/**
 *
 */
class Usuario
{

	public function listar(){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT * FROM usuario ";
		$usuario=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $usuario;
	}

	public function listar_rol(){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT us.nombre as user, r.nombre as rol, us.contrasenia as pass FROM usuario as us
		inner join rol as r on us.id_rol = r.id_rol";
		$usuario=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $usuario;
	}
	
}
 ?>