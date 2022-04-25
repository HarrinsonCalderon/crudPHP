<?php

$host="mysql:host=localhost;dbname=tareas";
$user="root";
$pass="";

try{
 $pdo=new PDO($host,$user,$pass);
 //echo 'conectado';
}catch(PDOException $e){
 //echo $e->getMessage();
 die();
}