<?php
require "conn.php";

if ( isset($_SESSION["adm"])){
	header('location: index.php');
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
		<div class="mt-5">
			<center><a href="index.php"><img class="img-fluid" src="img/logo.png" width="200px" height="auto" alt="logo"></a></center></div>
		</div>


		<!-- main content start -->
		<div class="container">



			<div class="row">
				<div class="mx-auto">
					<div class="card p-4 mt-4">

						<h2 class="text-center">Login</h2>
						<hr>
						<form method="post" action="process_buccepearoes.php" id="formId">



							<div class="form-group">
								<label for="ecat"><b>ID:</b></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<!-- <span class="input-group-text"></span> -->
										<button class="btn btn-primary" type="button"><i class="fa fa-id-card"></i></button>
									</div>
									<input type="text" class="form-control" autofocus onkeyup="this.value=this.value.toUpperCase()" id="ecat" name="rob_n" placeholder="Robot ID" required>
								</div>
							</div>

							<div class="form-group">
								<label for="pass_id"><b>Password:</b></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<!-- <span class="input-group-text"><i class="fas fa-key"></i></span> -->
										<button class="btn btn-primary" type="button"><i class="fas fa-key"></i></button>
									</div>
									<input type="password" class="form-control" id="pass_id" name="pass_n" placeholder="Password"
									required>
									<div class="input-group-append">
										<span class="btn btn-primary" onclick="togglePass()"><i class="fa fa-eye"></i></span>
									</div>
								</div>
							</div>

							<center>
								<button type="submit" class="btn btn-primary mt-3" id="loginId" name="login_user"><i class="fas fa-heart"></i>&nbsp;Login</button>
							</center>

							<div id="result"></div>

							<div>
								<?php
								if(isset($_GET['ap'])){
									echo '<div class="alert mt-3 alert-danger alert-dismissible fade show text-center">
									<button type="button" class="close" data-dismiss="alert">&times;</button>Enter the credentials correctly!
									</div>';
								}else{
									echo '';
								}
								?>
							</div>

						</form>
						<center>
							<button type="button" data-toggle="modal" data-target="#myModal" class="mt-3 btn btn-link">Can't Remember ID/Password&nbsp;<i class="fas fa-question-circle"></i></button>
						</center>
					</div>
				</div>
			</div>

		</div>

		<!-- The Modal Open -->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">

					<!-- Modal Header -->

            <!-- <div class="modal-header">
                <h2 class="modal-title">Website Under Construction<br></h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> -->


            <!-- Modal body -->
            <div class="modal-body">
            	<!-- <img src="chitralu/uc.png" alt="Under Construction" class="img-fluid float-left" style="width:150px; height: auto;"> -->
            	<!-- <img src="chitralu/worker.png" alt="Under Construction" class="img-fluid float-right" style="width:150px; height: auto;"> -->
            	<h5>This Section Is Under Maintenance</h5>
            	<p>for help mail to</p> 
            	<a href="mailto:gauthamasok.dev@gmail.com">gauthamasok.dev@gmail.com</a>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
            	<button type="button" class="btn btn-danger" data-dismiss="modal">Close&nbsp;<i class="fas fa-window-close"></i></button>
            </div>

        </div>
    </div>
</div>
<!-- The Modal Close -->


<script>
	function togglePass() {
		var x = document.getElementById("pass_id");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>
<!-- main content finish -->

</body>
</html>