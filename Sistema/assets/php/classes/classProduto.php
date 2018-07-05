<?php

require_once "database.php";

class classProduto{
	private $id;
	private $nome;
	private $descricao;
	private $quantidade;
	private $preco;


	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}

	function setId($value){
		$this->id = $value;
	}

	function setNome($value){
		$this->nome = $value;
	}

	function setDescricao($value){
		$this->descricao = $value;
	}

	function setQuantidade($value){
		$this->quantidade = $value;
	}

	function setPreco($value){
		$this->preco = $value;
	}


	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `produtos`(`nome`, `descricao`, `quantidade`, `preco`)VALUES (:nome, :descricao, :quantidade, :preco)");
			$stmt->bindParam(":nome", $this->nome);
			$stmt->bindParam(":descricao", $this->descricao);
			$stmt->bindParam(":quantidade", $this->quantidade);
			$stmt->bindParam(":preco", $this->preco);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

			public function delete(){
		try{
			$stmt = $this->conn->prepare("DELETE FROM `produtos` WHERE `id` = :id");
			$stmt->bindParam(":id", $this->id);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

		public function edit(){
		try{
			$stmt = $this->conn->prepare("UPDATE `produtos` SET `nome` = :nome, `descricao` = :descricao, `quantidade` = :quantidade, `preco` = :preco WHERE `id` = :id");
			$stmt->bindParam(":nome", $this->nome);
			$stmt->bindParam(":descricao", $this->descricao);
			$stmt->bindParam(":quantidade", $this->quantidade);
			$stmt->bindParam(":preco", $this->preco);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

		public function index(){
		$stmt = $this->conn->prepare("SELECT * FROM `produtos` WHERE 1 ORDER BY `nome`");
		$stmt->execute();
		return $stmt;
	}

}
?>
