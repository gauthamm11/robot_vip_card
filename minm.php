<?php
require "conn.php";
if (!isset($_GET['bmt']) && !isset($_GET['cmt'])) {
	header("location: index.php");
}
?>


<?php

// id: id, bmt: tBmt, cmt: tCmt

$id = $_GET['id'];
$bmt = $_GET['bmt'];
$cmt = $_GET['cmt'];

echo "<h1>".$id."<br>".$bmt."<br>".$cmt."</h1>";


?>