<?php
require("../Conexion/conexion.php");
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../iconos/css/all.min.css">
    <link rel="stylesheet" href="../Style/estilos.css">
  <title>Promocionar Producto</title>
</head>
<body class="bodymenus">
<?php
include("../menu_vendedor.html");
$idProducto = $_GET['idProducto'];
$res = $conexion->prepare("SELECT precio_producto FROM producto WHERE idProducto=?");
$res->execute([$idProducto]);
$reg = $res->fetch();
?>
<form class="forms_vendedor" action='promocionar_p.php' method='post'>
  <h1>Promocionar Producto</h1>
  <h2>Precio de Promoción:</h2>
  <input type='hidden' name='idProducto' value="<?php echo $idProducto?>">
  <input type='number' name='precio_promo' step='0.01' min='0.01' max ='<?php echo $reg['precio_producto'] - 0.01?>' value="<?php echo $reg['precio_producto']?>" required>
  <h2>Fecha de Inicio:</h2>
  <input type="date" name='fecha_inicio' required>
  <h2>Fecha de Fin:</h2>
  <input type="date" name='fecha_fin' required>
  <input type='submit' class="sbmt_form_au" value='Promocionar'>
</form>
<?php
include("../footer.html");
?>
</body>
</html>

