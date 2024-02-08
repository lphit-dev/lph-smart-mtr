<?php
class MeetingRoomDevice
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getMeetingRoomDeviceAll()
    {
        $query = "SELECT * FROM [meetingroomdevice]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getMeetingRoomDevice($id)
    {
        $query = "SELECT * FROM [meetingroomdevice] WHERE DeviceID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertMeetingRoomDevice($body)
    {
        $deviceId = $body["DeviceID"];
        $meetingroomId = $body["MeetingRoomID"];

        $query = "INSERT INTO [meetingroomdevice] (DeviceID,MeetingRoomID) " .
            " VALUES ($deviceId,'$meetingroomId');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function UpdateMeetingRoomDevice($body)
    {
        $deviceId = $body["DeviceID"];
        $meetingroomId = $body["MeetingRoomID"];

        $query = "UPDATE meetingroomdevice SET " .
            " MeetingRoomID = $meetingroomId" .
            " WHERE DeviceID = $deviceId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteMeetingRoomDevice($id)
    {
        $query = "Delete FROM [meetingroomdevice] WHERE DeviceID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
