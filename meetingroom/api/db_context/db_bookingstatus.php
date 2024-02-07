<?php
class BookingStatus
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getBookingStatusAll()
    {
        $query = "SELECT * FROM [bookingstatus]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getBookingStatus($id)
    {
        $query = "SELECT * FROM [bookingstatus] WHERE BookingStatusID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertBookingStatus($body)
    {
        $bookingstatusId = $body["BookingStatusID"];
        $bookingstatusName = $body["BookingStatusName"];

        $query = "INSERT INTO [bookingstatus] (BookingStatusID,BookingStatusName)" .
            " VALUES ($bookingstatusId,'$bookingstatusName');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function updateBookingStatus($body)
    {
        $bookingstatusId = $body["BookingStatusID"];
        $bookingstatusName = $body["BookingStatusName"];

        $query = "UPDATE bookingstatus SET " .
            " BookingStatusName = '$bookingstatusName'" .
            " WHERE BookingStatusID = $bookingstatusId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteBookingStatus($id)
    {
        $query = "Delete FROM [bookingstatus] WHERE BookingStatusID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
