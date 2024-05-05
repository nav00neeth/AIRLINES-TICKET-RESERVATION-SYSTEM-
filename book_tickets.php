<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Available Flights
		</title>
		<!-- <style>
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
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css"> -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>
	<body>
	<div class="card bg-white text-dark">
  <img src="images\bookticbg1.png" class="card-img" alt="...">
  <div class="card-img-overlay">
<br> 
  <div class="container col col-lg-7 col-xl-7">
 	<div class="btn-group">
		<a href="customer_homepage.php" class="btn btn-dark" style="width:150px; margin-left: 50px;">Home</a>
		<a href="customer_homepage.php" class="btn btn-dark" style="width:150px; margin-left: 50px;">Book Tickets</a>
		<a href="logout_handler.php" class="btn btn-dark" style="width:150px; margin-left: 50px;">Login</a>
	</div>
	</div>
	<div class="container col col-lg-10 col-xl-10">
				<form class="px-0 py-5 text-dark" method="POST" action="view_flights_form_handler.php">
					<br><br><br><br><br>
					<h1><center>SEARCH FOR AVAILABLE FLIGHTS</center></h1>
					<br>
					<div class="row row-2">
						<div class="col col-lg-4 col-xl-4">
							<div class="mb-3">
								<label for="exampleDropdownFormEmail1" class="form-label">Enter the Origin</label>
								<input list="origins" class="form-control" id="exampleDropdownFormEmail1" name="origin" placeholder="From" required>
								<datalist id="origins">
									<option value="bangalore">
								</datalist>
							</div>
							<div class="mb-3">
								<label for="exampleDropdownFormPassword1" class="form-label">Enter the Departure Date</label>
								<input type="date" class="form-control" id="exampleDropdownFormPassword1" name="dep_date" placeholder="date" min= required>
							</div>
							<div class="mb-3">
								<label for="exampleDropdownFormEmail1" class="form-label">Enter the class</label>
								<input list="class" class="form-control" id="exampleDropdownFormEmail1" name="class" placeholder="class" required>
								<datalist id="class">
									<option value="economy">
									<option value="business">
								</datalist>
							</div>
						</div>
						<div class="col col-lg-4 col-xl-4">
							<div class="mb-3">
								<label for="exampleDropdownFormEmail1" class="form-label">Enter the destination</label>
								<input list="destinations" class="form-control" id="exampleDropdownFormEmail1" name="destination" placeholder="To" required>
								<datalist id="destinations">
									<option value="mumbai">
									<option value="mysore">
									<option value="mangalore">
									<option value="chennai">
									<option value="hyderabad">
								</datalist>
							</div>
							<div class="mb-3">
								<label for="exampleDropdownFormEmail1" class="form-label">Enter number of passengers</label>
								<input type="text" class="form-control" id="exampleDropdownFormEmail1" name="no_of_pass" placeholder="Eg. 5" required>
							</div>
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-dark" name="Search" value="Search available flights">Search for available flights</button>
					
				</form>
			</div>
		</div>
	</div>
</div>

		<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>



	
		<!-- <form action="view_flights_form_handler.php" method="post">
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From" required>
  						<datalist id="origins">
  						  	<option value="bangalore">
  						</datalist> -->
						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<!-- <td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="mumbai">
  						  	<option value="mysore">
  						  	<option value="mangalore">
  						  	<option value="chennai">
  						  	<option value="hyderabad">
  						</datalist> -->
						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
				<!-- </tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Departure Date</td>
					<td class="fix_table">Enter the No. of Passengers</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" min=
						<?php 
							$todays_date=date('Y-m-d'); 
							echo $todays_date;
						?> 
						max=
						<?php 
							$max_date=date_create(date('Y-m-d'));
							date_add($max_date,date_interval_create_from_date_string("90 days")); 
							echo date_format($max_date,"Y-m-d");
						?> required></td>
					<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Class</td>
				</tr>
				<tr>
					<td class="fix_table">
						<select name="class">
  							<option value="economy">Economy</option>
  							<option value="business">Business</option>
  						</select>
  					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Search for Available Flights" name="Search">
		</form> -->
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	<!-- </body>
</html>
 -->


 <!-- <?php 
										$todays_date=date('Y-m-d'); 
										echo $todays_date;
									?> 
									max=
									<?php 
										$max_date=date_create(date('Y-m-d'));
										date_add($max_date,date_interval_create_from_date_string("90 days")); 
										echo date_format($max_date,"Y-m-d");
									?> -->



		
