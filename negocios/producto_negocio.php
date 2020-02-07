<?php
require_once('datos/conexion.php');
/**
 *
 */
class productos
{

	public function listar_todo(){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT * FROM producto ";
		$productos=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $productos;
	}
	
	public function listar(){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT pr.id_producto,ex.id_sucursal,pr.foto,ex.id_existencia,pr.nombre as nombre_producto,pr.precio,pr.descripcion,ex.cantidad,su.nombre as nombre_sucursal FROM producto as pr inner join existencia_de_productos as ex on pr.id_producto = ex.id_producto inner join sucursal as su on su.id_sucursal=ex.id_sucursal where ex.cantidad>0   ";
		$productos=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $productos;
	}

	public function listar_productos_existencia($array){
		if($array==null)
			{
				$array=array( 0=>"none"); 
				echo $array[0];
				echo count($array);

			}
		$db=new Datos();
		$db->conectar();
		$cantidad=count($array);
		if ($cantidad>0) {
		$consulta="SELECT pr.foto,pr.id_producto,ex.id_sucursal,ex.id_existencia,pr.nombre as nombre_producto,pr.precio,pr.descripcion,ex.cantidad,su.nombre as nombre_sucursal FROM producto as pr inner join existencia_de_productos as ex on pr.id_producto = ex.id_producto inner join sucursal as su on su.id_sucursal=ex.id_sucursal inner join categoria as ca on ca.id_categoria = pr.id_categoria where ex.cantidad>0  and  ca.nombre= ";
		
		 for ($i = 0; $i < $cantidad; $i++) 
          { 
           $consulta=$consulta."'". $array[$i]. "'";
           if (($i+1)!=$cantidad) $consulta=$consulta." || ";
          }

          $consulta=$consulta. " ";
        }

		$productos=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $productos;	
	}

	public function insertar($producto,$precio,$descripcion,$codigo,$foto,$categoria){

		$db=new Datos();
		$db->conectar();
		
		$cadena= "INSERT INTO producto (nombre,precio,descripcion,codigo,foto,id_categoria) VALUES('$producto','$precio','$descripcion','$codigo','$foto','$categoria')";
			
		$consulta=mysqli_query($db->objetoconexion, $cadena);
		$db->desconectar();
	}


}
 ?>