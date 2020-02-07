<?php
 require 'encabezado_cliente.php'; 
      
?>
<div class="row " style="margin-top: 7em !important;">
<h3>Productos en la carreta</h3>

<form  method="post" action="reiniciar_carro.php" >
   <button class="btn waves-effect waves-light" type="submit" name="action">reinicar carro
    <i class="material-icons right">loop</i>
  </button>
</form>
<form method="post" action="agregar_venta.php" name="tuformulario">
<div class=" col m10 s10 ">
<table id="tablelera" class="stripped">
	  <thead>
          <tr>
              <th>Producto</th>
              <th>Precio</th>
              <th>Sucursal</th>
               <th>Cantidad</th>
          </tr>
        </thead>
        <tbody> 

<?php 
require 'negocios/existencia_productos_negocio.php'; 
$exi= new Existencia();
      $list=$exi->listar(); 
      if(!isset($_SESSION["lista"])){session_start();}
      $contador=0;
  foreach ( $_SESSION["lista"] as  $value) {
  	$id=$value;
  	$list=$exi->listar_por_id($id);
  	echo '<tr>';
      	while ($row=mysqli_fetch_array($list))
      {  
      	echo '<td>'.$row["nombre_producto"].'</td>';
      	echo '<td>'.$row["precio"].'</td>';
      	echo '<td>'.$row["nombre_sucursal"].'</td>';
        echo '<td>'.'<input type="number" name="'.$contador.  '" step="1" value="1" style="width:4em">'.'</td>';
         $contador++;

      }
     echo '</tr>';
    }    
?>
</tbody>
</table>

	 <button class="btn waves-effect waves-light" onclick="pregunta()" name="action">Comprar
    <i class="material-icons right">monetization_on</i>
  </button>
 
</form >

</div>
</div>
<form method="post" action="cotizacion.php" style="display:none;">
  <input type="text" name="json" value="" id="json">
  <button type="submit" id="presionar" name="presionar"></button>
</form>
<button onclick="Cotizar()" class="btn waves-effect waves-light">Descarga cotización
    <i class="material-icons right">archive</i>
</button>
<script language="JavaScript">


function Cotizar(){
  var Listado = [];
  $('#tablelera > tbody  > tr > td > input').each(function() {
    Listado.push({
      Nombre: $(this)[0].name,
      Cantidad: $(this)[0].value
    });
  });
  console.log(JSON.stringify(Listado));
 document.querySelector("#json").value=JSON.stringify(Listado);
 document.querySelector("#presionar").click();
}
</script>

