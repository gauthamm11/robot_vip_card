<?php
require "conn.php";
if (!isset($_GET['trimAdd'])) {
	header("location: index.php");
}
?>


<?php

$add = $_GET['trimAdd'];

echo "<h1>".$add."</h1>";


?>