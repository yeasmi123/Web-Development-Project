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

require_once('functions.php');

session_start();
	

	$url = $_SESSION['last_page_visited'];
	
	$username = $_POST['username'];
    $passwd = $_POST['passwd'];
	
	@ $db = new mysqli('localhost', 'root', '', 'priceline');
	
	 if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }


    if (login($username, $passwd)) {
      
      $_SESSION['user'] = $username;
	  
	
	  
	 echo "</strong><br />Welcome to the booking page  ";
     echo stripslashes($_SESSION['user']);
	 
	 $query1 = 'select customerid from customers '."where Username = '$username'";
     $result1 = $db->query($query1);
     $num_results1 = $result1->num_rows;
     for ($i=0; $i <$num_results1; $i++) {
		$row1 = $result1->fetch_assoc();
	    $_SESSION['customerid'] = $row1['customerid'];
	   
  }
	 
	header("Location: http://localhost/Project_hotel/booking_after_login.php");
	 

   } else {
      
      echo "<p>You could not be logged in.<br/>
            You must be logged in to view this page.</p>";
    
      exit;
    }
	@ $db = new mysqli('localhost', 'root', '', 'priceline');
	
	

  $result1->free();  

?>
							
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
						<li><a href="logout.php">Logout</a></li>
					 
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