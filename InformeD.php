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
        Cliente
      </td>
      <td>
        Compras
      </td>
          </thead>
          <tbody>
             <?php
            require_once 'negocios/reportes_negocio.php';
            $reportes= new Reportes();
            $lista=$reportes->clientes_compras();
            while ($row=mysqli_fetch_array($lista))
              {
                
                  echo '<tr>
                    <td>'.$row["nombre"].'</td>
                    <td>'.$row["compras"].'</td>
                  </tr>';
              } 
            ?>
          </tbody>
  </table>
</div>
