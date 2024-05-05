<?php
	session_start();
?>
<html>
		<head>
		<title>
			Welcome Administrator
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	</head>
	<body>
		<div class="card text-bg-dark">
  <img src="images\admnbg.png" class="card-img" alt="...">
  <div class="card-img-overlay">
		<br><br><br><br><br>
		<h2 id="title">
		<center>SKYLINE | ADMIN MENU</center>
	    </h2>
		<br>
		<h2><center><u>Welcome Administrator!</u></center></h2>
		<br><center>
		<table cellpadding="5">
		<tr>
				<td class="admin_func"><a class="nav-link" href="add_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Add Aircrafts Details</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a class="nav-link" href="activate_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Activate Aircraft</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a class="nav-link" href="add_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Add Flight Schedule Details</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a class="nav-link" href="admin_view_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> View List of Booked Tickets for a Flight</a>
				</td>
			</tr>
			<!-- <tr>
				<td class="admin_func"><a href="modify_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Modify Flight Schedule Details</a>
				</td>
			</tr> -->
			<tr>
				<td class="admin_func"><a class="nav-link" href="delete_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Delete Flight Schedule Details</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a class="nav-link" href="deactivate_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Deactivate Aircraft</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a class="nav-link" href="flights_between_dates_report.php"><i class="fa fa-plane" aria-hidden="true"></i> Flights between dates report</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a class="nav-link" href="flights_between_cities_report.php"><i class="fa fa-plane" aria-hidden="true"></i> Flights between cities report</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a class="nav-link" href="jet_report.php"><i class="fa fa-plane" aria-hidden="true"></i> Jet report</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a class="nav-link" href="payment_report.php"><i class="fa fa-plane" aria-hidden="true"></i> Payment report</a>
				</td>
			</tr>
		</table></center>
		<br>
		<div class="container col col-lg-6 col-xl-6">
 	<div class="btn-group">
		<a href="index.php" class="btn btn-outline-light" style="width:150px; margin-left: 50px;">Home</a>
		<a href="login_page.php" class="btn btn-outline-light" style="width:150px; margin-left: 50px;">Book Tickets</a>
		<a href="logout_handler.php" class="btn btn-outline-light" style="width:150px; margin-left: 50px;">Logout</a>
	</div>
</div>
</div>	
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	</body>

</html>