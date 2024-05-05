<?php
	session_start();
	// if($_SESSION['login_user']==null){
	// 	header('location:index.php');
	// }
?>
<html>
	<head>
		<title>
			Welcome Customer
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
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css"> -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>
	<body>
		
<div class="card bg-white text-dark">
  <img src="images\chombg.png" class="card-img" alt="...">
  <div class="card-img-overlay">
	  <br><br><br><br>
	<div class="container col col-lg-4 col-xl-4">
 	<div class="btn-group">
		<a href="index.php" class="btn btn-outline-dark" style="width:150px; margin-left: 50px;">Home</a>
		<!-- <a href="customer_homepage.php" class="btn btn-outline-dark" style="width:150px; margin-left: 50px;">Dashboard</a> -->
		<a href="pnr.php" class="btn btn-outline-dark" style="width:150px; margin-left: 50px;">Print Ticket</a>
		<a href="logout_handler.php" class="btn btn-outline-dark" style="width:150px; margin-left: 50px;">Logout</a>
	</div>
	</div>
	<br><br><br>
		<?php
			echo "<h2>WELCOME TO SKYLINE ".$_SESSION['login_user']."</h2>";
			require_once('Database Connection file/mysqli_connect.php');
			$query="SELECT count(*),frequent_flier_no,mileage FROM Frequent_Flier_Details WHERE customer_id=?";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"s",$_SESSION['login_user']);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$cnt,$frequent_flier_no,$mileage);
			mysqli_stmt_fetch($stmt);
			if($cnt==1)
			{
				echo "<h4 style='padding-left: 20px;'>Frequent Flier No.: ".$frequent_flier_no."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mileage: ".$mileage." points</h4><br>";
			}
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		?>
		<div class="container col col-lg-11 col-xl-11">
			<div class="btn-group-vertical" role="group" aria-label="Basic outlined example">
				<br>
				<a href="book_tickets.php" class="btn btn-outline-dark">Book Flight Tickets</a>
				<a href="view_booked_tickets.php" class="btn btn-outline-dark">View Booked Flight Tickets</a>
				<a href="pnr.php" class="btn btn-outline-dark">Print Booked Ticket</a>
				<a href="cancel_booked_tickets.php" class="btn btn-outline-dark">Cancel Booked Flight Tickets</a>
				<a href="travelhist.php" class="btn btn-outline-dark">Travel History</a>
			</div>
		</div>
		<!--Following data fields were empty!
			...
			
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS

		-->
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>




