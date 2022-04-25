<?php
 include_once("conexion.php");
 if($_POST["accion"]=="agregar"){
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    try{
    if(trim($nombre)!="" && trim($descripcion)!=""){
        $con="INSERT INTO tareas (nombre,descripcion) values(?,?)";
        $gset=$pdo->prepare($con);
        $gset->execute(array($nombre,$descripcion));
        $gset=null;
        $pdo=null;
        
        echo "1";

    }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
 }