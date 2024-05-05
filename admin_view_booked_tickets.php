<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
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
    			margin: 0% 15.8%
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	</head>
	<body>
	<div class="card text-bg-dark">
    <img src="images\admnbg.png" class="card-img" alt="...">
    <div class="card-img-overlay">
	<br><br><br><br>	
		<h2 id="title">
		<center>SKYLINE | DELETE FLIGHT</center>
		</h2>
		<!-- <div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div> -->
		<form action="admin_view_booked_tickets_form_handler.php" method="post">
			<br><center><h2>VIEW LIST OF BOOKED TICKETS FOR A FLIGHT</h2></center>
			<div>
			<!-- <table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Flight No.</td>
					<td class="fix_table">Enter the Departure Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="flight_no" required></td>
					<td class="fix_table"><input type="date" name="departure_date" required></td>
				</tr>
			</table> -->
			<br><br>
			<div class="container col col-lg-4 col-xl-4">
				<form class="px-4 py-3 text-white" method="POST" action="new_user_form_handler.php" id="new_user_from">
					<div class="row row-2">
						<div class="col col-lg-12 col-xl-12">
						<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Enter the  Flight number</label>
							<input type="text" class="form-control" id="exampleDropdownFormEmail1" name="flight_no" placeholder="flight_no" required>
							</div>
						<div class="col col-lg-12 col-xl-12">
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Enter the departure date</label>
							<input type="date" class="form-control" id="exampleDropdownFormEmail1" name="departure_date" placeholder="departure_date" required>
							</div>
			</div>
			</div>
			</div>
			</div>		
			<br>
			<br>
			<!-- <input type="submit" value="Submit" name="Submit"> -->
			<div class="container col col-lg-3 col-xl-3">
 	         <div class="btn-group">
			 <center><button type="submit" class="btn btn-outline-light" style="width:100px; margin-right: 50px;" name="Submit" value="Submit">Submit</button></center>
			 <center><a href="admin_homepage.php" class="btn btn-outline-light" style="width:100px; margin-right: 50px;">Back</a></center>
			</div>
			</div>
			</div>
			</div>
			</div>
		
		</div>
		</form>
		</div>
		</div>	
		<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>	
	</body>
</html>