<?php
class DeviceType
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getDeviceTypeAll()
    {
        $query = "SELECT * FROM [devicetype]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getDeviceType($id)
    {
        $query = "SELECT * FROM [devicetype] WHERE DeviceTypeID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertDeviceType($body)
    {
        $devicetypeId = $body["DeviceTypeID"];
        $devicetypeName = $body["DeviceTypeName"];

        $query = "INSERT INTO [devicetype] (DeviceTypeID,DeviceTypeName)" .
            " VALUES ($devicetypeId,'$devicetypeName');";
        // $stmt = $this->conn->prepare($query);
        // $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function updateDeviceType($body)
    {
        $devicetypeId = $body["DeviceTypeID"];
        $devicetypeName = $body["DeviceTypeName"];

        $query = "UPDATE devicetype SET " .
            " DeviceTypeName = '$devicetypeName'" .
            " WHERE DeviceTypeID = $devicetypeId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteDevice($id)
    {
        $query = "Delete FROM [devicetype] WHERE DeviceTypeID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
