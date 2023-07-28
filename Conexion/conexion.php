<?php
try{
    $conexion = new PDO("mysql:host=localhost;dbname=estampadouydb","root",'');
}catch(PDOException $e){
    echo "La conexión ha fallado: " . $e->getMessage();
}