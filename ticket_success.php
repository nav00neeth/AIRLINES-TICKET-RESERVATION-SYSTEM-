<?php
	session_start();
?>
<html>
	<head>
		<title>
			Ticket Booking Successful
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	
	</head><!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<body>
	<div class="card bg-dark text-dark">
  <img src="images\btikk2.png" class="card-img" alt="...">
  <div class="card-img-overlay">
		<br><br><br><br><br><br><br><br>
		<center><h3>BOOKING SUCCESSFUL</h3></center>
		<br><br><br><br><br><br><br><center><h4>Your payment of &#x20b9; <?php echo $_SESSION['total_amount']; ?> has been received.<br><br> Your PNR is <strong><?php echo $_SESSION['pnr'];?></strong>. Your tickets have been booked successfully.</h4></center>
		<br><br><br><div class="container col col-lg-5 col-xl-5">
 	<div class="btn-group">
		<a href="customer_homepage.php" class="btn btn-dark" style="width:150px; margin-left: 50px;">Home</a>
		<a href="customer_homepage.php" class="btn btn-dark" style="width:150px; margin-left: 50px;">Book Tickets</a>
		<!-- <a href="logout_handler.php" class="btn btn-dark" style="width:150px; margin-left: 50px;">Login</a> -->
	</div>
	</div>
		
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	</body>
</html>