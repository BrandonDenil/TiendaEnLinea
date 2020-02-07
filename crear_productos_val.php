 <?php

 		if (isset($_POST["producto"],$_POST["precio"],$_POST["descripcion"],$_POST["codigo"],$_POST["foto"],$_POST["categoria"]) and $_POST["producto"]!="" and $_POST["precio"]!="" and $_POST["descripcion"]!="" and $_POST["codigo"]!="" and$_POST["foto"]!="" and $_POST["categoria"]!="")
 		{
 			require_once 'negocios/producto_negocio.php';
 			require_once 'negocios/categoria_negocio.php';
     		$cat= new Categorias();
 			$pro = new Productos();
 			$id_categoria=0;
 			$product=$_POST["producto"];
 			$price=$_POST["precio"];
 			$description=$_POST["descripcion"];
 			$code=$_POST["codigo"];
 			$photo=$_POST["foto"];
 			$category=$_POST["categoria"];
 			$lista=$cat->listar();
     				while ($row=mysqli_fetch_array($lista))
      				{
      					if($category==$row["nombre"]){$id_categoria=$row["id_categoria"];
      					$category=$row{"nombre"};}

      				} 
 			$pro->insertar($product,$price,$description,$code,$photo,$id_categoria);


 			echo '
   <script type="text/javascript">alert("producto agregado");</script>';
			header('Location:crear_productos.php');
 		}
 		else {
		echo '<script type="text/javascript">alert("Complete el formulario");</script>';
		header('Location:crear_productos.php');
			}
  ?>

