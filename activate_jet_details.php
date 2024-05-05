<?php
	session_start();
?>
<html>
	<head>
		<title>
			Activate Aircraft
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
    			margin: 0px 67px
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
		<center>SKYLINE | ACTIVATE AIRCRAFTS</center>
		</h2>
				<form action="activate_jet_details_form_handler.php" method="post">
		<br>
		<center><h2>ENTER THE AIRCRAFT TO BE ACTIVATED</h2></center>
			<div>
			<!-- <?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color:black'>The Aircraft has been successfully activated.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red'>*Invalid Jet ID entered, please enter again.</strong>
						<br>
						<br>";
				}
			?> -->
			<table cellpadding="5" style="padding-left: 20px;">
				<br>
				<tr>
				<center>Enter a valid Jet ID</td></center>
				</tr>
				<br>
				<tr>
				<center><input type="text" name="jet_id" required></td></center>
				</tr>
			</table>
			<br><br><br><br>
			<!-- <input type="submit" value="Activate" name="Activate"> -->
			<div class="container col col-lg-2 col-xl-2">
 	         <div class="btn-group">
			 <center><button type="submit" class="btn btn-outline-light" style="width:100px; margin-right: 10px;" name="Activate" value="Activate">Activate</button></center>
			 <center><a href="admin_homepage.php" class="btn btn-outline-light" style="width:90px; margin-right: 20px;">Back</a></center>
			</div>
			</div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<br><br><center><strong style='color: black'>The Aircraft has been successfully activated.</strong>
						<br><br></center>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<br><br><center><strong style='color:red'>*Invalid Jet ID entered, please enter again.</strong>
						<br><br></center>";
				}
			?>
			</div>				
		</form>
			</div>
			</div>
			<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	</body>
</html>