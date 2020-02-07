<?php
require_once('datos/conexion.php');
/**
 *
 */
class Reportes
{
public 	function top_100_productos_mas_vendidos()
	{
		$db=new Datos();
		$db->conectar();
		$consulta="select pr.nombre as productos,sum(de.cantidad) as ventas, suc.nombre as tienda from detalle as de inner join existencia_de_productos as ex on ex.id_existencia=de.id_existencia inner join producto as pr on pr.id_producto=ex.id_producto inner join sucursal as suc on  ex.id_sucursal = suc.id_sucursal GROUP by pr.nombre,suc.nombre ORDER by ventas DESC limit 10 ";
		$ex=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $ex;
	}

	public 	function top_100_productos_mas_vendidosB($id_sucursal)
	{
		$db=new Datos();
		$db->conectar();
		$consulta="select pr.nombre as productos,sum(de.cantidad) as ventas, suc.nombre as tienda from detalle as de inner join existencia_de_productos as ex on ex.id_existencia=de.id_existencia inner join producto as pr on pr.id_producto=ex.id_producto inner join sucursal as suc on  ex.id_sucursal = '$id_sucursal' GROUP by pr.nombre,suc.nombre ORDER by ventas DESC limit 10 ";
		$ex=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $ex;
	}
	
	public 	function top_20_productos_menos_existencia($id_sucursal)
	{
		$db=new Datos();
		$db->conectar(); 
		$consulta="SELECT  pr.nombre as productos,cantidad,suc.nombre as tienda FROM existencia_de_productos as ex inner join producto as pr on ex.id_producto = pr.id_producto inner join sucursal as suc on
		suc.id_sucursal=ex.id_sucursal where cantidad<10 order by cantidad asc limit 20";
		$ex=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $ex;
	} 
	public 	function productos_mas_vendidos($id_sucursal,$fecha_inicial,$fecha_final)
	{
		$db=new Datos();
		$db->conectar();
		$consulta="select pr.nombre as productos,sum(de.cantidad) ventas, fecha,suc.nombre as tienda from detalle as de inner join existencia_de_productos as ex on ex.id_existencia=de.id_existencia inner join producto as pr on pr.id_producto=ex.id_producto inner join sucursal as suc on ex.id_sucursal = '$id_sucursal' inner join venta as ve on ve.id_venta= de.id_venta where fecha=$fecha GROUP by pr.nombre,suc.nombre ORDER by ventas ASC limit 10 ";
		$ex=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $ex;
	}

	public 	function clientes_compras()
	{
		$db=new Datos();
		$db->conectar();
		$consulta="select nombre,COUNT(nombre)as compras from cliente as cl INNER JOIN venta as ve on ve.id_cliente= cl.id_cliente GROUP by nombre";
		$ex=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $ex;
	}

	public 	function venta_por_rango_fechas()
	{
		$db=new Datos();
		$db->conectar();
		$consulta="select nombre,COUNT(nombre)as compras from cliente as cl INNER JOIN venta as ve on ve.id_cliente= cl.id_cliente GROUP by nombre";
		$ex=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $ex;
	}
}
 ?>