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
				
				

<?php
	require_once('functions.php');
	session_start();
	$pagedata = pathinfo($_SERVER['REQUEST_URI']);
	$_SESSION['last_page_visited'] = $pagedata['basename'];
	$customerid = $_SESSION['customerid'] ;
	
	 echo "</strong><br />Welcome to the booking page  ";
     echo stripslashes($_SESSION['user']);
?>
<br />
<br />
<?php
  
	$ZipCode = $_SESSION['ZipCode'];
	$Hotelid = $_SESSION['Hotelid'];
	
	@ $db = new mysqli('localhost', 'root', '', 'priceline');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "select * from room where Hotelid = '".$Hotelid."'";
 
  $result = $db->query($query);

  $num_results = $result->num_rows;

  for ($i=0; $i <$num_results; $i++) {
   $row = $result->fetch_assoc();
     echo "<p> Number of rooms found ".($i+1).". <br />";
	 echo "Description: ";
     echo htmlspecialchars(stripslashes($row['Description']));
     echo "<br />Room Name: ";
     echo stripslashes($row['RoomName']);
     echo "<br />Room Price: ";
     echo stripslashes($row['RoomPrice']);
     echo "</p>";
 }
   $result->free();
  
  
  $db->close();

?>
<p> Do you want to Enjoy a luxury stay in this hotel ? </p> <a href="card_payment_form.php">Enter booking and card details </a>
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
