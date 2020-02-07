<?php require 'encabezado_cliente.php'; 
      
?>


<div class="row card-content">
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

      </ul>
    </div>
    <div class="col s9  m10 cuerpo"  >
      <h1>Nuestras tiendas</h1>
      <?php
      require_once 'negocios/tienda_negocio.php';
      $sucursales= new tiendas();
      $lista=$sucursales->listar(); 

      while ($row=mysqli_fetch_array($lista))
      { 

    echo  '<div class="col s6 m3">';
    echo '<div class="card">'  ;
    echo ' <div class="card-image">' ;  
    echo ' <img src="imagenes/apple.jfif" class="products">' ;
         
    //echo '<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">shopping_cart</i></a>';      
    echo '   </div>' ;
    echo ' <div class="card-content">'   ;
    echo ' <span class="card-title"> '.$row['nombre'].'</span>';
    echo ' <p> Ubicacion : '.    $row['ubicacion'] .'</p>';  
    echo ' </div>';   
    echo '</div>'  ;
    echo '</div>';
    }
    ?>

    </div>
</div>


<?php require_once 'footer_cliente.php' ?>