<?php
    require("../Conexion/conexion.php");
    $id = $_GET['id'];
    $res = $conexion->prepare("SELECT * FROM productos WHERE id_producto=?");
    $res->execute([$id]);
    $reg = $res->fetch();
    echo "<link rel='stylesheet' href='../Style/estilos.css'>";
    echo "<h1>Modificar Producto</h1>";
    echo "<form action='modificar_p.php' method='post'>
            <input type='hidden' name='id_producto' value=$reg[id_producto]>
            <input type='text' name='nombre_producto' value=$reg[nombre_producto]>
            <input type='number' name='precio_producto' step='0.01' value=$reg[precio_producto]>
            <img src=../imagenes/$reg[imagen_producto] width=90px>
            <input type='file' name='imagen_producto' value=$reg[imagen_producto]>
            <input type='submit' value='MODIFICAR'>
          </form>
          <button><a href=mostrar_productos.php>Volver Atras</button>";
?>