<!-- <?php
	session_start(); 
?>
<html>
	<head>
		<title>
			Add Flight Schedule Details
		</title>
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	</head>
	<body>
	<div class="card text-bg-dark">
    <img src="images\admbg5.png" class="card-img" alt="...">
    <div class="card-img-overlay">
	<br><br><br><br><br><br><br>
		<h2>
		<center>SKYLINE | ADD FLIGHT</center>
		</h2>		
	
		<form action="add_flight_details_form_handler.php" method="post">
			<center><h2>ENTER THE FLIGHT SCHEDULE DETAILS</h2></center>
	
    <div class="container col col-lg-6 col-xl-6">
				<form class="px-4 py-3 text-white" method="POST" action="new_user_form_handler.php" id="new_user_from">
					
					<br><br>
					<div class="row row-2">
						<div class="col col-lg-6 col-xl-6">
							
							<br>
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Flight number</label>
							<input type="text" class="form-control" id="exampleDropdownFormEmail1" name="flight_no" placeholder="flight_no" required>
							</div>
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Flight origin</label>
							<input type="text" class="form-control" id="exampleDropdownFormPassword1" name="origin" placeholder="origin" required>
							</div>
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Departure date</label>
							<input type="date" class="form-control" id="exampleDropdownFormEmail1" name="dep_date" placeholder="dep_date" required>
							</div>
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Departure time</label>
							<input type="time" class="form-control" id="exampleDropdownFormEmail1" name="dep_time" placeholder="dep_time" required>
							</div>
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Number of seats in economy</label>
							<input type="number" class="form-control" id="exampleDropdownFormEmail1" name="seats_eco" placeholder="seats_eco" required>
							</div>
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Ticket price(Economy)</label>
							<input type="number" class="form-control" id="exampleDropdownFormEmail1" name="price_eco" placeholder="price_eco" required>
							</div>
						</div>
						
						
						<div class="col col-lg-6 col-xl-6">
							
							<br>
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Jet ID</label>
							<input type="text" class="form-control" id="exampleDropdownFormEmail1" name="jet_id" placeholder="jet_id" required>
							</div>
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Flight destination</label>
							<input type="text" class="form-control" id="exampleDropdownFormEmail1" name="destination" placeholder="destination" required>
							</div>
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Arrival date</label>
							<input type="date" class="form-control" id="exampleDropdownFormEmail1" name="arr_date" placeholder="arr_date" required>
							</div>
						    <div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Arrival time</label>
							<input type="time" class="form-control" id="exampleDropdownFormEmail1" name="arr_time" placeholder="arr_time" required>
							</div>
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Number of seats in business</label>
							<input type="number" class="form-control" id="exampleDropdownFormEmail1" name="seats_bus" placeholder="seats_bus" required>
							</div>
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Ticket price(Business)</label>
							<input type="number" class="form-control" id="exampleDropdownFormEmail1" name="price_bus" placeholder="price_bus" required>
							</div>
						</div>
					</div>
				<br><br>
				<div class="container col col-lg-5 col-xl-5">
 	         <div class="btn-group">
			 <center><button type="submit" class="btn btn-outline-light" style="width:100px; margin-right: 30px;" name="Submit" value="Submit">Submit</button></center>
			 <center><a href="admin_homepage.php" class="btn btn-outline-light" style="width:100px; margin-right: 50px;">Back</a></center>
			</div>
			</div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<br><center><strong style='color: black'>The Flight Schedule has been successfully added.</strong>
						<br>
						<br></center>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<center><strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong>
						<br>
						<br></center>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='err1')
				{
					echo "<center><strong style='color: red'>*The Sum of Business and Economy are less than Total Number of seats in Jet!</strong>
						<br>
						<br></center>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='err2')
				{
					echo "<center><strong style='color: red'>*The Sum of Business and Economy are greater than Total Number of seats in Jet!</strong>
						<br>
						<br></center>";
				}
			
			
			
			?>
			


					
				</form>
			</div>
		</div>
	</div>
</div>
	
	</div>
			</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script>
	// Client-side validation for departure and arrival dates
	document.getElementById('new_user_from').addEventListener('submit', function(event) {
		var departureDate = document.getElementById('departure_date').value;
		var arrivalDate = document.getElementById('arrival_date').value;

		if (arrivalDate <= departureDate) {
			event.preventDefault();
			alert('Arrival date must be after the departure date');
		}
	});
</script>	
</body>
</html>
 



 -->


<!-- 
 <?php
    session_start();
