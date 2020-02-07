<?php
require 'encabezado_cliente.php'; 
  session_start();
      
        if(isset( $_SESSION["sesion"] , $_SESSION["rol"] ))
        { 
          if ( $_SESSION["sesion"]==1 ) {
             
          }
           else 
         {

          die();
         }
         
        }
        else 
         {  
         die();
         }  
  ?>

  <div class="row " style="margin-top: 4em; margin-left: 2em;">
      <a href="inicio_administrador.php" class="black-text">regresar</a> 
    <h3 class="">Creacion de productos</h3> 

    <form class="col s12" method="post" action="crear_productos_val.php">
      <div class="row">
        <div class="input-field col s6 m6">
          <input  id="producto" name="producto" type="text" class="validate">
          <label for="producto">Producto</label>
        </div>
        <div class="input-field col s3 m3">
          <input id="precio" name="precio" type="number" class="validate">
          <label for="precio">precio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6">
          <input  id="descripcion" name="descripcion" type="text" class="validate">
          <label for="descripcion">descripcion</label>
        </div>
         <div class="input-field col s3 m3">
          <input id="codigo" name="codigo" type="text" class="validate">
          <label for="codigo">codigo</label>
        </div>
      </div>
        <div class="row">
       
        <div class="input-field col s6 m6" >
          <input id="foto" name="foto" type="text" class="validate" name="direccion">
          <label for="foto">foto</label>
         </div>
        <div class="input-field col s6 m6 ">
        <select class=""  name="categoria" id="categoria">
          <option value="" disabled selected>Selecciona una categoria</option>
          <?php
            require_once 'negocios/categoria_negocio.php';
            $cat= new Categorias();
            $lista=$cat->listar();
            while ($row=mysqli_fetch_array($lista))
              {
                echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
              } 
            ?>
          
        </select>
        <label>Categoria</label>

    </div>
       

      </div>
       <div class="row">
          
      
       <button class="btn waves-effect waves-light " type="submit" name="action">Registrar
       
      </button>
      <br>
       
    </div>
</form>

    </div>

<script type="text/javascript">
  
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
</script>