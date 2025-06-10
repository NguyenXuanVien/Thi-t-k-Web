<?php
class Database {
    private $host = "localhost";
    private $dbname = "banhang";
    private $username = "root";
    private $password = "";
    public $conn;

    public function connect() {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Kết nối thất bại: " . $e->getMessage();
            return null;
        }
    }
}
?>
