<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Online Hotel Reservation System</title>
	<link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	 
</head>
<body>
<div id="wrapper"><!-- #wrapper -->

	<nav><!-- top nav -->
		<div class="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
 				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
	</nav><!-- end of top nav -->
	
	<header><h1><a href="#">Hotel Reservation System </a></h1>	</header>
	
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
			
        		<article>
        			<h2><a href="#">Five star stay at affordable price</a></h2>

<?php
 
  session_start();
  require_once('functions.php');
  $conn = db_connect();
  $BookingDate = $_POST['BookingDate'];
  $CheckInDate = $_POST['CheckInDate'];
  $CheckOutDate = $_POST['CheckOutDate'];
  $No_OfNights = $_POST['No_OfNights'];
  $customerid = $_SESSION['customerid'];
  $Hotelid = $_SESSION['Hotelid'];
  $CreditCardNumber = $_POST['CreditCardNumber'];
  $CardType = $_POST['CardType'];
  $CreditCardName = $_POST['CreditCardName'];
  $ExpirationMonth = $_POST['ExpirationMonth'];
  $ExpirationYear = $_POST['ExpirationYear'];
  $RoomPrice = $_SESSION['RoomPrice'];
  $Bookingid = null;
  

  if(!$BookingDate || !$CheckInDate || !$CheckOutDate || !$No_OfNights || !$CardType ||  !$CreditCardNumber || !$CreditCardName ||
     !$ExpirationMonth || !$ExpirationYear) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
	 
	}	 
else 
	
	{  	 
	
	$query2 = "insert into credit_card_details values
            ('".$customerid."', '".$CardType."','".$CreditCardNumber."', '".$CreditCardName."', '".$ExpirationMonth."',
             '".$ExpirationYear."')";
			 
	$result2 = $conn->query($query2);		 
	
	$query = "insert into booking values
            ('".$Bookingid."','".$BookingDate."','".$CheckInDate."', '".$CheckOutDate."', '".$No_OfNights."',
             '".$customerid."', '".$Hotelid."')";
		
	$result = $conn->query($query);
	 
	$query1 = "select Bookingid from booking where
               customerid = '".$customerid."' and Hotelid = '".$Hotelid."'";
            

	$result1 = $conn->query($query1);
	$num_results1 = $result1->num_rows;
	for ($i=0; $i <$num_results1; $i++) {
	  $row1 = $result1->fetch_assoc();
	  $_SESSION['Bookingid'] = $row1['Bookingid'];
	
  
  }  	
      echo  "<p> Your room has been booked. Your Booking id is ".$_SESSION['Bookingid']. ". Please provide this id at the hotel during check-in.</p>";
		
				 $TotalPrice = $RoomPrice * $No_OfNights;
  				echo "<p>Your total amount paid is: " .$TotalPrice." </p>";
		echo "<p> Thank you for choosing this site for your Hotel Reservation. </p>";
	
		      
   }
?>
<a href="logout.php">Logout</a><br />
</article>
				<br>		
        		<article>
							<h2><a href="#">Summer Specials </a></h2>
							<p> Summer is fun time and time to enjoy nature especially after a harsh winter in North-east of US.</p>
							<p> Enjoy Summer in New York with our special discounted rates at Five Star hotels</p><br><br><br>
							<marquee>This project has been designed and developed by Farah Shah, Alfa Yeasmin !</marquee>
						</article> 
						
			</section><!-- end of #content -->

		<aside id="sidebar"><!-- sidebar -->
				<h3>Quick Links</h3>
					<ul>
						<li><a href="index.html">Search Hotel</a></li>
						<li><a href="booking.php">Existing Customer Login</a></li>
						<li><a href="customer_registration_form.php">New Member Registration</a></li>
					 
					</ul>
					
				<h3>Hotel Lobby</h3>
					<img src="images/photo1.jpg" alt="" /><br /><br />

				<h3>Connect With Us</h3>
					<ul>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">LinkedIn</a></li>
						<li><a href="#">Flickr</a></li>
					</ul>

		</aside><!-- end of sidebar -->

	</section><!-- end of #main content and sidebar-->

	<footer>
		<section id="footer-area">

			<section id="footer-outer-block">
									 

			</section><!-- end of footer-outer-block -->

		</section><!-- end of footer-area -->
	</footer>



	
	
</div><!-- #wrapper -->
<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>

