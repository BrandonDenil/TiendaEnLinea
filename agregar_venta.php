  <?php
 require 'encabezado_cliente.php'; 
      
?>

      <?php
      // $_SESSION["id_usuario"]=$row["id"];
        session_start();
        if(isset( $_SESSION["sesion"]))
        { 
          if ( $_SESSION["sesion"]==1) {
             
          }
           else if ($_SESSION["sesion"]==0)
         {
          echo'<script type="text/javascript">
    alert("Debe iniciar sesion para hacer una compra");
    window.location.href="inicio_sesion.php";
    </script>';
       //    header('Location:inicio_sesion.php');
         die();
         }
         
        }
        else 
         {
          echo'<script type="text/javascript">
    alert("Debe iniciar sesion para hacer una compra");
    window.location.href="inicio_sesion.php";
    </script>';
         // header('Location:inicio_sesion.php');
         die();
         }  
        ?>

<?php 
//importa las clases necesarias 
require 'negocios/venta_negocio.php';
require 'negocios/detalle_negocio.php';
require 'negocios/existencia_productos_negocio.php';
$total_actual;
 $cont=0;
$detalle= new Detalle();
$ven=new Venta();
$exi= new Existencia();
$fecha=strftime( "%Y-%m-%d-%H-%M-%S", time() );
$ven->insertar($fecha,0,$_SESSION["id_usuario"]);
$id_ultima_venta=$ven->obtener_ultimo();
while ($row=mysqli_fetch_array($id_ultima_venta)){
$ultima_venta=$row["id_venta"];
}


   //recorre la lista de productos puestos en la carreta  
  foreach ( $_SESSION["lista"] as  $value) {
    $id=$value;
    $cantidad=$_POST[$cont];
    $cont++; 
    $list=$exi->listar_por_id($id);
        while ($row=mysqli_fetch_array($list))
      {      
      $total_actual=$ven->obtener_total($ultima_venta);
      while ($row2=mysqli_fetch_array($total_actual))
      { $total=$row2  ["total"];}
     // echo'producto:'. $row['nombre_producto'].'<br>';
     // echo 'cantidad:'.$cantidad.'<br>';
     // echo 'precio:'.$row['precio'].'<br>';
     // echo 'subtotal:'.($row['precio']*$cantidad).'<br> <br>'; 


      $detalle->insertar($cantidad,$row['precio'],$ultima_venta,$id);

      $ven->update(($row['precio']*$cantidad+$total),$ultima_venta);
      $exi->update_por_id($row["cantidad"]-$cantidad,$id);
      
      }

    }
    $total_actual=$ven->obtener_total($ultima_venta);
      while ($row2=mysqli_fetch_array($total_actual))
      { $total=$row2  ["total"];}   
     //echo '<br>compra realizada total :'.$total; 
      //echo '<br>id de factura:'.$ultima_venta.'<br>'; 

    


   
?>

<div class="row">
  <div class="col m2"></div>
  <div class="col m8"><div class="col s12 m7">
    <h2 class="header">Compra realizada</h2>
    <div class="card horizontal">
      <div class="card-image">
          <i class="large material-icons">check</i>
            
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Gracias por su preferencia</p>
        </div>
        <div class="card-action">
          <a href="index.php">Regresar</a>
        </div>
      </div>
    </div>
  </div>"></div></div>
  <div class="col m2  "></div>
</div>