<?php
class UrgentLevel
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getUrgentLevelAll()
    {
        $query = "SELECT * FROM [urgentlevel]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getUrgentLevel($id)
    {
        $query = "SELECT * FROM [urgentlevel] WHERE UlevelID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertUrgentLevel($body)
    {
        $ulevelID = $body["UlevelID"];
        $levelName = $body["LevelName"];

        $query = "INSERT INTO [urgentlevel] (UlevelID,LevelName)" .
            " VALUES ($ulevelID,'$levelName');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function updateUrgentLevel($body)
    {
        $ulevelID = $body["UlevelID"];
        $levelName = $body["LevelName"];

        $query = "UPDATE urgentlevel SET " .
            " LevelName = '$levelName'" .
            " WHERE UlevelID = $ulevelID";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteUrgentLevel($id)
    {
        $query = "Delete FROM [urgentlevel] WHERE UlevelID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