?> -->
<html>
<head>
    <title>
        Add Flight Schedule Details
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="card text-bg-dark">
        <img src="images\admbg5.png" class="card-img" alt="...">
        <div class="card-img-overlay">
            <br><br><br><br><br><br><br>
            <h2>
                <center>SKYLINE | ADD FLIGHT</center>
            </h2>       

            <form action="add_flight_details_form_handler.php" method="post" onsubmit="return validateForm()">
                <center><h2>ENTER THE FLIGHT SCHEDULE DETAILS</h2></center>

                <div class="container col col-lg-6 col-xl-6">
                    <form class="px-4 py-3 text-white" method="POST" action="new_user_form_handler.php" id="new_user_from">

                        <br><br>
                        <div class="row row-2">
                            <div class="col col-lg-6 col-xl-6">

                                <br>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Flight number</label>
                                    <input type="text" class="form-control" id="exampleDropdownFormEmail1" name="flight_no" placeholder="flight_no" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Flight origin</label>
                                    <input type="text" class="form-control" id="exampleDropdownFormPassword1" name="origin" placeholder="origin" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Departure date</label>
                                    <input type="date" class="form-control" id="departure_date" name="dep_date" placeholder="dep_date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Departure time</label>
                                    <input type="time" class="form-control" id="exampleDropdownFormEmail1" name="dep_time" placeholder="dep_time" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Number of seats in economy</label>
                                    <input type="number" class="form-control" id="exampleDropdownFormEmail1" name="seats_eco" placeholder="seats_eco" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Ticket price(Economy)</label>
                                    <input type="number" class="form-control" id="exampleDropdownFormEmail1" name="price_eco" placeholder="price_eco" required>
                                </div>
                            </div>


                            <div class="col col-lg-6 col-xl-6">

                                <br>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Jet ID</label>
                                    <input type="text" class="form-control" id="exampleDropdownFormEmail1" name="jet_id" placeholder="jet_id" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Flight destination</label>
                                    <input type="text" class="form-control" id="exampleDropdownFormEmail1" name="destination" placeholder="destination" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Arrival date</label>
                                    <input type="date" class="form-control" id="arrival_date" name="arr_date" placeholder="arr_date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Arrival time</label>
                                    <input type="time" class="form-control" id="exampleDropdownFormEmail1" name="arr_time" placeholder="arr_time" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Number of seats in business</label>
                                    <input type="number" class="form-control" id="exampleDropdownFormEmail1" name="seats_bus" placeholder="seats_bus" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Ticket price(Business)</label>
                                    <input type="number" class="form-control" id="exampleDropdownFormEmail1" name="price_bus" placeholder="price_bus" required>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="container col col-lg-5 col-xl-5">
                            <div class="btn-group">
                                <center><button type="submit" class="btn btn-outline-light" style="width:100px; margin-right: 30px;" name="Submit" value="Submit">Submit</button></center>
                                <center><a href="admin_homepage.php" class="btn btn-outline-light" style="width:100px; margin-right: 50px;">Back</a></center>
                            </div>
                        </div>
                        <?php
                        if(isset($_GET['msg']) && $_GET['msg']=='success')
                        {
                            echo "<br><center><strong style='color: black'>The Flight Schedule has been successfully added.</strong>
                                <br>
                                <br></center>";
                        }
                        else if(isset($_GET['msg']) && $_GET['msg']=='failed')
                        {
                            echo "<center><strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong>
                                <br>
                                <br></center>";
                        }
                        else if(isset($_GET['msg']) && $_GET['msg']=='err1')
                        {
                            echo "<center><strong style='color: red'>*The Sum of Business and Economy are less than Total Number of seats in Jet!</strong>
                                <br>
                                <br></center>";
                        }
                        else if(isset($_GET['msg']) && $_GET['msg']=='err2')
                        {
                            echo "<center><strong style='color: red'>*The Sum of Business and Economy are greater than Total Number of seats in Jet!</strong>
                                <br>
                                <br></center>";
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    function validateForm() {
        var departureDate = new Date(document.getElementById("departure_date").value);
        var arrivalDate = new Date(document.getElementById("arrival_date").value);

        if (arrivalDate.getTime() <= departureDate.getTime()) {
            alert("Arrival date must be after departure date");
            return false;
        }
        return true;
    }
</script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>






































































































































































		<!-- <?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Flight Schedule has been successfully added.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong>
						<br>
						<br>";
				}
			?> -->
			<!-- <table cellpadding="5">
				<tr>
					<td class="fix_table">Flight Number</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="flight_no" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Origin</td>
					<td class="fix_table">Destination</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="origin" required></td>
					<td class="fix_table"><input type="text" name="destination" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Departure Date</td>
					<td class="fix_table">Arrival Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" required></td>
					<td class="fix_table"><input type="date" name="arr_date" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Departure Time</td>
					<td class="fix_table">Arrival Time</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="time" name="dep_time" required></td>
					<td class="fix_table"><input type="time" name="arr_time" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Number of Seats in Economy Class</td>
					<td class="fix_table">Number of Seats in Business Class</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="number" name="seats_eco" required></td>
					<td class="fix_table"><input type="number" name="seats_bus" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Ticket Price(Economy Class)</td>
					<td class="fix_table">Ticket Price(Business Class)</td>
				</tr>
			</table>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">
						<input type="number" name="price_eco" required>
					</td>
					<td class="fix_table">
						<input type="number" name="price_bus" required>
					</td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Jet ID</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input type="text" name="jet_id" required>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
		</form> -->
		<!--check out addling local host in links and other places

		-->






	  <!-- <div class="container col col-lg-9 col-xl-9"> -->
 	<!-- <div class="btn-group">
		<a href="index.php" class="btn btn-outline-light">Home</a>
		<a href="login_page.php" class="btn btn-outline-light">Book Tickets</a>
		<a href="login_page.php" class="btn btn-outline-light">Login</a>
		<a href="new_user.php" class="btn btn-outline-light">Signup</a>
	</div>
	</div>
    <br><br> -->

		<!-- <div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div> -->


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
    			margin: 0px 200px
			}
		</style> -->

		<!-- <button type="submit" class="btn btn-outline-light" name="Submit" value="Submit">Submit</button>
					<br><br>
					<a class="dropdown-item" href="login_page.php">Already a member? Login</a> -->