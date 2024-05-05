<?php
	session_start();
?>
<html>
	<head>
		<title>
			Delete Flight Schedule Details
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 10px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 215px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 30px;
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
		<form action="delete_flight_details_form_handler.php" method="post">
			<br><center><h2>ENTER THE FLIGHT SCHEDULE TO BE DELETED</h2></center>
			<div>
			<!-- <?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color:green; padding-left:20px;'>The Flight Schedule has been successfully deleted.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red; padding-left:20px;'>*Invalid Flight No./jet_ID, please enter again.</strong>
						<br>
						<br>";
				}
			?> -->
		
			<br><br>
			<div class="container col col-lg-4 col-xl-4">
				<form class="px-4 py-3 text-white" method="POST" action="new_user_form_handler.php" id="new_user_from">
					<div class="row row-2">
						<div class="col col-lg-12 col-xl-12">
						<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Flight number</label>
							<input type="text" class="form-control" id="exampleDropdownFormEmail1" name="flight_no" placeholder="flight_no" required>
							</div>
						<div class="col col-lg-12 col-xl-12">
							<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Jet ID</label>
							<input type="text" class="form-control" id="exampleDropdownFormEmail1" name="jet_id" placeholder="jet_id" required>
							</div>
			</div>
			</div>
			</div>
			</div>		
			<br><br><br>
			<div class="container col col-lg-3 col-xl-3">
 	         <div class="btn-group">
			 <center><button type="submit" class="btn btn-outline-light" style="width:100px; margin-right: 50px;" name="Delete" value="Delete">Delete</button></center>
			 <center><a href="admin_homepage.php" class="btn btn-outline-light" style="width:100px; margin-right: 50px;">Back</a></center>
			</div>
			</div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<br><center><strong style='color:black; padding-left:20px;'>The Flight Schedule has been successfully deleted.</strong>
						<br>
						<br></center>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<br><center><strong style='color:red; padding-left:20px;'>*Invalid Flight No./jet_ID, please enter again.</strong>
						<br>
						<br></center>";
				}
			?>
			
		</div>
			</div>
			</div>
		
		
		</form>
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>			
	</body>
</html>