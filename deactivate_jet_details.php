<?php
	session_start();
?>
<html>
	<head>
		<title>
			Deactivate Aircraft
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
		<center>SKYLINE | DELETE FLIGHT</center>
		</h2>
		<!-- <div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div> -->
		<!-- <form action="deactivate_jet_details_form_handler.php" method="post">
		<table cellpadding="5" style="padding-left: 20px;">
				<tr>
					<td class="fix_table">Enter a valid Jet ID</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="jet_id" required></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Deactivate" name="Deactivate">
			</div> -->
			<br><center><h2>ENTER THE AIRCRAFT TO BE DEACTIVATED</h2></center>
			<div>
			<br><br>
			<div class="container col col-lg-5 col-xl-5">
				<form class="px-4 py-3 text-white" method="POST" action="deactivate_jet_details_form_handler.php" id="new_user_from">
					<div class="row row-2">
						<div class="col col-lg-13 col-xl-13">
						<div class="mb-3">
							<label for="exampleDropdownFormEmail1" class="form-label">Enter a valid jet ID</label>
							<input type="text" class="form-control" id="exampleDropdownFormEmail1" name="jet_id" placeholder="jet_id" required>
							</div>
						
			</div>
			</div>
			</div>				
			<div class="container col col-lg-3 col-xl-3">
 	         <div class="btn-group">
			 <center><button type="Deactivate" class="btn btn-outline-light" style="width:100px; margin-right: 50px;" name="Deactivate" value="Deactivate">Submit</button></center>
			 <center><a href="admin_homepage.php" class="btn btn-outline-light" style="width:100px; margin-right: 50px;">Back</a></center>
			</div>
			</div>
			
		
		
		
		
		
		
		
						<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<center><br><br><strong style='color: black'>The Aircraft has been successfully deactivated.</strong>
						<br>
						<br></center>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<center><br><br><strong style='color:red'>*Invalid Jet ID entered, please enter again.</strong>
						<br>
						<br></center>";
				}
			?>
			<!-- <table cellpadding="5" style="padding-left: 20px;">
				<tr>
					<td class="fix_table">Enter a valid Jet ID</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="jet_id" required></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Deactivate" name="Deactivate">
			</div>
		</form> -->
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	</body>
</html>