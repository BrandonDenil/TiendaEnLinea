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
        ventas
      </td>
      <td>
        tienda
      </td>
          </thead>
          <tbody>
             <?php
            require_once 'negocios/reportes_negocio.php';
            $reportes= new Reportes();
            $lista=$reportes->top_100_productos_mas_vendidos();
            while ($row=mysqli_fetch_array($lista))
              {
                
                  echo '<tr>
                    <td>'.$row["productos"].'</td>

                    <td>'.$row["ventas"].'</td>
                    <td>'.$row["tienda"].'</td>
                  </tr>';
              } 
            ?>
          </tbody>
  </table>
</div>
