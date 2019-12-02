  
<?php
include __DIR__.'/Conexao.php';
class Data extends Conexao {
	private $dia;
    private $descricao;
    private $horario;
    private $id;

    function getDia() {
        return $this->dia;
    }
    function getDescricao() {
        return $this->descricao;
    }
    function getHorario() {
        return $this->horario;
    }
    function getId() {
        return $this->id;
    }    
    function setDia($dia) {
        $this->dia = $dia;
    }
    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    function setHorario($horario) {
        $this->horario = $horario;
    }
    function setId($id) {
        $this->id = $id;
    }
    
    public function insert($obj){
    	$sql = "INSERT INTO datas(dia,descricao,horario) VALUES (:dia,:descricao,:horario)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('dia',  $obj->dia);
        $consulta->bindValue('descricao', $obj->descricao);
        $consulta->bindValue('horario' , $obj->horario);        
        return $consulta->execute();
	}
	public function update($obj,$id = null){
		$sql = "UPDATE datas SET dia = :dia, descricao = :descricao,horario = :horario, id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('titulo', $obj->titulo);
		$consulta->bindValue('descricao', $obj->descricao);
		$consulta->bindValue('horario' , $obj->horario);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}
	public function delete($obj,$id = null){
		$sql =  "DELETE FROM datas WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}
	public function find($id = null){
        $sql =  "SELECT * FROM datas WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}
	public function findAll(){
		$sql = "SELECT * FROM datas";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}
?>