<?php
	session_start();
?>
<html>
	<head>
		<title>
			Add Aircrafts Details
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
    			margin: 0px 60px
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
			<center>SKYLINE | ADD AIRCRAFTS</center>
		</h2>
		<form action="add_jet_details_form_handler.php" method="post">
			<br>
			<h2><center>ENTER THE AIRCRAFTS DETAILS</center></h2>
			<div>
			<br>
			<!-- <?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: black'>The Aircraft has been successfully added.</strong>
						<br><br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red'>*Jet ID already exists, please enter a new Jet ID.</strong>
						<br><br>";
				}
			?> -->
			<table cellpadding="5">
			<tr>
				<center>Enter a valid Jet ID</center>
				</tr>
				<tr>
				<center><input type="text" name="jet_id" required></center>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
				<center>Enter the Jet Type/Model</center>
				</tr>
				<tr>
				<center><input type="text" name="jet_type" required></center>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
				<center>Enter the total capacity of the Jet</center>
				</tr>
				<tr>
				<center><input type="number" name="jet_capacity" required></center>
				</tr>
			</table>
			<br>
			<br>
			 <!-- <center><input class="btn btn-outline-light" style="width:150px; margin-left: 50px;" type="submit" value="submit" name="Submit"></center> -->
			 <div class="container col col-lg-3 col-xl-3">
 	         <div class="btn-group">
			 <button type="submit" class="btn btn-outline-light" style="width:100px; margin-right: 80px;" name="Submit" value="Submit">Submit</button>
			 <a href="admin_homepage.php" class="btn btn-outline-light" style="width:100px; margin-right: 50px;">Back</a>
			</div>
			</div>

			 <?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<center><br><strong style='color: black'>The Aircraft has been successfully added.</strong>
						<br><br></center>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<center><br><strong style='color:red'>*Jet ID already exists, please enter a new Jet ID.</strong>
						<br><br></center>";
				}
			?>

			<!-- <center><input type="submit" class="btn btn-outline-light" name="submit" value="submit">Submit</input></center> -->
			</div>
		</form>
			</div>
			</div>
			<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	</body>
</html>