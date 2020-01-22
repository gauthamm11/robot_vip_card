<?php
require "conn.php";
if (!isset($_GET['tid'])) {
	header("location: index.php");
}
?>


<?php

$card = $_GET['tid'];

//echo "<h1>".$tid."</h1>";

$sql = "SELECT * FROM `transaction_history` WHERE vip_card_no = '$card' order by t_stamp desc";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {


echo '
<div class="table-responsive">
    	<table class="table qtable-bordered qtable-sm table-hover">
    <thead class="thead-dark">
      <tr>
        <th>Status</th>
        <th>Card Amt.</th>
        <th>Bill ID</th>
        <th>Bill Amt.</th>
        <th>Date & Time</th>
      </tr>
    </thead>
    <tbody>
';

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //  echo "Bill id: " . $row["bill_id"]. " - Bill Amt.: " . $row["bill_amt"]. " ;; " . $row["vip_amt"]. "<br>";

    	echo '
      <tr>
        <td>'.$row['side'].'</td>
        <td>'.$row['vip_amt'].'</td>
        <td>'.$row['bill_id'].'</td>
        <td>'.$row['bill_amt'].'</td>
        <td>'.$row['t_stamp'].'</td>
      </tr>
    ';

    }

echo '
</tbody>
  </table>
  </div>
';


} else {
    echo "0 results";
}




?>

