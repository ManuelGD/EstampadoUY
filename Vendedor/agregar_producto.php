<?php
require("../Conexion/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Agregar Producto</h1>
  <form action="cargar_producto.php" method="post">
  
    <input type="text" id="nombre_producto" name="nombre_producto" placeholder="Nombre" required>

    <input type="number" id="precio_producto" name="precio_producto" step="0.01" placeholder="Precio" required>

    <label for="imagen_producto">Imagen</label>
    <input type="file" id="imagen_producto" name="imagen_producto" accept="image/*">

    <input type="submit" value="Agregar producto">
  </form>
  <button><a href="pag_vendedor.php">Volver Atras</button>
</body>
</html>