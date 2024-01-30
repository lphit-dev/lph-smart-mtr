<?php
class Device
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getDeviceAll()
    {
        $query = "SELECT * FROM [device]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getDevice($id)
    {
        $query = "SELECT * FROM [device] WHERE DeviceID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertDevice($body)
    {
        $deviceId = $body["DeviceID"];
        $deviceName = $body["DeviceName"];
        $deviceStatusId = $body["DeviceStatusID"];
        $deviceTypeId = $body["DeviceTypeID"];

        $query = "INSERT INTO [device] (DeviceID,DeviceName,DeviceStatusID,DeviceTypeID) " .
            " VALUES ($deviceId,'$deviceName',$deviceStatusId,$deviceTypeId);";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function UpdateDevice($body)
    {
        $deviceId = $body["DeviceID"];
        $deviceName = $body["DeviceName"];
        $deviceStatusId = $body["DeviceStatusID"];
        $deviceTypeId = $body["DeviceTypeID"];

        $query = "UPDATE device SET " .
            " DeviceName = '$deviceName'" .
            " , DeviceStatusId = $deviceStatusId ," .
            " DeviceTypeID = $deviceTypeId  " .
            " WHERE DeviceID = $deviceId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteDevice()
    {
    }
}
