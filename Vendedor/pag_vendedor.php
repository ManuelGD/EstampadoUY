<?php 
session_start();
if($_SESSION['rol']!="vendedor"){
   header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilos.css">
    <title>Pagina Vendedor</title>
</head>
<body>
    <h1>Pagina Vendedor</h1>
    <button><a href="agregar_producto.php">Agregar Producto</a></button> 
    <button><a href="mostrar_productos.php">Mostrar Productos</a></button>
    <button><a href="../deslog.php">Desloguearse</a></button>
</body>
</html>