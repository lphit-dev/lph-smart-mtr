<?php
class MeetingRoomBooking
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getMeetingRoomBookingAll()
    {
        $query = "SELECT * FROM [meetingroombooking]";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function getMeetingRoomBooking($id)
    {
        $query = "SELECT * FROM [meetingroombooking] WHERE BookingID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertMeetingRoomBooking($body)
    {
        $bookingId = $body["BookingID"];
        $meetingroomId = $body["MeetingRoomID"];
        $bookingBy = $body["BookingBy"];
        $bookingDate = $body["BookingDate"];
        $approvedBy = $body["ApprovedBy"];
        $approvedDate = $body["ApprovedDate"];
        $topic = $body["Topic"];
        $meetingDetails = $body["MeetingDetails"];
        $numberAttendees = $body["NumberAttendees"];
        $startDate = $body["StartDate"];
        $endDate = $body["EndDate"];
        $lastModifyDate = $body["LastModifyDate"];
        $lastModifyBy = $body["LastModifyBy"];
        $canceledDate = $body["CanceledDate"];
        $canceledBy = $body["CanceledBy"];
        $bookingstatusID = $body["BookingStatusID"];
        $uLevelID = $body["ULevelID"];
        $tablePatternID = $body["TablePatternID"];

        $query = "INSERT INTO [meetingroombooking] (BookingID,MeetingRoomID,BookingBy,BookingDate,ApprovedBy,ApprovedDate,Topic,MeetingDetails,NumberAttendees,StartDate,EndDate,LastModifyDate,LastModifyBy,CanceledDate,CanceledBy,BookingStatusID,ULevelID,TablePatternID) " .
            " VALUES ($bookingId,$meetingroomId,'$bookingBy','$bookingDate','$approvedBy','$approvedDate','$topic','$meetingDetails',$numberAttendees,'$startDate','$endDate','$lastModifyDate','$lastModifyBy','$canceledDate','$canceledBy',$bookingstatusID,$uLevelID,$tablePatternID);";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function UpdateMeetingRoomBooking($body)
    {
        $bookingId = $body["BookingID"];
        $meetingroomId = $body["MeetingRoomID"];
        $bookingBy = $body["BookingBy"];
        $bookingDate = $body["BookingDate"];
        $approvedBy = $body["ApprovedBy"];
        $approvedDate = $body["ApprovedDate"];
        $topic = $body["Topic"];
        $meetingDetails = $body["MeetingDetails"];
        $numberAttendees = $body["NumberAttendees"];
        $startDate = $body["StartDate"];
        $endDate = $body["EndDate"];
        $lastModifyDate = $body["LastModifyDate"];
        $lastModifyBy = $body["LastModifyBy"];
        $canceledDate = $body["CanceledDate"];
        $canceledBy = $body["CanceledBy"];
        $bookingstatusID = $body["BookingStatusID"];
        $uLevelID = $body["ULevelID"];
        $tablePatternID = $body["TablePatternID"];

        $query = "UPDATE [meetingroombooking] SET " .
            " MeetingRoomID = $meetingroomId," .
            " BookingBy = '$bookingBy'," .
            " BookingDate = '$bookingDate',  " .
            " ApprovedBy = '$approvedBy',  " .
            " ApprovedDate = '$approvedDate',  " .
            " Topic = '$topic',  " .
            " MeetingDetails = '$meetingDetails',  " .
            " NumberAttendees = $numberAttendees,  " .
            " StartDate = '$startDate',  " .
            " EndDate = '$endDate',  " .
            " LastModifyDate = '$lastModifyDate',  " .
            " LastModifyBy = '$lastModifyBy',  " .
            " CanceledDate = '$canceledDate',  " .
            " CanceledBy = '$canceledBy',  " .
            " BookingStatusID = $bookingstatusID,  " .
            " ULevelID = $uLevelID,  " .
            " TablePatternID = $tablePatternID  " .
            " WHERE BookingID = $bookingId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteMeetingRoomBooking($id)
    {
        $query = "Delete FROM [meetingroombooking] WHERE BookingID = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
