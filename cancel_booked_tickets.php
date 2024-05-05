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
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
	</head>
	<body>
	<div class="card bg-dark text-dark">
			<img src="images\cancbg.png" class="card-img" alt="...">
			<div class="card-img-overlay">
			<br><br><br>
			<div class="container col col-lg-7 col-xl-7">
				<div class="btn-group">
					<a href="customer_homepage.php" class="btn btn-light" style="width:150px; margin-left: 60px;">Home</a>
					<a href="customer_homepage.php" class="btn btn-light" style="width:150px; margin-left: 60px;">Dashboard</a>
					<a href="logout_handler.php" class="btn btn-light" style="width:150px; margin-left: 60px;">Logout</a>
				</div>
			</div>
			<br><br><br><br><br>
		<form id="index" action="cancel_booked_tickets_form_handler.php" method="post">
			
		<center><h2>CANCEL BOOKED TICKETS</h2></center>
		<br>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid PNR, please enter PNR again</strong>
						<br>
						<br>";
				}
			?>

			<div class="container">
                <div class="col col-lg-11">
                    <center>
                        <input type="text" id="u_id" name="pnr" class="form-control" style="width:300px; margin-left: 90px;" placeholder="Enter The PNR Number" required><br>
                        <input type="submit" id="u_sub" name="Cancel_Ticket" value="Cancel Ticket" class="toggle btn btn-primary" style="width:200px; margin-left: 150px;">
                    </center>
                </div>
            </div>

				<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	</body>
</html>