<!-- <?php

    session_start();
    error_reporting(0);

$con=mysqli_connect("localhost","root","","airline_reservation");
$q=mysqli_query($con,"select pnr from ticket_details where pnr='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['pnr'];
$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM passengers WHERE pnr='".$_SESSION['user']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
         <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
        
        
    </head>
    <body>
 
            </div>             
                <center><font style="font-family:Verdana; font-size:18px;">
                   Airport Authority Of India<br>
			Passanger Details against PNR Number
                    </font></center>
                    <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana">
                <br>
                <br>
                <center><font style="font-family:Arial Black; font-size:20px;"></font></center>
                </td>
                    <td colspan="2" width="3%" >
                   <?php
                  
                    $picfile_path ='images/';
                    
                    $result1 = mysqli_query($con,"SELECT * FROM passengers where ='".$_SESSION['user']."'");
                        
                   ?>
                        </td>
                 </tr>       
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">PNR : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $stname;?> </td>
                 </tr>
                 
                 
                <tr>
                    <td> <font style="font-family: Verdana;">Passenger No : </font> </td>
                    <td colspan="3"> <?php echo ''. $row[0]. '   ' ?>
                </tr>
                  
                  <tr>
                    <td > <font style="font-family: Verdana;"> Name</font>  </td>
                    <td colspan="3"> <?php echo ''. $row[2]. '   ' ?><br>
                    <?php echo ' Age - '.$row[3] ?></td>
                  </tr>
                
                  <tr>
                    <td><font style="font-family: Verdana;"> Gender</font></td>
                    <td  colspan="3"><?php echo $row[4] ?> </td>
                   </tr>
                 
                  <tr>
                    <td> <font style="font-family: Verdana;">Meail Choice</font></td>
                    <td> <?php echo $row[5] ?></td>
                    <td><font style="font-family: Verdana;"> Frequent Flier No. (If any)</font></td>
                    <td> <?php echo $row[6] ?> </td>
                  </tr>
                
                
                
                 
                       </table></center>
                               </div>
                            </div>
            </div>
        <?php
              }
        ?>
    <center> <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
<CENTER><a href="pnr.php">Check other PNR</a></center>
    </body>
</html>


 
            
    </body>
</html> -->



<?php

    session_start();
    error_reporting(1);
  ?>

  <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
         <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
        
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
    </head>
  <?php

$con=mysqli_connect("localhost","root","","airline_reservation");
$q=mysqli_query($con,"select pnr,flight_no,journey_date, class, booking_status, no_of_passengers, lounge_access, priority_checkin, insurance, payment_id, customer_id from ticket_details where pnr='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['pnr'];
$flight_no= $n['flight_no'];
$journey_date= $n['journey_date'];
$class= $n['class'];
$booking_status= $n['booking_status'];
$no_of_passengers= $n['no_of_passengers'];
$lounge_access= $n['lounge_access'];
$priority_checkin= $n['priority_checkin'];
$insurance= $n['insurance'];
$payment_id= $n['payment_id'];
$customer_id= $n['customer_id'];




$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM passengers WHERE pnr='".$_SESSION['user']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>

<!-- <hr style="border: 1px solid black;border-style: dashed;"> -->
<center><h1>Airport Authority of India</h1></center>
<center><h1>Boarding Pass - Flight Reservation Slip</h1></center><h4><?php echo $booking_status;?></h4>
<br>
<td style="width:6%;"> <p class="font-monospace;">PNR: </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $id;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:6%;"> <p class="font-monospace;">Flight No : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $flight_no;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <p class="font-monospace;">Date of journey : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $journey_date;?> </td><br>
<td style="width:4%;"> <p class="font-monospace;">Class : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $class;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <p class="font-monospace;">Payment ID : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $payment_id;?> </td><br>
<td style="width:4%;"> <p class="font-monospace;">Lounge Access : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $lounge_access;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <p class="font-monospace;">Priority Checkin : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $priority_checkin;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <p class="font-monospace;">Insurance : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $insurance;?> </td><br>
<!-- <td style="width:4%;"> <p class="font-monospace;">Booked By (Username) : </font> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <td style="width:8%;" colspan="3"> <?php echo $customer_id;?> </td><br> -->
<td style="width:4%;"> <p class="font-monospace;">Status: </font> </td>
                    <td style="width:58%;" colspan="3"> <?php echo $booking_status;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <p class="font-monospace;">No. of Passengers: </font> </td>
                    <td style="width:58%;" colspan="3"> <?php echo $no_of_passengers;?> </td>

    <body>
                 
                
        </div>
        <center><h1>BOOKED!!!</h1></center>
        <!-- <center><img src='images/maxx.jpg' class='img-thumbnail' width='1200px' style='height:80px;'></center>
          -->
  <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana">
                       
                <br>
                <br>
                <center><font style="font-family:Arial Black; font-size:20px;">
		
                   </font></center>
                </td>
                    <td colspan="2" width="3%" >
                   <?php
                  
                    $picfile_path ='images/';
                    $result1 = mysqli_query($con,"SELECT * FROM passengers where pnr='".$_SESSION['user']."'");
                   $row1 = mysqli_fetch_array($result1)  ; 
                    
                    
                        $picsrc=$picfile_path.$row1['s_pic'];
                        
                        // echo "<center><img src='images/shutterstock_2.jpg' class='img-thumbnail' width='180px' style='height:180px;'></center>";
                   ?>
                        </td>
                 </tr>   


    
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">PNR : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $stname;?> </td>
                 </tr>
                 
                 
                <tr>
                    <td> <font style="font-family: Verdana;">Passenger No : </font> </td>
                    <td colspan="3"> <?php echo ''. $row[0]. '   ' ?>
                </tr>
                  
                  <tr>
                    <td > <font style="font-family: Verdana;"> Name</font>  </td>
                    <td colspan="3"> <?php echo ''. $row[2]. '   ' ?><br>
                    <?php echo ' Age - '.$row[3] ?></td>
                  </tr>
                
                  <tr>
                    <td><font style="font-family: Verdana;"> Gender</font></td>
                    <td  colspan="3"><?php echo $row[4] ?> </td>
                   </tr>
                 
                  <tr>
                    <td> <font style="font-family: Verdana;">Mail Choice</font></td>
                    <td> <?php echo $row[5] ?></td>
                    <!-- <td><font style="font-family: Verdana;"> Frequent Flier No. (If any)</font></td>
                    <td> <?php echo $row[6] ?> </td> -->

                  </tr>
                
                
                
                 
                       </table></center>
                               </div>
                            </div>
            </div>
        <?php
              }
        ?>
 <p> 
<br><br>
<center><input type="submit" id="print" class="toggle btn btn-primary" style="width:100px; margin-left: 50px;" value="Print" onclick="printpage();"></center>
<br><center><h3><a class="print_hide" href="pnr.php">Check other PNR</a></center></h3>
<center><a href="customer_homepage.php" class="btn btn-primary" style="width:100px; margin-left: 50px;">BACK</a></center>
</p>
   <style>
     @media print {
      .print_hide{
        display:none;
      }
     }
   </style> 
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
</body>
</html>




                     