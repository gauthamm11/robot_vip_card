<?php
require "conn.php";
if (!isset($_GET['tid'])) {
	header("location: index.php");
}
?>


<?php

$tid = $_GET['tid'];

echo "<h1>".$tid."</h1>";


?>