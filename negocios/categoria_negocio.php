<?php
require_once('datos/conexion.php');
/**
 *
 */
class Categorias
{


	
	public function listar(){
		$db=new Datos();
		$db->conectar();
		$consulta="SELECT * FROM categoria ";
		$cat=mysqli_query($db->objetoconexion, $consulta);
		$db->desconectar();
		return $cat;
	}


	public function insertar($producto,$precio,$descripcion,$codigo,$foto,$categoria){

		$db=new Datos();
		$db->conectar();
		
		$cadena= "INSERT INTO producto (nombre,precio,descripcion,codigo,foto,categoria) VALUES('$producto','precio','$descripcion','$codigo','$foto','$categoria')";
		$consulta=mysqli_query($db->objetoconexion, $cadena);
		$db->desconectar();
	}
}
 ?>