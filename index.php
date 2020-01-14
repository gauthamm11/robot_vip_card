	<?php
	require "conn.php";

    if ( !isset($_SESSION["adm"])) {
   header('location: login.php');
}

// logout block
if (isset($_GET['lgout'])) {
    session_destroy();
    unset($_SESSION['adm']);
    header("location: index.php");
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

		<script>
			$(document).ready(function () {
				var space = '<br><div class="alert text-center alert-dark alert-dismissible fade show col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Enter ROBOT VIP Card No.!</strong><br><i>Example:</i> 1234 5678 9012</div>';
				var lodSpin = '<center class="mt-5"><div class="spinner-grow text-muted mr-sm-5"></div><div class="spinner-grow text-primary mr-sm-5"></div><div class="spinner-grow text-success mr-sm-5"></div><div class="spinner-grow text-info mr-sm-5"></div><div class="spinner-grow text-warning mr-sm-5"></div><div class="spinner-grow text-danger mr-sm-5"></div><div class="spinner-grow text-secondary mr-sm-5"></div><div class="spinner-grow text-dark"></div></center>';
	// view details open
	//$(".viewc").click(function () {
	//$("#view").modal();
	//});
	// view details close
	// form submit open
	$('#form_id').on('submit', function (e) {
	                //Stop the form from submitting itself to the server.
	                e.preventDefault();
	                var search = $('#search').val();
	                var trimStr = $.trim(search);
	                if (trimStr != null && trimStr != '') {
	                	$("#result").html(lodSpin);
	                	$.ajax({
	                		type: "GET",
	                		url: 'search.php',
	                		data: { search: search },
	                		success: function (data) {
	                			$("#result").html(data);
	                		}
	                	});
	                } else {
	                	$("#result").html(space);
	                }
	            });
	// form submit close
	return false;
});
</script>

<!-- #e62b4c pink -->

<div class="bg-dark container-fluid">
	<div class="">
		<div class="pt-3"><span style="cursor:pointer; font-size: 20px;" class="text-white" onclick="openNav()"><i class="fas fa-bars"></i>&nbsp;Menu</span>
		</div>
		<center><a href="index.php"><img class="img-fluid mt-5" src="img/logo.png" width="200px" height="auto" alt="logo"></a></center>
	</div>

</div>
<!-- nav open -->
<nav class="navbar navbar-expand-sm bg-dark justify-content-center zind">
	<form action="search.php" id="form_id" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" method="GET">
		<div class="rounded-circle input-group mt-5 p-0 mb-5 bg-light sha">
			<div class="input-group-prepend">
				<button class="btn spec" style="background-color: #ffd700; border-radius: 50px 0px 0px 50px;" type="button"><strong><i class="fas fa-credit-card"></i> Card No.</strong></button> 
			</div>
			<input type="text" id="search" placeholder="xxxx xxxx xxxx" class="form-control spec form-control-lg text-monospace" autofocus autocomplete="off" spellcheck="false"/>
			<div class="input-group-append">
				<button class="btn spec" style="background-color: #ffd700; border-radius: 0px 50px 50px 0px;" id="subm" type="submit"><strong> <i class="fab fa-searchengin" style="font-size: 20px;"></i>&nbsp;Search</strong></button> 
			</div>
		</div>
	</form>
</nav>
<!-- nav close -->
<!-- #FFD700 - Gold -->
<!-- side nav -->
<div id="mySidenav" class="sidenav">
	<?php  include 'sidebar.php'; ?>
	</div>
	<!-- ./side nav -->
	<!-- main content start -->
	<div class="container mb-3 text-capitalize" id="result">

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
<script>
	input_credit_card = function(input)
	{
		var format_and_pos = function(char, backspace)
		{
			var start = 0;
			var end = 0;
			var pos = 0;
			var separator = " ";
			var value = input.value;

			if (char !== false)
			{
				start = input.selectionStart;
				end = input.selectionEnd;

            if (backspace && start > 0) // handle backspace onkeydown
            {
            	start--;

            	if (value[start] == separator)
            		{ start--; }
            }
            // To be able to replace the selection if there is one
            value = value.substring(0, start) + char + value.substring(end);

            pos = start + char.length; // caret position
        }

        var d = 0; // digit count
        var dd = 0; // total
        var gi = 0; // group index
        var newV = "";
        var groups = /^\D*3[47]/.test(value) ? // check for American Express
        [4, 6, 5] : [4, 4, 4];

        for (var i = 0; i < value.length; i++)
        {
        	if (/\D/.test(value[i]))
        	{
        		if (start > i)
        			{ pos--; }
        	}
        	else
        	{
        		if (d === groups[gi])
        		{
        			newV += separator;
        			d = 0;
        			gi++;

        			if (start >= i)
        				{ pos++; }
        		}
        		newV += value[i];
        		d++;
        		dd++;
        	}
            if (d === groups[gi] && groups.length === gi + 1) // max length
            	{ break; }
        }
        input.value = newV;

        if (char !== false)
        	{ input.setSelectionRange(pos, pos); }
    };

    input.addEventListener('keypress', function(e)
    {
    	var code = e.charCode || e.keyCode || e.which;

        // Check for tab and arrow keys (needed in Firefox)
        if (code !== 9 && (code < 37 || code > 40) &&
        // and CTRL+C / CTRL+V
        !(e.ctrlKey && (code === 99 || code === 118)))
        {
        	e.preventDefault();

        	var char = String.fromCharCode(code);

            // if the character is non-digit
            // OR
            // if the value already contains 11/12 digits and there is no selection
            // -> return false (the character is not inserted)

            if (/\D/.test(char) || (this.selectionStart === this.selectionEnd &&
            	this.value.replace(/\D/g, '').length >=
            (/^\D*3[47]/.test(this.value) ? 11 : 12))) // 11 digits if Amex
            {
            	return false;
            }
            format_and_pos(char);
        }
    });
    
    // backspace doesn't fire the keypress event
    input.addEventListener('keydown', function(e)
    {
        if (e.keyCode === 8 || e.keyCode === 46) // backspace or delete
        {
        	e.preventDefault();
        	format_and_pos('', this.selectionStart === this.selectionEnd);
        }
    });
    
    input.addEventListener('keyup', function(e)
    {
    	if (event.keyCode === 13) {
    		event.preventDefault();
    		document.getElementById("subm").click();
    	}
    });
    

    input.addEventListener('paste', function()
    {
        // A timeout is needed to get the new value pasted
        setTimeout(function(){ format_and_pos(''); }, 50);
    });
    
    input.addEventListener('blur', function()
    {
    	// reformat onblur just in case (optional)
    	format_and_pos(this, false);
    });
};

input_credit_card(document.getElementById('search'));
</script>
</body>
</html>