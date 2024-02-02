<?php
class MeetingRoomStatus
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getMeetingRoomStatusAll()
    {
        $query = "SELECT * FROM [meetingroomstatus]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getMeetingRoomStatus($id)
    {
        $query = "SELECT * FROM [meetingroomstatus] WHERE StatusID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertMeetingRoomStatus($body)
    {
        $statusId = $body["StatusID"];
        $statusName = $body["StatusName"];

        $query = "INSERT INTO [meetingroomstatus] (StatusID,StatusName)" .
            " VALUES ($statusId,'$statusName');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function updateMeetingRoomStatus($body)
    {
        $statusId = $body["StatusID"];
        $statusName = $body["StatusName"];

        $query = "UPDATE meetingroomstatus SET " .
            " StatusName = '$statusName'" .
            " WHERE StatusID = $statusId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteMeetingRoomStatus($id)
    {
        $query = "Delete FROM [meetingroomstatus] WHERE StatusID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
