<?php
class DeviceStatus
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getDeviceStatusAll()
    {
        $query = "SELECT * FROM [devicestatus]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getDeviceStatus($id)
    {
        $query = "SELECT * FROM [devicestatus] WHERE DeviceStatusID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertDeviceStatus($body)
    {
        $devicestatusId = $body["DeviceStatusID"];
        $devicestatusName = $body["DeviceStatusName"];

        $query = "INSERT INTO [devicestatus] (DeviceStatusID,DeviceStatusName)" .
            " VALUES ($devicestatusId,'$devicestatusName');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function updateDeviceStatus($body)
    {
        $devicestatusId = $body["DeviceStatusID"];
        $devicestatusName = $body["DeviceStatusName"];

        $query = "UPDATE devicestatus SET " .
            " DeviceStatusName = '$devicestatusName'" .
            " WHERE DeviceStatusID = $devicestatusId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteDeviceStatus($id)
    {
        $query = "Delete FROM [devicestatus] WHERE DeviceStatusID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
