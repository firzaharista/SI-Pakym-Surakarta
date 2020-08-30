<?php
session_start();
set_time_limit(30000);
error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);

date_default_timezone_set("Asia/Jakarta");
$waktu_sekarang = date("m-d-Y H:i:s");


$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pakym_db';

$conn = mysqli_connect($host,$user,$pass,$db) or die ("Tidak Terhubung Ke Server Database");
?>
