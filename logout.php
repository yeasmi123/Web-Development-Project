<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Hotel Reservation System</title>
	<link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	 
</head>
<body>
<div id="wrapper"><!-- #wrapper -->

	<nav><!-- top nav -->
		<div class="menu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="index.html">About</a></li>
 				<li><a href="index.html">Contact Us</a></li>
			</ul>
		</div>
	</nav><!-- end of top nav -->
	
	<header><h1><a href="#">Hotel Reservation System</a></h1>	</header>
	
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
			
        		
							
<?php
  session_start();
  
  
  $old_user = $_SESSION['user'];
 
  if (!empty($old_user))
  {
    
	unset($_SESSION['user']);
  	session_destroy();

	echo 'Logged out.<br />';
  }
  else
  {
    
    echo 'You were not logged in. <br />'; 
  }
?> 
<br>
<a href="index.html">Back to main page</a><br><br><br><br>


							
						
						
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
