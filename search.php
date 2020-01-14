<?php
require "conn.php";
if (!isset($_GET['search'])) {
    header("location: index.php");
}
?>

<?php

$card = $_GET['search'];

echo "<h1>".$card."</h1>";


?>