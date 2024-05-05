<?php
	session_start();
?>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

 <body>

  <div class="card bg-dark text-black">
    <img src="images\ucfbg.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <br><br><br><br>
      <div class="container col col-lg-3 col-xl-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <div class="btn-group-vertical" role="group" aria-label="Basic outlined example">
				<h3 class='set_nice_size'><center><u>Upcoming Flights</u></center></h3>
				<?php
					$todays_date=date('Y-m-d');
					require_once('Database Connection file/mysqli_connect.php');
					$query="SELECT flight_no,from_city,to_city,departure_date,arrival_date,departure_time,arrival_time FROM Flight_Details where departure_date>? ORDER BY  departure_date";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"s",$todays_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$flight_no,$from_city,$to_city,$departure_date,$arrival_date,$departure_time,$arrival_time);
					mysqli_stmt_store_result($stmt);
					if(mysqli_stmt_num_rows($stmt)==0)
					{
						echo "<br><h3><center>No upcoming flights!</center></h3>";
					}
					else
					{
						echo "<table cellpadding=\"10\"";
						echo "<p style=\"color:white;\">
						<tr><th>Flight No</th>
						<th>From City</th>
						<th>To City</th>
						<th>Departure Date</th>
						<th>Arrival Date</th>
						<th>Departure Time</th>
						<th>Arrival Time</th>
						</tr>
						</p>";
						while(mysqli_stmt_fetch($stmt)) {
							echo "<tr>
							<td>".$flight_no."</td>
							<td>".$from_city."</td>
							<td>".$to_city."</td>
							<td>".$departure_date."</td>
							<td>".$arrival_date."</td>
							<td>".$departure_time."</td>
							<td>".$arrival_time."</td>
							</tr>";
						}
						echo "</table> <br>";
					}
				?>
      <div class="container col col-lg-3 col-xl-3">
 	         <div class="btn-group">
			 <center><a href="index.php" class="btn btn-outline-light" style="width:100px; margin-right: 50px;">Back</a></center>
			</div>
			</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        </body>
        </html>
       
       

































       
       
        <!-- <a href="index.php" class="btn btn-outline-light">Home</a>
        <?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\" class=\"btn btn-outline-light\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\" class=\"btn btn-outline-light\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\" class=\"btn btn-outline-light\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
        <a href="pnrall.php" class="btn btn-outline-light">Check PNR</a>
        <?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\" class=\"btn btn-outline-light\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\" class=\"btn btn-outline-light\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\" class=\"btn btn-outline-light\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>        <a href="new_user.php" class="btn btn-outline-light">Sign Up</a>
        
      </div>
      </div>
      </div>
    </div>
  </div>
 -->

  
<!-- 
<div class="page">
 <div class="headerpart"></div>
  <div class="linkspart">
   <center>
   <a href="index.html">Home</a> &nbsp&nbsp
<a href="login_page.php">Book Tickets</a>&nbsp&nbsp
<a href="pnrall.php">Check PNR</a>&nbsp&nbsp
<a href="login_page.php">Login</a>&nbsp&nbsp
<a href="new_user.php">Sign Up</a>&nbsp&nbsp
<a href="index.html">Contact us</a>&nbsp&nbsp
<a href="index.html">About Us</a>&nbsp&nbsp



   </center>



 </div>

<div class="bodypart">
<div class="imagepart"></div>
<div class="newspart">
<h2> News & Announcements </h2>
  <div class="news">

    <marquee direction="up" height="100%">
   <h4>How to Book Tickets  </h4> <br>
    <p> Step 1: Sign Up.<br>
Step 2: Then Login with your credetials (ie. Username and password).<br>
Step 3: Enter Station between which you want to travel and date of journey<br>
Step 4: You have select No. Of passangers and Class of Birth ( Economy or Business) .<br>
Step 5: Select preferrable flight :<br>
                          a)Make payemnt<br>
                          b)After payment you got PNR Number<br>
                          c) Print Ticket<br>
                          d)You can check also PNR Status Through PNR Check on Home Page<br>

    <hr>
  
   </marquee>
   <a href="morenews.html">more news...</a>

</div>
  
</div>
<h3> About Airline </h3>
<p> An airline is a company that provides air transport services for traveling passengers and freight. Airlines utilize aircraft to supply these services, and may form partnerships or alliances with other airlines for codeshare agreements. Generally, airline companies are recognized with an air operating certificate or license issued by a governmental aviation body.</p>
</div>

<div class="footerpart">
<center> 2019 All Right Reserved. Airline [ Give credit to author ] </center>
</div>
</div> -->


<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>



</html> -->