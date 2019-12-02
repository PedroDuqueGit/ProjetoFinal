<?php
include __DIR__.'/../model/Data.php';
class DataControl{
	function insert($obj){
		$data = new Data();
		return $data->insert($obj);		
	}
	function update($obj,$id){
		$data = new Data();
		return $data->update($obj,$id);
	}
	function delete($obj,$id){
		$data = new Data();
		return $data->delete($obj,$id);
	}
	function find($id = null){
		$data = new Data();
		return $data->find($id);
	}
	function findAll(){
		$data = new Data();
		return $data->findAll();
	}
}
?>