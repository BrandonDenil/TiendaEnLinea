<?php
require_once('datos/conexion.php');
/**
 *
 */
class Venta
{
	public function obtener_ultimo()
	{	//devuelve el ultimo id
		$db=new Datos();
		$db->conectar();
		$consulta="select id_venta,fecha from venta order by id_venta desc limit 1 ";
		$venta=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $venta;
	}

	public function obtener_total($id)
	{	
		$db=new Datos();
		$db->conectar();
		$consulta="select total from venta where id_venta= '$id'";
		$total=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $total;
	}

	public function listar(){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT * FROM venta ";
		$venta=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $venta;
	}

	public function insertar($fecha,$total, $id_cliente)
	{
		$db=new Datos();
		$db->conectar();
		$consulta="Insert into venta (fecha,total,id_cliente) values('$fecha','$total','$id_cliente') ";
		$venta=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		
	}

	public function update($total,$id){
		$db=new Datos();
		$db->conectar();
		$consulta="Update venta set total='$total' where id_venta = '$id'";
		$venta=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
	}	
}
 ?>