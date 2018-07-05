<?php

require_once "database.php";

class classEstoques{
	private $id;
	private $quantidade;
	private $produtos_id;


	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}

	function setId($value){
		$this->id = $value;
	}
	function setQuantidade($value){
		$this->quantidade = $value;
	}

	function setProdutos_id($value){
		$this->produtos_id = $value;
	}


	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `estoque` (`quantidade`, `produtos_id`)VALUES (:quantidade, :produtos_id)");
			$stmt->bindParam(":quantidade", $this->quantidade);
			$stmt->bindParam(":produtos_id", $this->produtos_id);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

		public function delete(){
		try{
			$stmt = $this->conn->prepare("DELETE FROM `estoque` WHERE `id` = :id");
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
			$stmt = $this->conn->prepare("UPDATE `estoque` SET `quantidade` = :quantidade, `produtos_id` = :produtos_id WHERE `id` = :id");
			$stmt->bindParam(":id", $this->id);
			$stmt->bindParam(":quantidade", $this->quantidade);
			$stmt->bindParam(":produtos_id", $this->produtos_id);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

	public function view(){
		$stmt = $this->conn->prepare("SELECT * FROM `estoque` WHERE `id` = :id");
		$stmt->bindParam(":id", $this->id);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_OBJ);
		return $row;
	}

		public function index(){
		$stmt = $this->conn->prepare("SELECT * FROM `estoque` WHERE 1 ORDER BY `id`");
		$stmt->execute();
		return $stmt;
	}


		public function nomeprocedimentos($id){
		$stmt = $this->conn->prepare("SELECT * FROM `procedures` WHERE `id`= '$id' ");
		$stmt->bindParam(":id", $this->id);
		$stmt->execute();
		return $stmt;
	}
	
}
	
/*	public function editpreco(){
		try{
			$stmt = $this->conn->prepare("UPDATE `procedures` SET `price` = :price, `id` = :id");
			$stmt->bindParam(":id", $this->id);
			$stmt->bindParam(":price", $this->price);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}}*/

	

?>
