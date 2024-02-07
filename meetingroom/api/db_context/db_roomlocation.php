<?php
class RoomLocation
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getRoomLocationAll()
    {
        $query = "SELECT * FROM [roomlocation]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getRoomLocation($id)
    {
        $query = "SELECT * FROM [roomlocation] WHERE LocationID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertRoomLocation($body)
    {
        $roomlocationId = $body["LocationID"];
        $roomlocationName = $body["LocationName"];

        $query = "INSERT INTO [roomlocation] (LocationID,LocationName) " .
            " VALUES ($roomlocationId,'$roomlocationName');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function UpdateRoomLocation($body)
    {
        $roomlocationId = $body["LocationID"];
        $roomlocationName = $body["LocationName"];

        $query = "UPDATE roomlocation SET " .
            " LocationName = '$roomlocationName'" .
            " WHERE LocationID = $roomlocationId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteRoomLocation($id)
    {
        $query = "Delete FROM [roomlocation] WHERE LocationID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
