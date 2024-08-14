<?php
require '../config/connect.php';

// get throw data
$userid = $_POST['userid'];

$q1 = mysqli_query($connect, "SELECT COUNT(c_uid) AS total from auth WHERE c_uid = '$userid'");
$d1 = mysqli_fetch_array($q1);

if($d1['total'] == 0){
    echo json_encode(array("status" => "kosong"));
}else{
    echo json_encode(array("status"=> "ada"));
}