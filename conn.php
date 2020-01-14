<?php

error_reporting(1);
date_default_timezone_set("Asia/Kolkata");
session_start();


$servername = "localhost";
$username = "root";
$password = "gautham1995";
$dbname = "robot_vip_card";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    header('location: login.php');
}


?>