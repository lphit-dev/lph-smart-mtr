<?php
class BookingDevice
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getBookingDeviceAll()
    {
        $query = "SELECT * FROM [bookingdevice]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getBookingDevice($id)
    {
        $query = "SELECT * FROM [bookingdevice] WHERE BookingID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertBookingDevice($body)
    {
        $bookingId = $body["BookingID"];
        $deviceID = $body["DeviceID"];

        $query = "INSERT INTO [bookingdevice] (BookingID,DeviceID)" .
            " VALUES ($bookingId,'$deviceID');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function updateBookingDevice($body)
    {
        $bookingId = $body["BookingID"];
        $deviceID = $body["DeviceID"];

        $query = "UPDATE bookingsdevice SET " .
            " DeviceID = '$deviceID'" .
            " WHERE BookingID = $bookingId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteBookingDevice($id)
    {
        $query = "Delete FROM [bookingdevice] WHERE BookingID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
