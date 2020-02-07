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

<div class="row cuerpo">
  <table>
    <thead>
      <td>
        productos
      </td>
      <td>
        Cantidad
      </td>
      <td>
        Tienda
      </td>

          </thead>
          <tbody>
             <?php
            require_once 'negocios/reportes_negocio.php';
            $reportes= new Reportes();
            $lista=$reportes->top_20_productos_menos_existencia(1);
            while ($row=mysqli_fetch_array($lista))
              {
                
                  echo '<tr>
                    <td>'.$row["productos"].'</td>
                    <td>'.$row["cantidad"].'</td>
                    <td>'.$row["tienda"].'</td>
                  </tr>';
              } 
            ?>
          </tbody>
  </table>
</div>
