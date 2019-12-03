<?php
include __DIR__.'/../control/DataControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;
$id = $obj->id;
if(!empty($data)){	
 $dataControl = new DataControl();
 $dataControl->delete($obj,$id);
 header('Location:listar.php');
}
?>