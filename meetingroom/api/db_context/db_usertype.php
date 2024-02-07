<?php
class UserType
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getUserTypeAll()
    {
        $query = "SELECT * FROM [usertype]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getUserType($id)
    {
        $query = "SELECT * FROM [usertype] WHERE UserTypeID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertUserType($body)
    {
        $usertypeId = $body["UserTypeID"];
        $typeName = $body["TypeName"];
        $linetokenName = $body["LineToken"];

        $query = "INSERT INTO [usertype] (UserTypeID,TypeName,LineToken) " .
            " VALUES ($usertypeId,'$typeName','$linetokenName');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function UpdateUserType($body)
    {
        $usertypeId = $body["UserTypeID"];
        $typeName = $body["TypeName"];
        // $linetokenName = $body["LineToken"];

        $query = "UPDATE usertype SET " .
            " TypeName = '$typeName'" .
            // " LineToken = '$linetokenName'" .
            " WHERE UserTypeID = $usertypeId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteUserType($id)
    {
        $query = "Delete FROM [usertype] WHERE UserTypeID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
