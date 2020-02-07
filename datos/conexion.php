<?php
class Datos
{

	private $servidor='localhost';
	private $usuario="root";
	private $pass="";
	private $db="store_online_s_a";
	public $objetoconexion;

	public function conectar(){
		$this->objetoconexion=mysqli_connect($this->servidor,$this->usuario,
			$this->pass,$this->db) or die("Error conection");
	}

	public function desconectar(){
		mysqli_close($this->objetoconexion);
	}
}
?>

