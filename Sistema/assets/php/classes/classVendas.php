<?php

require_once "database.php";

class classVendas{
	private $id;
	private $quantidade;
	private $data;
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

	function setData($value){
		$this->data = $value;
	}

	function setProdutos_id($value){
		$this->produtos_id = $value;
	}

	

	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `vendas`(`quantidade`, `data`, `produtos_id`) VALUES (:quantidade, :data, :produtos_id);");
			$stmt->bindParam(":quantidade", $this->quantidade);
			$stmt->bindParam(":data", $this->data);
			$stmt->bindParam(":produtos_id", $this->produtos_id);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}


		public function edit(){
		try{
			$stmt = $this->conn->prepare("UPDATE `vendas` SET `quantidade` = :quantidade, `data` = :data, `produtos_id` = :produtos_id");
			$stmt->bindParam(":quantidade", $this->quantidade);
			$stmt->bindParam(":data", $this->data);
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
			$stmt = $this->conn->prepare("DELETE FROM `vendas` WHERE `id` = :id");
			$stmt->bindParam(":id", $this->id);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

	public function view(){
		$stmt = $this->conn->prepare("SELECT * FROM `vendas` WHERE `id` = :id");
		$stmt->bindParam(":id", $this->id);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_OBJ);
		return $row;
	}

		public function index(){
		$stmt = $this->conn->prepare("SELECT * FROM `vendas` WHERE 1 ORDER BY `quantidade`");
		$stmt->execute();
		return $stmt;
	}

	

}	

?>
