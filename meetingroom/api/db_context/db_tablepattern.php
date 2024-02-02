<?php
class TablePattern
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getTablePatternAll()
    {
        $query = "SELECT * FROM [tablepattern]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getTablePattern($id)
    {
        $query = "SELECT * FROM [tablepattern] WHERE TablePatternID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertTablePattern($body)
    {
        $tablepatternId = $body["TablePatternID"];
        $tablepatternName = $body["PatternName"];
        $tablepatternImage = $body["PatternImage"];

        $query = "INSERT INTO [tablepattern] (TablePatternID,PatternName,PatternImage) " .
            " VALUES ($tablepatternId,'$tablepatternName','$tablepatternImage');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function UpdateTablePattern($body)
    {
        $tablepatternId = $body["TablePatternID"];
        $tablepatternName = $body["PatternName"];
        $tablepatternImage = $body["PatternImage"];

        $query = "UPDATE tablepattern SET " .
            " PatternName = '$tablepatternName'" .
            " , PatternImage = '$tablepatternImage' " .
            " WHERE TablePatternID = $tablepatternId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteTablePattern($id)
    {
        $query = "Delete FROM [tablepattern] WHERE TablePatternID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
