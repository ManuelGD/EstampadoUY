<?php
    require("../Conexion/conexion.php");
    $id = $_GET['id'];
    $res = $conexion->prepare("SELECT * FROM usuarios WHERE id_usuario=?");
    $res->execute([$id]);
    $reg = $res->fetch();
    echo "<link rel='stylesheet' href='../Style/estilos.css'>";
    echo "<h1>Modificar Producto</h1>";
    echo "<form action='modificar_u.php' method='post'>
            <input type='hidden' name='id_usuario' value=$reg[id_usuario] required>
            <input type='email' name='email_usuario' value=$reg[email_usuario] required>
            <input type='text' name='nombre_usuario' value=$reg[nombre_usuario] required>
            <input type='password' name='clave_usuario' value=$reg[clave_usuario] required>
            <select name=rol_usuario value=$reg[rol_usuario] required>
                <option value='' disabled>Elegir Rol</option>
                <option value=admin>admin</option>
                <option value=vendedor>vendedor</option>
            </select>
            <input type='submit' value='MODIFICAR'>
          </form>
          <button><a href=mostrar_usuarios.php>Volver Atras</button>";
?>