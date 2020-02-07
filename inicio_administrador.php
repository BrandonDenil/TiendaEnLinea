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

  <div class="row ">
  	<div class="col s1 m1 "></div>     
  <div class="card col s10 m4 " style="margin-top: 10em;">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="imagenes/agregar_producto.png" style="width: 7em;height: 7em;">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Agregar Producto</span>
      <p><a href="agregar_productos.php">Agregar</a></p>
    </div>
  </div>
   <div class="col s1 m1 "></div>     
  <div class="card col s10 m4 " style="margin-top: 10em;" >
    <div class="card-image waves-effect waves-block waves-light">
      <img class="" src="imagenes/crear_producto.svg"  style="width: 7em;height: 7em;">
    </div>
    <div class="card-content">
      <span class="card-title  grey-text text-darken-4">Crear Producto</span>
      <p><a href="crear_productos.php">Crear</a></p>
    </div>

  </div>
 
  	<div class="col s1 m1"></div>
</div>