<?php
include __DIR__.'/../control/JogoControl.php';
$jogoControl = new JogoControl();
header('Content-type: application/json');
if ($jogoControl->findAll()) {
	http_response_code(200);
	echo json_encode($jogoControl->findAll());
}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Não encontrado"));
}
?>