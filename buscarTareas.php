<?php
include_once("conexion.php");

if($_POST["action"]=="buscar"){
    $buscar=$_POST["buscar"];
    $buscar=trim($buscar);
    $con="SELECT * FROM tareas WHERE
          nombre LIKE ? OR
          descripcion LIKE ?
          ";
    $gsent=$pdo->prepare($con);
    $gsent->execute(array("%".$buscar."%","%".$buscar."%"));
    $resultado=$gsent->fetchAll();
    if(count($resultado)>0 && $buscar!=""){
        $acu="";
        $vector=[];
        foreach($resultado as $r){
             /*$acu='<tr>'.
                    '<td>'.$r["id"].'</td>'.
                    '<td>'.$r["nombre"].'</td>'.
                    '<td>'.$r["descripcion"].'</td>'
                    .'</tr>'
             ;*/
             $acu='<li>'.$r['id'].' '.$r['nombre'].' '.$r['descripcion'].'</li>';
              $vector[]=$acu;
        }
        //print_r($vector);
         //echo $acu;
        echo json_encode($vector,JSON_UNESCAPED_UNICODE);
         
        //echo json_encode($acu,JSON_UNESCAPED_UNICODE);
    }else{
        echo 'No hay datos';
    }
}

?>