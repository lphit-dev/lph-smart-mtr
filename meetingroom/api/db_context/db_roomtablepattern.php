<?php
class RoomTablePattern
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getRoomTablePatternAll()
    {
        $query = "SELECT * FROM [roomtablepattern]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getRoomTablePattern($id)
    {
        $query = "SELECT * FROM [roomtablepattern] WHERE TablePatternID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertRoomTablePattern($body)
    {
        $roomtablepatternId = $body["TablePatternID"];
        $meetingroomId = $body["MeetingRoomID"];

        $query = "INSERT INTO [roomtablepattern] (TablePatternID,MeetingRoomID) " .
            " VALUES ($roomtablepatternId,$meetingroomId);";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function UpdateRoomTablePattern($body)
    {
        $roomtablepatternId = $body["TablePatternID"];
        $meetingroomId = $body["MeetingRoomID"];

        $query = "UPDATE roomtablepattern SET " .
            " MeetingRoomID = $meetingroomId" .
            " WHERE TablePatternID = $roomtablepatternId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteRoomTablePattern($id)
    {
        $query = "Delete FROM [roomtablepattern] WHERE TablePatternID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
