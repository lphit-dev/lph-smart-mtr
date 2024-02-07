<?php
class UserStatus
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getUserStatusAll()
    {
        $query = "SELECT * FROM [userstatus]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getUserStatus($id)
    {
        $query = "SELECT * FROM [userstatus] WHERE UserStatusID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertUserStatus($body)
    {
        $userstatusId = $body["UserStatusID"];
        $userstatusName = $body["UserStatusName"];

        $query = "INSERT INTO [userstatus] (UserStatusID,UserStatusName) " .
            " VALUES ($userstatusId,'$userstatusName');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function UpdateUserStatus($body)
    {
        $userstatusId = $body["UserStatusID"];
        $userstatusName = $body["UserStatusName"];

        $query = "UPDATE userstatus SET " .
            " UserStatusName = '$userstatusName'" .
            " WHERE UserStatusID = $userstatusId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteUserStatus($id)
    {
        $query = "Delete FROM [userstatus] WHERE UserStatusID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
