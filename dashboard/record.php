<?php
require '../config/connect.php';

// user
$uid_user = $_SESSION['uid'];

// data
$nominal = $_POST['nominal'];
$kategori = $_POST['kategori'];
$tanggal = $_POST['tanggal'];
$tanggal2 = date('Y-m-d', strtotime($tanggal));
$catatan = $_POST['catatan'];
$payment = "-";

$sql = mysqli_query($connect, "INSERT INTO outcome_history SET c_uid = '$uid_user', c_category = '$kategori', c_payment = '$payment', c_nominal = $nominal, c_note = '$catatan', c_date = '$tanggal2', c_time = '$tanggal'");

if ($sql) {
    echo "success";
} else {
    echo "error";
}
