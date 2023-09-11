<?php
require('../fpdf/fpdf.php');
require ('../Conexion/conexion.php');

$res= $conexion->query('SELECT * FROM producto');
$reg= $res->fetchall(PDO::FETCH_ASSOC);

$fpdf= new FPDF();

$fpdf->addpage();
$fpdf->setFont('Arial','',);
foreach($reg as $rg){
$prod = null;
$prod .= "ID: ".$rg['idProducto'];
$prod .= " - Nombre: ".$rg['nombre_producto'];
$prod .= " - Precio: $".$rg['precio_producto'];

$fpdf->Ln();

$fpdf->Cell(40,10,$prod);
}
$fpdf->Output();
?>