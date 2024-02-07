<?php
class WebAuthen
{
    private $secret_key = "smart-mtr@2024";
    private $cipher_algo = 'aes-128-cbc';

    public function getToken($payload)
    {
        $json = json_encode($payload);
        return openssl_encrypt($json, $this->cipher_algo, $this->secret_key);
    }

    public function getPayload($token)
    {
        try {
            $json = openssl_decrypt($token, $this->cipher_algo, $this->secret_key);
            if ($json) {
                return json_decode($json);
            }
            return false;
        } catch (Exception $e) {
            return false;
        }
    }

    public function getUserIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
