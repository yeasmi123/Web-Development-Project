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
							
							<img src="images/room1.jpg" alt="" class="alignright" />
					
				</article>
				
				
<!--//<html>
<head>
  <title>Hotel Search</title>
</head>
<body>
<h1>Hotel Search Results</h1>// -->
<?php
	require_once('functions.php');
	session_start();
  
	$ZipCode = $_POST['ZipCode'];
	$_SESSION['ZipCode'] = $ZipCode;
	
 
  
    if (!$ZipCode) {
     echo 'You have not entered a Zip Code. Please enter a Zip Code.';
     exit;
  }

    @ $db = new mysqli('localhost', 'root', '', 'priceline');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }
else {
	$query = 'select * from hotel '."where ZipCode = '$ZipCode'";
	$result = $db->query($query);
	
	if (!$result) {
		echo "No hotels found in this Zipcode";
		exit;
	}
  
	else {

		$num_results = $result->num_rows;
		echo "<p>Number of Hotels found in ZipCode $ZipCode is ". $num_results."</p>";

		for ($i=0; $i <$num_results; $i++) {
		$row = $result->fetch_assoc();
			echo "<p><strong>".($i+1).". Name: ";
			echo htmlspecialchars(stripslashes($row['Name']));
			echo "</strong><br />Address: ";
			echo stripslashes($row['Address']);
			echo "<br />City: ";
			echo stripslashes($row['City']);
			echo "<br />PhoneNumber: ";
			echo stripslashes($row['PhoneNumber']);
			echo "<br />EmailAddress: ";
			echo stripslashes($row['EmailAddress']);
			echo "</p>";
		}
   $result->free();
  
  
	$query1 = 'select Hotelid from hotel '."where ZipCode = '$ZipCode'";
	$result1 = $db->query($query1);
	$num_results1 = $result1->num_rows;
	for ($i=0; $i <$num_results1; $i++) {
	  $row1 = $result1->fetch_assoc();
	  $_SESSION['Hotelid'] = $row['Hotelid'];
	
	}
  $result1->free();  
    
  $db->close();
  }
}
?>
<p> Do you want to see if rooms are available in this hotel ? </p> <a href="search_hotel_room.php">Search Rooms! </a>
    <article>
			<h2><a href="#">Summer Specials </a></h2>
					<p> Summer is fun time and time to enjoy nature especially after a harsh winter in North-east of US.</p>
					<p> Enjoy Summer in New York with our special discounted rates at Five Star hotels</p><br><br>
	     			<marquee>This project has been designed and developed by Farah Shah, Alfa Yeasmin !</marquee>
	</article> 
</section>
<aside id="sidebar"><!-- sidebar -->
				<h3>Quick Links</h3>
					<ul>
						<li><a href="index.html">Go to Home Page</a></li>
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


</div>
</body>
</html>

