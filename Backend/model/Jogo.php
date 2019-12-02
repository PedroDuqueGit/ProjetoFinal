<?php
include __DIR__.'/Conexao.php';
class Jogo extends Conexao {
	private $nome;
	private $genero;   
	private $id; 
  
    public function getNome() {
        return $this->nome;
    }
   
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    
    public function getGenero() {
        return $this->genero;
    }
   
    public function setGenero($genero) {
        $this->genero = $genero;
        return $this;
	}

	public function getId() {
        return $this->id;
    }
   
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    
    
    public function insert($obj){    
    	$sql = "INSERT INTO jogos(nome,genero) VALUES (:nome,:genero)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('genero' , $obj->genero);
        $consulta->bindValue('id',  $obj->id);
    	return $consulta->execute();
	}
	public function update($obj,$id = null){
		$sql = "UPDATE jogos SET nome = :nome, genero = :genero, jogo_id = :jogo_id WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome', $obj->nome);
		$consulta->bindValue('genero' , $obj->genero);		
        $consulta->bindValue('id' , $obj->id);
		return $consulta->execute();
	}
	public function delete($obj,$id = null){
		$sql =  "DELETE FROM jogos WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}
	public function find($id = null){
        $sql =  "SELECT * FROM jogos WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}
	public function findAll(){
		$sql = "SELECT * FROM jogos";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}
?>