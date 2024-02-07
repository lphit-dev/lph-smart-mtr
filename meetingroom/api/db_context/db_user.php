<?php
class User
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getUser($username)
    {
        $query = "SELECT * FROM [user] WHERE Username = '$username'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
