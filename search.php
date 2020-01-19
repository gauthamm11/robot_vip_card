<?php
require "conn.php";
if (!isset($_GET['search'])) {
	header("location: index.php");
}
?>

<?php

$card = $_GET['search'];

$sql = "SELECT * FROM robot_vip_spine where vip_card_no = '$card'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	while($row = mysqli_fetch_assoc($result)) {

		echo '
		<div class="row">
		<div class="card col-xl-7 col-lg-11 col-md-11 col-sm-11 mx-auto" style="border-radius: 25px;">
		<div class="card-body">
		<!-- card body starts -->
		<div class="pb-3 clearfix">
		<span class="float-left"><kbd><i class="fas fa-credit-card"></i>&nbsp;&nbsp;<i>'.$row['vip_card_no'].'</i></kbd></span>
		<span class="float-right"><a href="#!" data-toggle="modal" data-target="#myHis">Full Transaction History</a></span>
		</div>
		<div class="d-flex justify-content-between py-2">
		<div class="text-left"><h3><i class="fas fa-user-circle py-2"></i>&nbsp;'.$row['name'].'</h3></div>
		<div class="text-right"><h3 class="bg-warning brd px-4 py-1">&nbsp;<i class="fas fa-rupee-sign"></i>&nbsp;'.$row['current_value'].'&nbsp;</h3></div>
		</div><hr class="">
		<div class="row p-2">
		<div class="col">
		<button type="button" class="btn btn-dark btn-block btn-outline-warning brd" data-toggle="modal" data-target="#myAdd">
		<i class="fas fa-plus-square"></i>&nbsp;
		<span class="font-weight-bold">Add</span></button>
		</div>
		<div class="col">
		<button type="button" class="btn btn-dark btn-block btn-outline-warning brd" data-toggle="modal" data-target="#myMin">
		<i class="fas fa-minus-square"></i>&nbsp;
		<span class="font-weight-bold">Use</span></button>
		</div>
		</div>
		<!-- card body end -->
		</div>
		</div>
		</div>
		';

	}

	echo '
	<!-- The Modal -->
	<div class="modal fade" id="myAdd" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
	<form>
	<!-- Modal Header -->
	<div class="modal-header">
	<h4 class="modal-title">Add Amount</h4>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>

	<!-- Modal body -->
	<div class="modal-body">
	<div class="input-group mb-3">
	<div class="input-group-prepend">
	<span class="input-group-text">Amount:</span>
	</div>
	<input type="text" class="form-control" id="adamt" required>
	</div>
	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
	<button type="submit" class="btn btn-success brd px-5" id="adsub"><i class="fas fa-plus-square"></i>&nbsp;<span class="font-weight-bold">Add</span></button>
	</div>
	</form>
	</div>
	</div>
	</div>
	';
	echo '
	<!-- The Modal -->
	<div class="modal fade" id="myMin" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
	<form>
	<!-- Modal Header -->
	<div class="modal-header">
	<h4 class="modal-title">VIP Swipe</h4>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>

	<!-- Modal body -->
	<div class="modal-body">
	<div class="input-group mb-3">
	<div class="input-group-prepend">
	<span class="input-group-text">Bill ID:</span>
	</div>
	<input type="text" class="form-control" id="abid" required>
	</div>

	<div class="input-group mb-3">
	<div class="input-group-prepend">
	<span class="input-group-text">Bill Amount:</span>
	</div>
	<input type="text" class="form-control" id="abill" required>
	</div>

	<div class="input-group mb-3">
	<div class="input-group-prepend">
	<span class="input-group-text">Card Amount:</span>
	</div>
	<input type="text" class="form-control" id="acard" required>
	</div>
	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
	<button type="submit" class="btn btn-success brd px-5" id="usub"><i class="fas fa-minus-square"></i>&nbsp;<span class="font-weight-bold">Use</span></button>
	</div>
	</form>
	</div>
	</div>
	</div>
	';
	echo '
	<!-- The Modal -->
	<div class="modal fade" id="myHis" data-backdrop="static">
	<div class="modal-dialog">
	<div class="modal-content">

	<!-- Modal Header -->
	<div class="modal-header">
	<h4 class="modal-title">Transaction History</h4>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>

	<!-- Modal body -->
	<div class="modal-body">
	Transaction body..
	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>

	</div>
	</div>
	</div>
	';

} else {
	echo "<div class='bg-white'>No Entry Dude!</div>";
}







?>