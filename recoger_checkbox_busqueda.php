<?php require 'encabezado_cliente.php'; 

?>


<div class="row " >
  <div class="col s3 m2">
    <ul class="nav_izquierdo card" style="">
    <form method="post" action="recoger_checkbox_busqueda.php">
      <h4 id="etiqueta_categoria" name="etiqueta_categoria">Categorias</h4>
  <?php 
      require_once 'negocios/categoria_negocio.php';
      $ca = new Categorias();
      $list= $ca->listar();
       while ($row=mysqli_fetch_array($list))
      {
        echo '<p>
      <label>
        <input type="checkbox" name="numero[]" value="'.$row["nombre"].'" />
        <span>'.$row["nombre"].'</span>
      </label>
    </p>';

      }
   ?>
    <button class="btn waves-effect waves-light  btn-small" type="submit" name="action">Buscar
    <i class="material-icons right">search</i>
  </button>

  </form>
   <a class="btn-floating btn-large waves-effect waves-light " style="margin-top: 1em;" href="carrito_compras.php"><i class="material-icons" href="carrito_compras.php">shopping_cart</i></a>
   </ul>
   </div>
    <div class="col s9  m10 cuerpo">
       <h1>Catalogo</h1>
        
      <?php
      try
      {
        require_once 'negocios/producto_negocio.php';
      $numero=$_POST["numero"];
      $product= new productos();
      $list=$product->listar_productos_existencia($numero); 
        while ($row=mysqli_fetch_array($list))
      { 
    echo '<form method="post" action="lista_carrito.php">';
    echo '<div class="col s6 m3"> ';
    echo '<div class="card">'  ;
    echo ' <div class="card-image">' ;  
    echo ' <img src="'.$row['foto'].'" class="products">' ;
         
    echo '<button class="btn waves-effect waves-light  btn-small" type="submit" name="action">Agregar
    <i class="material-icons right">shopping_cart</i>
    </button>';      
    echo '   </div>' ;
    echo ' <div class="card-content">'   ;
     echo ' <span class="card-title"> '.$row['nombre_producto'].'</span>';
     echo '<input  name="producto" type="hidden" value="'.$row['nombre_producto'].'">';
    echo ' <p> Precio: Q'.$row['precio'] .'</p>';
    echo '<input  name="precio" type="hidden" value="'.$row['precio'].'">';
    echo ' <p> Tienda: '.$row['nombre_sucursal'] .'</p>';
     echo '<input  name="id_sucursal" type="hidden" value="'.$row['id_sucursal'].'">';
    echo '<p> cantidad existente: '. $row['cantidad'].'</p>'; 
     echo '<input  name="cantidad" type="hidden" value="'.$row['cantidad'].'">';
     echo '<input  name="exis" type="hidden" value="'.$row['id_existencia'].'">';  
    echo ' </div>';   
    echo '</div>'  ;
    echo '</div>';
    echo '</form>';
    }
      }
    catch (Exception $e) {
    echo 'Excepción capturada';
}     
    ?>

    </div>
</div>