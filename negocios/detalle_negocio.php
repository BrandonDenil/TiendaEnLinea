<?php
require_once('datos/conexion.php');
/**
 *
 */
class Detalle
{

	public function listar(){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT * FROM detalle ";
		$venta=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $venta;
	}

	public function insertar($cantidad,$subtotal,$id_venta, $id_existencia)
	{
		$db=new Datos();
		$db->conectar();
		$consulta="Insert into detalle (cantidad,subtotal,id_venta,id_existencia) values('$cantidad','$subtotal','$id_venta','$id_existencia') ";
		$venta=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		
	}

	public function update($total){
		$db=new Datos();
		$db->conectar();
		$consulta="Update venta set total='$total' ";
		$venta=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
	}	
}
 ?>