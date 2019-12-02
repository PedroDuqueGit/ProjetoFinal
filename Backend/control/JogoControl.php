<?php
include __DIR__.'/../model/Jogo.php';
class JogoControl{
	function insert($obj){
		$jogo = new Jogo();
		return $jogo->insert($obj);
	}
	function update($obj,$id){
		$jogo = new Jogo();
		return $jogo->update($obj,$id);
	}
	function delete($obj,$id){
		$jogo = new Jogo();
		return $jogo->delete($obj,$id);
	}
	function find($id = null){
		$jogo = new Jogo();
		return $jogo->find($id);
	}
	function findAll(){
		$jogo = new Jogo();
		return $jogo->findAll();
	}
}
?>