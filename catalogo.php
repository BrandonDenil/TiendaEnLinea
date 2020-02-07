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
      
    ?>
</div>

    </div>



<?php require_once 'footer_cliente.php' ?>

