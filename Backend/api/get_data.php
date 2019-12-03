<?php
include __DIR__.'/../control/DataControl.php';
$dataControl = new DataControl();
header('Content-Type: application/json');
echo json_encode($dataControl->findAll());
// foreach($dataControl->findAll() as $valor){
// 	echo json_encode($valor);
// }
?>