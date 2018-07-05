<?php

require_once "database.php";

class classLogin{
	private $id;
	private $email;
	private $senha;


	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}

	function setId($value){
		$this->id = $value;
	}

	function setEmail($value){
		$this->email = $value;
	}

	function setSenha($value){
		$this->senha = $value;
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
            $stmt = $this->conn->prepare("SELECT * FROM `login` WHERE `email` = :email");
            $stmt->bindParam(":email", $userName);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return $e;
        }
    }


        public function locate(){
        $stmt = $this->conn->prepare("SELECT * FROM `login` WHERE `email` = :email AND `password` = :password;");
        $stmt->bindParam(":email", $this->email);
        $this->senha = sha1($this->password);
        $stmt->bindParam(":password", $this->password);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        return $row;
    }
}
?>
