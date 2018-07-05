<?php

class Database
{
    private $host = "127.0.0.1";
    private $db_name = "paodemel";
    private $username = "";
    private $password = "";
    public $conn;
    

    public function dbSet()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
              echo "Erro na conexão com o banco de dados: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public static function prepare($sql){
        return self::dbSet()->prepare($sql);
    }
}

?>
