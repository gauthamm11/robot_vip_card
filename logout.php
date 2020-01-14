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
<div class="container mt-5">
<div class="jumbotron-bak pt-5">
	<a href="index.php?lgout='1'" class="text-decoration-none">
  <button class="btn btn-danger btn-block btn-lg sha"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</button>
  </a>
</div>
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