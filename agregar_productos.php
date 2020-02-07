<?php
  require 'encabezado_administrador.php';
  session_start();
      
        if(isset( $_SESSION["sesion_sistema"] , $_SESSION["rol"] ))
        { 
          if ( $_SESSION["sesion_sistema"]==1 and $_SESSION["rol"]=="administrador") {
             
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

 <div class="row cuerpo">
    <form  class="col s12" method="post" action="agregar_productos_val.php" >
      <div class="input-field col s4 m4 ">
        <select class=" "  name="producto" id="producto">
          <option value="" disabled selected>Selecciona un producto</option>
          <?php
            require_once 'negocios/producto_negocio.php';
            $pro= new productos();
            $lista=$pro->listar_todo();
            while ($row=mysqli_fetch_array($lista))
              {
                echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
              } 
            ?>
          
        </select>
        <label>Producto</label>

    </div>

      <div class="input-field col s4 m4 ">
        <select class="orange"  name="sucursal" id="sucursal">
          <option value="" disabled selected>Selecciona una sucursal</option>
          <?php
            require_once 'negocios/sucursal_negocio.php';
            $suc= new Sucursal();
            $lista=$suc->listar();
            while ($row=mysqli_fetch_array($lista))
              {
                echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
              } 
            ?>
          
        </select>
        <label>sucursal</label>

    </div>

      <div class="input-field col s4 m4">
          <input  id="cantidad" name="cantidad" type="number" class="validate">
          <label for="card_no">Cantidad</label>
        </div> 
               <button class="btn waves-effect waves-light " type="submit" name="action">Agregar
       
      </button> 
      <br>
       <a href="inicio_administrador.php" class="">regresar</a>
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