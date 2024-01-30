<?php
header("Content-Type: application/json; charset=UTF-8");
try {

    require '../env/header.php';
    require '../env/auth.php';
    require '../env/db.php';
    require '../db_context/db_user.php';

    $bodyJson = file_get_contents('php://input');
    $body = json_decode($bodyJson, TRUE); //convert JSON into array
    //echo json_encode($body);

    if (!$body) {
        throw new ErrorException('body invalid.');
    }

    $username = $body['user'];
    $password = $body['pass'];

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);
    $rs = $user->getUser($username);
    //echo json_encode(array($user, $pass, $rs));

    if (!$rs) {
        throw new ErrorException('user not found.');
    }
    // if ($rs['hashpassword'] != md5($password . '')) {
    //     throw new ErrorException('password invalid.');
    // }
    if ($rs['Password'] != $password) {
        throw new ErrorException('password invalid.');
    }

    $auth = new WebAuthen();

    $res = new stdClass();
    $payload = array(
        "uid" => $username,
        "iat" => time(),
    );
    $res->token = $auth->getToken($payload);

    http_response_code(200);
    echo json_encode($res);
} catch (Exception $e) {
    // $rs->status = 0;
    // $rs->message = $e->getMessage();
    http_response_code(500);
    echo $e->getMessage();
}
