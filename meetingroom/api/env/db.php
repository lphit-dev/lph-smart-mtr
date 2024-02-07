<?php
class Database
{
    private $host = "10.10.118.150";
    private $username = "training";
    private $password = "Lph10672";
    private $db_name = "SmartMTR";
    // private $port = 1433;

    public $conn;
    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("sqlsrv:server=$this->host ; Database = $this->db_name", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $this->conn;

        } catch (Exception $e) {
            echo "Connection error: " . $e->getMessage();
            //return false;
        }
        return $this->conn;
    }
}
