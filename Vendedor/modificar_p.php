<?php
    require("../Conexion/conexion.php");
    $id_producto = $_POST['id_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $precio_producto = $_POST['precio_producto'];
    if(!empty($_POST['imagen_producto'])){
        $imagen_producto = $_POST['imagen_producto'];
    }else{
        $default = "default.png";
        $imagen_producto = $default;
    }
    
    $res = $conexion->prepare("UPDATE productos SET nombre_producto=?, precio_producto=?, imagen_producto=? WHERE id_producto=?");
    $res->execute([$nombre_producto,$precio_producto,$imagen_producto,$id_producto]);

    echo "<link rel=stylesheet href=../Style/estilos.css>";
    echo "<h1>Producto Modificado</h1>";
    echo "<br>";

    $producto_modificado = $conexion->query("SELECT * FROM productos WHERE id_producto=$id_producto");
    
    while($reg_producto_modificado = $producto_modificado->fetch()){
        echo "<img src=../imagenes/$reg_producto_modificado[imagen_producto] width=90px>$reg_producto_modificado[id_producto] - $reg_producto_modificado[nombre_producto] - $reg_producto_modificado[precio_producto] USD<br>";
    }
    
    echo "<button><a href=pag_vendedor.php>Volver Atras</button>";
?>