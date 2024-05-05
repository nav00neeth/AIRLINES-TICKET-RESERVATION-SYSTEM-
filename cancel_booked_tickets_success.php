<?php
	session_start();
?>
<html>
	<head>
		<title>
			Cancel Booked Tickets
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
    			margin: 0px 68px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
			<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	</head>
	<body>
		<div class="card bg-dark text-dark">
			<img src="images\tickcansucbg.png" class="card-img" alt="...">
			<div class="card-img-overlay">
			<br><br>
			<div class="container col col-lg-7 col-xl-7">
				<div class="btn-group">
					<a href="index.php" class="btn btn-light" style="width:150px; margin-left: 60px;">Home</a>
					<a href="customer_homepage.php" class="btn btn-light" style="width:150px; margin-left: 60px;">Dashboard</a>
					<a href="logout_handler.php" class="btn btn-light" style="width:150px; margin-left: 60px;">Logout</a>
				</div>
			</div>
			<br><br><br><br><br>


		<h2>CANCEL BOOKED TICKETS</h2>
		<h3 style='padding-left: 40px;'>Your ticket has been cancelled successfully.<br><br>Your amount of &#x20b9; <?php echo $_SESSION['refund_amount']?> will be refunded to your bank account (Cancellation charge on 15% of your ticket amount has been deducted).</td>
		</h3>
		<br>
		</div>
		</div>
		<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>	


	</body>
</html>