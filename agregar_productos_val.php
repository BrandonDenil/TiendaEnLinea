<?php
	if (isset($_POST["producto"],$_POST["sucursal"],$_POST["cantidad"]) and $_POST["producto"]!="" and $_POST["sucursal"]!="" and $_POST["cantidad"]!="")
	{		
		//variables 
			$prod=$_POST["producto"];
			$id_prod=$_POST["producto"];
			$sucu=$_POST["sucursal"];
			$id_sucu=$_POST["sucursal"];
			$cant=$_POST["cantidad"];
		// uso de clases
			//funciones de sucursal
			require_once 'negocios/sucursal_negocio.php';
     		$su= new sucursal();
     		$lista=$su->listar();
     		//funciones de productos
     		require_once 'negocios/producto_negocio.php';
            $pr= new productos();
            $lista2=$pr->listar_todo();
            //funciones de existencia de productos
            require_once 'negocios/existencia_productos_negocio.php';
            $existencia_prod= new Existencia();
            $lista3 =$existencia_prod->listar();
            // comparacion de ids 

            while ($row=mysqli_fetch_array($lista2))
              {
                if($row["nombre"]==$prod)
                {	
                	$id_prod=$row["id_producto"];
                	while ($row=mysqli_fetch_array($lista))
                	{
                		if($row["nombre"]==$sucu)
                		{
                			$id_sucu=$row["id_sucursal"];
                			//vemos si ya agregamos producto, si si sumamos la cantidad de lo contrario la agregamos
                			while ($row=mysqli_fetch_array($lista3))
                			{
                					if ($row["id_producto"]==$id_prod and $row["id_sucursal"]=$id_sucu) {
                						$cant=$cant+$row["cantidad"];
                						$existencia_prod->update($cant,$id_sucu,$id_prod);
                						header('Location:agregar_productos.php');
                						die();
                					}
                			}

                			$existencia_prod->insert($cant,$id_sucu,$id_prod);
                			echo '<script type="text/javascript">alert("hecho");</script>';
                					header('Location:agregar_productos.php');
                					die();
                		}
                	}
                }
              }
              } 
               echo $cant;
?>