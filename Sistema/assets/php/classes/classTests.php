<?php

require_once "database.php";

class classTests{
	private $id;
	private $user_id;
	private $procedure_id;
	private $date;
 

	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}

	function setId($value){
		$this->id = $value;
	}

	function setUser_id($value){
		$this->user_id = $value;
	}

	function setProcedure_id($value){
		$this->procedure_id = $value;
	}

	function setDate($value){
		$this->date = $value;
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
			$stmt = $this->conn->prepare("INSERT INTO `tests`(`user_id`, `procedure_id`, `date`) VALUES (:user_id, :procedure_id, :data);");
			$stmt->bindParam(":user_id", $this->user_id);
			$stmt->bindParam(":procedure_id", $this->procedure_id);
			$stmt->bindParam(":data", $this->date);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}


		public function edit(){
		try{
			$stmt = $this->conn->prepare("UPDATE `tests` SET `user_id` = :user_id, `procedure_id` = :procedure_id, `date` = :data");
			$stmt->bindParam(":user_id", $this->user_id);
			$stmt->bindParam(":procedure_id", $this->procedure_id);
			$stmt->bindParam(":data", $this->date);
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

	public function procedimentosagendados($id){
		$stmt = $this->conn->prepare("SELECT * FROM `tests` WHERE `user_id`='$id' ");
		$stmt->execute();
		return $stmt;
	}

	public function select($id){
		$stmt = $this->conn->prepare("SELECT * FROM `tests` WHERE `procedure_id`= '$id' ");
		$stmt->bindParam(":procedure_id", $this->id);
		$stmt->execute();
		return $stmt;
	}

}	

?>
