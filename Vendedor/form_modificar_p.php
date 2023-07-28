<?php
require("../Conexion/conexion.php");

$res = $conexion->prepare("SELECT * FROM producto WHERE idProducto=?");
$res->execute([$idProducto]);
$reg = $res->fetch();
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
?>
<form class="form_agregar_producto" action='modificar_p.php' method='post'>
  <input type='hidden' name='idProducto' value=<?php $reg['idProducto']?>>
  <input type='text' name='nombre_producto' value=<?php $reg['nombre_producto']?>>
  <input type='number' name='precio_producto' step='0.01' value=<?php $reg['precio_producto'] ?>>
  <img src=../imagenes/<?php $reg['imagen_producto'] ?> width=90px>
  <input type='file' name='imagen_producto' value=<?php $reg['imagen_producto']?>>
  <input type='submit' value='Modificar'>
</form>
<?php
include("../footer.html");
?>
</body>
</html>

