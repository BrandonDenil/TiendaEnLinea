<?php 	
		$usuario= $_POST["user"];
		$contra= $_POST["pass"];
		require_once 'negocios/cliente_negocio.php';	
		$client= new Clientes();
		 $list=$client->listar(); 
      while ($row=mysqli_fetch_array($list))
      { 
      	echo $usuario ."  ". $contra;
      		echo $row["usuario"]. "  " . $row["contrasenia"]; 
      	if ($usuario==$row["usuario"] and $contra== $row["contrasenia"])
      	{	
      		echo $usuario ."  ". $contra;
      		echo $row["usuario"]. "  " . $row["contrasenia"]; 
      		session_start();
      		$_SESSION["sesion"]=1;
      		$_SESSION["id_usuario"]=$row["id_cliente"];
      		$_SESSION["usuario"]=$row["usuario"];
      	}
      }
      if ($_SESSION["sesion"]==1 ) {header('Location:index.php');}
      	else {header('Location:inicio_sesion.php');}

  ?>