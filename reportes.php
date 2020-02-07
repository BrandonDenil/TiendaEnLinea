<?php
	require 'encabezado_gerente.php';
	session_start();
      
        if(isset( $_SESSION["sesion_sistema"] , $_SESSION["rol"] ))
        { 
          if ( $_SESSION["sesion_sistema"]==1 and $_SESSION["rol"]=="gerente") {
             
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
  <div class="cuerpo ">
    

     <div class="row ">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Top 100 de productos más vendidos</span>
          <p>Por sucursal y general</p>
        </div>
        <div class="card-action">
          <a href="informeA.php">Generar</a>

        </div>
      </div>
    </div>
     <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Top 20 de los productos con existencia menor a 10 unidades</span>
       
        </div>
        <div class="card-action">
          <a href="informeB.php">Generar</a>

        </div>
      </div>
    </div>
  </div>

   <div class="row ">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Reporte de productos más vendidos por mes , por sucursal y en general</span> <p>Producto, Mes , Cantidad</p>
       
        </div>
        <div class="card-action">
          <a href="#">Generar</a>

        </div>
      </div>
    </div>
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Reporte de los clientes que compran seguido por sucursal y en general.</span> 
       
        </div>
        <div class="card-action">
          <a href="InformeD.php">Generar</a>

        </div>
      </div>
    </div>
  </div>
   <div class="row ">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Reporte de compras por rango de fecha.</span> 
        <form method="Post" action="InformeC.php">
          
          <input id="fini1" name="fini1" type="text" class="datepicker" >
          <label for="fini1" class="">Fecha Inicio</label>
           
           <input id="fini2" name="fini2" type="text" class="datepicker" >
          <label for="fini2" class="" >Fecha Final</label>
          <button class="btn" type=" Submit">Submit</button>
        </form>
        </div>
        
      </div>
    </div>
  </div>
      </div>        

<script type="text/javascript">
  var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems,{
      format:'yyyy-mm-dd'
    } );
</script>