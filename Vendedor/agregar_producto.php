<?php
session_start();
if ($_SESSION['idRol'] != '2') {
  header("Location:../index.php");
}
require("../Conexion/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Agregar Producto</title>
</head>
<body class="bodymenus">
  <?php 
    include("../menu_vendedor.html"); 
  ?>
  <form class="form_agregar_producto" action="cargar_producto.php" method="post">
  <h1>Agregar Producto</h1>
    <label for="imagen_producto"><i class="fa-solid fa-image"></i> Imagen</label>
    <input type="file" name="imagen_producto" accept="image/*" required>
    <input type="text" name="nombre_producto" placeholder="Nombre" required>
    <input type="number" name="precio_producto" step="0.01" placeholder="Precio" required>
    
    <input class="sbmt_form_ap" type="submit" value="Agregar producto">
  </form>
  <?php
    include("../footer.html");
  ?>
</body>
</html>