<?php
require "conn.php";
if (!isset($_GET['trimAdd'])) {
	header("location: index.php");
}
?>


<?php

$add = $_GET['trimAdd'];

$vip = $_GET['vip'];

 echo "<h1>".$add."</h1>";

// $sql = "INSERT INTO transaction_history (vip_card_no, bill_id, bill_amt, vip_amt, side, app_by, t_stamp)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";

// https://www.w3schools.com/php/php_mysql_insert_multiple.asp

// https://www.tutorialspoint.com/how-to-update-field-to-add-value-to-existing-value-in-mysql

?>