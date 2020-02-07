
<?php
session_start();
require('fpdf/fpdf.php');
require 'negocios/existencia_productos_negocio.php'; 
$exi= new Existencia();
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,10,"producto",1);
$pdf-> Cell(25,10,"Precio",1);
$pdf-> Cell(50,10,"Tienda",1);	
$pdf-> Cell(25,10,"Cantidad",1);  
$pdf-> Cell(25,10,"Subtotal",1,1); 
//$pdf->ln(5);
$lista=json_decode($_POST["json"],true);
$total=0;
$cont=0;
foreach ($lista as  $value) {
 $array[]= $value["Cantidad"];

 $cont++;
}

      $list=$exi->listar(); 
      $contador=0;
  foreach ( $_SESSION["lista"] as  $value) {
  	$id=$value;
  	$list=$exi->listar_por_id($id);
      	while ($row=mysqli_fetch_array($list))
      {  
      	$pdf->Cell(50,10,$row["nombre_producto"],1,);
        $pdf-> Cell(25,10,$row["precio"],1,);
        $pdf-> Cell(50,10,$row["nombre_sucursal"],1);
        $pdf-> Cell(25,10,$array[$contador],1);
        $total=$total+$row["precio"]*$array[$contador];
        $pdf-> Cell(25,10,$row["precio"]*$array[$contador],1,1);
         $contador++;
      }
    }
    $pdf-> Cell(125,10,$row[""]);
    $pdf-> Cell(25,10,"Total",1);
     $pdf-> Cell(25,10,$total,1,1);
$pdf->Output();

?>

