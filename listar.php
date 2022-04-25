<?php
include_once("conexion.php");

$con="SELECT * FROM tareas";
$gsent=$pdo->prepare($con);
$gsent->execute();
$vector=$gsent->fetchAll();

 if(count($vector)>0){
     
     $ve=[];
            foreach ($vector as $re){
               $ve[]=array(
                'id'=>$re['id'],
                'nombre'=>$re['nombre'],
                'descripcion'=>$re['descripcion']
               );
            }
    echo json_encode($ve,JSON_UNESCAPED_UNICODE);
    
 }else{
     echo "2";
 }
