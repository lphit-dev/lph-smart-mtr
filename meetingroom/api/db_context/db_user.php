<?php
class User
{

    private $conn;
    public function __construct($db)
    {

        $this->conn = $db;
    }

    function getUser($username)
    {
        $query = "SELECT * FROM [user] WHERE Username = '$username'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function getUserAll()
    {
        $query = "SELECT [user].*, usertype.TypeName as UserTypeName, userstatus.UserStatusName FROM [user] INNER JOIN [usertype] ON usertype.UserTypeID = [user].UserTypeID INNER JOIN [userstatus] ON [user].UserStatusID = [userstatus].UserStatusID";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

    function insertUser($body)
    {
        $username = $body["Username"];
        $password = $body["Password"];
        $prefixName = $body["PrefixName"];
        $firstName = $body["FirstName"];
        $lastName = $body["LastName"];
        $usertypeID = $body["UserTypeID"];
        $position = $body["Position"];
        $department = $body["Department"];
        $internalphoneNumber = $body["InternalPhoneNumber"];
        $selfphoneNumber = $body["SelfPhoneNumber"];
        $userstatusID = $body["UserStatusID"];
        $eventofdefault = $body["EventOfDefault"];

        $query = "INSERT INTO [user] (Username,Password,PrefixName,FirstName,LastName,UserTypeID,Position,Department,InternalPhoneNumber,SelfPhoneNumber,UserStatusID,EventOfDefault) " .
            " VALUES ('$username','$password','$prefixName','$firstName','$lastName',$usertypeID,'$position','$department','$internalphoneNumber','$selfphoneNumber',$userstatusID,$eventofdefault);";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function UpdateUser($body)
    {
        $username = $body["Username"];
        $password = $body["Password"];
        $prefixName = $body["PrefixName"];
        $firstName = $body["FirstName"];
        $lastName = $body["LastName"];
        $usertypeID = $body["UserTypeID"];
        $position = $body["Position"];
        $department = $body["Department"];
        $internalphoneNumber = $body["InternalPhoneNumber"];
        $selfphoneNumber = $body["SelfPhoneNumber"];
        $userstatusID = $body["UserStatusID"];
        $eventofdefault = $body["EventOfDefault"];

        $query = "UPDATE [user] SET " .
            " Password = '$password'," .
            "  PrefixName = '$prefixName' ," .
            "  FirstName = '$firstName' ," .
            "  LastName = '$lastName' ," .
            "  UserTypeID = $usertypeID ," .
            "  Position = '$position' ," .
            "  Department = '$department' ," .
            "  InternalPhoneNumber = '$internalphoneNumber' ," .
            "  SelfPhoneNumber = '$position' ," .
            "  UserStatusID = $userstatusID ," .
            " EventOfDefault = $eventofdefault  " .
            " WHERE Username = '$username'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }

    function DeleteUser($id)
    {
        $query = "Delete FROM [user] WHERE Username = '$id'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $rs = new stdClass();
        $rs->result = "success";
        $rs->query = $query;
        return $rs;
    }
}
