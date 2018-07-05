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

	function setName($value){
		$this->name = $value;
	}

	function setEmail($value){
		$this->email = $value;
	}

	function setPassword($value){
		$this->password = $value;
	}

	function setType($value){
		$this->type = $value;
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
			$stmt = $this->conn->prepare("INSERT INTO `users`(`name`, `email`, `password`, `type`)VALUES (:name, :email, :password, :type)");
			$stmt->bindParam(":name", $this->name);
			$stmt->bindParam(":email", $this->email);
			$stmt->bindParam(":password", $this->password);
			$stmt->bindParam(":type", $this->type);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}


	    public function indexEmail($userName){
        try{
            $stmt = $this->conn->prepare("SELECT * FROM `users` WHERE `email` = :email");
            $stmt->bindParam(":email", $userName);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return $e;
        }
    }


        public function locate(){
        $stmt = $this->conn->prepare("SELECT * FROM `users` WHERE `email` = :email AND `password` = :password;");
        $stmt->bindParam(":email", $this->email);
        $this->senha = sha1($this->password);
        $stmt->bindParam(":password", $this->password);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        return $row;
    }
}
?>
