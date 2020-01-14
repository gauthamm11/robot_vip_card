<?php
require "conn.php";

if ( isset($_SESSION["adm"])){
	header('location: index.php');
}

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['rob_n']);
    $password = mysqli_real_escape_string($conn, $_POST['pass_n']);
}else{
    header('location: login.php');
}


$sql = "SELECT admin.robot_admin_id, admin.passcode FROM `admin` WHERE admin.robot_admin_id = '$username' AND admin.passcode = '$password'";

// echo $username;
// echo "<br>";
// echo $password;
// echo "<br>";
// echo $sql;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       
        $_SESSION['adm'] = $row["robot_admin_id"];
        header('location: index.php');
    }
} else {
    header('location: login.php');
}

?>