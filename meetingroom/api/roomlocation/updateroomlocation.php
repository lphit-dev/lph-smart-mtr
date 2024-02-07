<?php
header("Content-Type: application/json; charset=UTF-8");
try {

    require '../env/header.php';
    require '../env/auth.php';
    require '../env/db.php';
    require '../db_context/db_roomlocation.php';

    $bodyJson = file_get_contents('php://input');
    $body = json_decode($bodyJson, TRUE); //convert JSON into array
    //echo json_encode($body);

    if (!$body) {
        throw new ErrorException('body invalid.');
    }

    // $access_token = $request_headers['Authorization'] . '';
    // if (!$access_token) {
    //     http_response_code(401);
    //     echo 'unauthorized (invalid token)';
    //     return;
    // }
    // $tokenArr = explode(" ", $access_token);
    // $token = $tokenArr[1];

    // $auth = new WebAuthen();
    // $auth_data = $auth->getPayload($token);

    // //echo json_encode($auth_data);
    // if ($auth_data == false) {
    //     http_response_code(401);
    //     echo 'unauthorized';
    //     return;
    // }
    // //echo json_encode($auth_data->uid); return;

    $database = new Database();
    $db = $database->getConnection();

    $roomlocatition = new RoomLocation($db);
    $rs = $roomlocatition->UpdateRoomLocation($body);

    http_response_code(200);
    echo json_encode($rs, JSON_UNESCAPED_UNICODE);
    
} catch (Exception $e) {
    // $rs->status = 0;
    // $rs->message = $e->getMessage();
    http_response_code(500);
    echo $e->getMessage();
}
