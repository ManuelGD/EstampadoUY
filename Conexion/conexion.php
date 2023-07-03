<?php
try{
    $conexion = new PDO("mysql:host=localhost;dbname=prueba","root",'');
}catch(PDOException $e){
    echo "La conexión ha fallado: " . $e->getMessage();
}