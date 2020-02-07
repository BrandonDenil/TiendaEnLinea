<?php
require_once('datos/conexion.php');
/**
 *
 */
class Existencia
{

	public function listar(){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT * FROM existencia_de_productos ";
		$ex=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $ex;
	}

	public function listar_por_id( $id){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT pr.nombre as nombre_producto,su.nombre as nombre_sucursal,precio, cantidad FROM existencia_de_productos as ex inner join sucursal as su on su.id_sucursal= ex.id_sucursal inner join producto as pr on pr.id_producto= ex.id_producto where id_existencia= '$id'";
		$ex=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $ex;
	}

	public function insert($cantidad,$sucursal,$producto)
	{
		$db=new Datos();
		$db->conectar();
		$consulta="INSERT INTO existencia_de_productos (cantidad,id_producto,id_sucursal) values ('$cantidad','$producto','$sucursal') ";
		$ex=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
	}

	public function update($cantidad,$sucursal,$producto)
	{
		$db=new Datos();
		$db->conectar();
		$consulta="UPDATE existencia_de_productos set cantidad='$cantidad' where id_producto=$producto and id_sucursal='$sucursal'";
		$ex=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
	}


	public function update_por_id($cantidad,$id)
	{
		$db=new Datos();
		$db->conectar();
		$consulta="UPDATE existencia_de_productos set cantidad='$cantidad' where id_existencia='$id'";
		$ex=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
	}

	
}
 ?>