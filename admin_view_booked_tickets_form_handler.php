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
    			margin: 0px 390px
			}
			table {
			 border-collapse: collapse; 
			}
			tr/*:nth-child(3)*/ {
			 border: solid thin;
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
		<center>SKYLINE | VIEW BOOKED TICKETS</center>
		</h2>
		<!-- <div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div> -->
		<br><center><h2>LIST OF BOOKED TICKETS FOR THE FLIGHT</h2></center>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['flight_no']))
				{
					$data_missing[]='Flight No.';
				}
				else
				{
					$flight_no=trim($_POST['flight_no']);
				}
				if(empty($_POST['departure_date']))
				{
					$data_missing[]='Departure Date';
				}
				else
				{
					$departure_date=$_POST['departure_date'];
				}

				if(empty($data_missing))
				{
					require_once('Database Connection file/mysqli_connect.php');
					$query="SELECT pnr,date_of_reservation,class,no_of_passengers,payment_id,customer_id FROM Ticket_Details where flight_no=? and journey_date=? and booking_status='CONFIRMED' ORDER BY class";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flight_no,$departure_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$pnr,$date_of_reservation,$class,$no_of_passengers,$payment_id,$customer_id);
					mysqli_stmt_store_result($stmt);
					if(mysqli_stmt_num_rows($stmt)==0)
					{
						echo "<center><br><br><br><br><h3>No booked tickets information is available!</h3></center>";
					}
					else
					{
						echo "<table cellpadding=\"10\"";
						echo "<tr><th>PNR</th>
						<th>Date of Reservation</th>
						<th>Class</th>
						<th>No. of Passengers</th>
						<th>Payment ID</th>
						<th>Customer ID</th>
						</tr>";
						while(mysqli_stmt_fetch($stmt)) {
        					echo "<tr>
							<td>".$pnr."</td>
							<td>".$date_of_reservation."</td>
							<td>".$class."</td>
							<td>".$no_of_passengers."</td>
							<td>".$payment_id."</td>
							<td>".$customer_id."</td>
        					</tr>";
    					}
    					echo "</table> <br>";
    				}
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					// else
					// {
					// 	echo "Submit Error";
					// 	echo mysqli_error();
					// }
				}
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "<br><br><br>Submit request not received";
			}
		?>
<!-- JavaScript Bundle with Popper -->
<br>
<br>
<br>
<br>
<br>
<div class="container col col-lg-35 col-xl-35">
 	         <div class="btn-group">
			 <center><a href="admin_homepage.php" class="btn btn-outline-light" style="width:100px; margin-right: 50px;">Back</a></center>
			</div>
			</div>
		</div>
		</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>