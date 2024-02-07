<?php
class MeetingRoom
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getMeetingRoomAll()
    {
        $query = "SELECT * FROM [meetingroom]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getMeetingRoom($id)
    {
        $query = "SELECT * FROM [meetingroom] WHERE MeetingRoomID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertMeetingRoom($body)
    {
        $meetingroomId = $body["MeetingRoomID"];
        $roomName = $body["RoomName"];
        $description = $body["Description"];
        $maxPeople = $body["MaxPeople"];
        $minPeople = $body["MinPeople"];
        $roomImage = $body["RoomImage"];
        $statusID = $body["StatusID"];
        $locationID = $body["LocationID"];


        $query = "INSERT INTO [meetingroom] (MeetingRoomID,RoomName,Description,MaxPeople,MinPeople,roomImage,StatusID,locationID) " .
            " VALUES ($meetingroomId,'$roomName','$description',$maxPeople,$minPeople,'$roomImage',$statusID,$locationID);";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function UpdateMeetingRoom($body)
    {
        $meetingroomId = $body["MeetingRoomID"];
        $roomName = $body["RoomName"];
        $description = $body["Description"];
        $maxPeople = $body["MaxPeople"];
        $minPeople = $body["MinPeople"];
        $roomImage = $body["RoomImage"];
        $statusID = $body["StatusID"];
        $locationID = $body["LocationID"];

        $query = "UPDATE meetingroom SET " .
            " RoomName = '$roomName'," .
            "  Description = '$description' ," .
            "  MaxPeople = $maxPeople ," .
            "  MinPeople = $minPeople ," .
            "  RoomImage = '$roomImage' ," .
            "  StatusID = $statusID ," .
            " LocationID = $locationID  " .
            " WHERE MeetingRoomID = $meetingroomId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteMeetingRoom($id)
    {
        $query = "Delete FROM [meetingroom] WHERE MeetingRoomID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
