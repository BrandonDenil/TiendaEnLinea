<?php 
      session_start();	
		$usuario= $_POST["user"];
		$contra= $_POST["pass"];
		require_once 'negocios/usuario_negocio.php';	
		$user= new Usuario();
		 $list=$user->listar_rol(); 
      while ($row=mysqli_fetch_array($list))
      {     
      	if ($usuario==$row["user"] and $contra== $row["pass"] and $row["rol"]=="administrador")
      	{	 
      		$_SESSION["sesion_sistema"]=1;
      		$_SESSION["usuario"]=$row["user"];
                  $_SESSION["rol"]=$row["rol"];
                  echo "admmin <br>";
                  break;
      	}
            if ($usuario==$row["user"] and $contra== $row["pass"] and $row["rol"]=="gerente")
            {      
                  $_SESSION["sesion_sistema"]=1;
                  $_SESSION["usuario"]=$row["user"];
                  $_SESSION["rol"]=$row["rol"];
                  echo "gerente <br>";
                  break;
            }
      }
      if ($_SESSION["sesion_sistema"]==1 and $_SESSION["rol"]== "administrador"  ) 
            {     
                  echo $_SESSION["usuario"];
                  echo $_SESSION["rol"];
                  echo $_SESSION["sesion_sistema"];
                  echo "<br>";
                  header('Location:inicio_administrador.php');
            }
      if ($_SESSION["sesion_sistema"]==1 and $_SESSION["rol"]== "gerente"  ) 
            {     
                  echo $_SESSION["usuario"];
                  echo $_SESSION["rol"];
                  echo $_SESSION["sesion_sistema"];
                  header('Location:inicio_gerente.php');
            }
      	else {
                  header('Location:inicio_sesion_sistema.php');
            }

  ?>