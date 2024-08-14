<?php
require '../assets/jwt/vendor/autoload.php';

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;
// tes

session_start();
date_default_timezone_set('Asia/Jakarta');
$now = date('Y-m-d H:i:s');

$connect = new mysqli("localhost", "root", "", "financi");
// $connect = new mysqli("localhost", "kaad7559_fahmi", "rahmadiani", "kaad7559_financi");

if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}

//base url
function base_url($url = null)
{
    // $base_url = "https://app-financi.kaadzka.com/";
    $base_url = "//localhost/celengan/";
    // $base_url = "https://172.17.192.242/financi";
    // $base_url = "https://192.168.137.1/financi";
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url;
    }
}
// tes git lewat git dekstop

// Function to check for a valid JWT
function getUserFromJwt($jwt, $key)
{
    try {
        $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
        return (array) $decoded->data;
    } catch (Exception $e) {
        return null;
    }
}
