<?php
require "conn.php";
 if ( !isset($_SESSION["adm"])) {
   header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>ROBOT VIP CARD - ADMIN PANEL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid p-0 bg-dark text-justify">


	<!-- #e62b4c pink -->

	<div class="bg-dark container-fluid">
		<div class="">
			<div class="pt-3"><span style="cursor:pointer; font-size: 20px;" class="text-white" onclick="openNav()"><i class="fas fa-bars"></i>&nbsp;Menu</span></div>
			<center><a href="index.php"><img class="img-fluid" src="img/logo.png" width="200px" height="auto" alt="logo"></a></center></div>

		</div>

		<!-- side nav -->
		<div id="mySidenav" class="sidenav">
			<?php include 'sidebar.php'; ?>
		</div>
		<!-- ./side nav -->
		<!-- main content start -->
		<div class="container">
			<h2 class="text-center mt-4 pb-3"><span class="badge badge-warning brd px-4"><i class="fas fa-user-plus"></i>&nbsp;Add Member</span></h2>
			<form class="container" id="form_id">
				<div class="row mt-3">
					<div class="col">
						<div class="input-group">
							<div class="input-group-prepend bg-primary">
								<button class="btn btn-warning" type="button"><strong><i class="fas fa-user-alt"></i> Name</strong></button>
							</div>
							<input type="text" class="form-control" placeholder="Ex. John, Doe" name="cname" autofocus>
						</div></div>
						<div class="col">
							<div class="input-group">
								<div class="input-group-prepend bg-primary">
									<button class="btn btn-warning" type="button"><strong><i class="fas fa-phone"></i> Mobile</strong></button>
								</div>
								<input type="text" class="form-control" placeholder="Ex. 9123456780" name="mno">
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col">
							<div class="input-group">
								<div class="input-group-prepend">
									<button class="btn btn-warning" type="button"><strong><i class="fas fa-envelope"></i> Email</strong></button> 
								</div>
								<input type="email" class="form-control" placeholder="Ex. johndoe@example.com" name="email">
							</div>  
						</div>
						<div class="col">
							<div class="input-group">
							<div class="input-group-prepend bg-primary">
								<button class="btn btn-warning" type="button"><strong><i class="far fa-calendar-alt"></i> D.O.B</strong></button>
							</div>
							<input type="date" class="form-control" placeholder="Enter D.O.B" name="dob">
						</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col">
							<div class="input-group">
							<div class="input-group-prepend bg-primary">
								<button class="btn btn-warning" type="button"><strong><i class="fas fa-map-marked-alt"></i> Address</strong></button>
							</div>
							<textarea placeholder="Ex. #9, SK Apartments, Mount Poonamalle Road, Porur 600116." class="form-control" rows="2" id="addr"></textarea>      
						</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col">
							<div class="input-group">
								<div class="input-group-prepend">
									<button class="btn btn-warning" type="button"><strong><i class="fas fa-credit-card"></i> Card No.</strong></button> 
								</div>
								<input type="text" class="form-control" placeholder="Ex. 1234 5678 9012" name="email">
							</div>  
						</div>
						<div class="col">
							<div class="input-group">
							<div class="input-group-prepend bg-primary">
								<button class="btn btn-warning" type="button"><strong><i class="fas fa-rupee-sign"></i> Money</strong></button>
							</div>
							<input type="text" class="form-control" placeholder="Ex. 3000" name="dob">
						</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col">
							<div class="input-group">
								<div class="input-group-prepend">
									<button class="btn btn-warning" type="button"><strong><i class="fas fa-cubes"></i> Branch</strong></button> 
								</div>
								<input type="text" class="form-control" placeholder="Ex. Porur - Chennai" name="email">
							</div>  
						</div>
						<div class="col">
							<div class="input-group">
							<div class="input-group-prepend bg-primary">
								<button class="btn btn-warning" type="button"><strong><i class="fas fa-trophy"></i> Anniversary</strong></button>
							</div>
							<input type="date" class="form-control" name="dob">
						</div>
						</div>
					</div>
					<center>
					<button type="submit" class="btn btn-warning p-2 mt-5 sha brd px-3" id="sub"><strong>Submit <i class="fas fa-leaf"></i></strong></button>
					</center>
				</form>
			</div>
			<!-- main content finish -->
			<script>
				function openNav() {
					document.getElementById("mySidenav").style.width = "100%";
				}

				function closeNav() {
					document.getElementById("mySidenav").style.width = "0";
				}
			</script>
		</body>
		</html>