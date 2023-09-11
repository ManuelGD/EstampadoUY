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
  <title>Modificar Producto</title>
</head>
<body class="bodymenus">
<?php
include("../menu_vendedor.html");
$idProducto = $_GET['idProducto'];
$res = $conexion->prepare("SELECT * FROM producto WHERE idProducto=?");
$res->execute([$idProducto]);
$reg = $res->fetch();
?>
<form class="forms_vendedor" action='modificar_p.php' method='post'>
  <h1>Modificar Producto</h1>
  <input type='hidden' name='idProducto' value=<?php echo $reg['idProducto']?>>
  <img src="../imagenes/<?php echo $reg['imagen_producto']?>" width=90px>
  <input type="file" name="imagen_producto" accept="image/*" value="<?php echo $reg['imagen_producto'] ?>" required>
  <input type='text' name='nombre_producto' value=<?php echo $reg[1]?> required>
  <input type='number' name='precio_producto' step='0.01' value=<?php echo $reg['precio_producto'] ?> required>
  <input type='submit' class="sbmt_form_au" value='Modificar'>
</form>
<?php
include("../footer.html");
?>
</body>
</html>

