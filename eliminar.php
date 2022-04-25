<?php

include_once("conexion.php");
if($_POST["action"]=="eliminar" && trim($_POST['id'])!=""){
    
    
    try{
    $id=$_POST['id'];
    $con="DELETE FROM tareas WHERE id=?";
    $gsent=$pdo->prepare($con);
    $gsent->execute(array($id));
    $con=null;
    $gsent=null;
    echo 'Eliminado';
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}