<?php

require_once "database.php";

class classProcedures{
	private $id;
	private $name;
	private $price;
	private $user_id;


	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}

	function setId($value){
		$this->id = $value;
	}
	function setName($value){
		$this->name = $value;
	}

	function setPrice($value){
		$this->price = $value;
	}

	function setUser_id($value){
		$this->user_id = $value;
	}

	function setRemember_token($value){
		$this->remember_token = $value;
	}
	function setCreated_at($value){
		$this->created_at = $value;
	}

	function setUpdate_at($value){
		$this->update_at = $value;
	}

	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `procedures` (`name`, `price`, `user_id`)VALUES (:name, :price, :user_id)");
			$stmt->bindParam(":name", $this->name);
			$stmt->bindParam(":price", $this->price);
			$stmt->bindParam(":user_id", $this->user_id);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

		public function delete(){
		try{
			$stmt = $this->conn->prepare("DELETE FROM `procedures` WHERE `id` = :id");
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
			$stmt = $this->conn->prepare("UPDATE `procedures` SET `name` = :name, `price` = :price WHERE `id` = :id");
			$stmt->bindParam(":id", $this->id);
			$stmt->bindParam(":name", $this->name);
			$stmt->bindParam(":price", $this->price);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

	public function view(){
		$stmt = $this->conn->prepare("SELECT * FROM `procedures` WHERE `id` = :id");
		$stmt->bindParam(":id", $this->id);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_OBJ);
		return $row;
	}

		public function index(){
		$stmt = $this->conn->prepare("SELECT * FROM `procedures` WHERE 1 ORDER BY `name`");
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
