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
        			<h1><a href="#"></a></h1>
					<p> Welcome to the administrator page ! </p>
					<form action="insert_hotel_room.php" method="post">
					<table border="0">
						<tr>
							<td>Hotel Id:</td>
								<td><input type="text" name="Hotelid" size="16" maxlength="16" /></td>
							</tr>
						<tr>
							<td>RoomQuantity:</td>
								<td><input type="text" name="RoomQuantity"  size="16" maxlength="16" /></td>
							</tr>
						<tr>
							<td>Description:</td>
								<td><input type="text" name="Description"  size="16" maxlength="16" /></td>
							</tr>
						<tr>
							<td>RoomName:</td>
								<td><input type="text" name="RoomName"  size="16" maxlength="16" /></td>
							</tr>
						<tr>
							<td>RoomPrice:</td>
								<td><input type="text" name="RoomPrice"  size="16" maxlength="16" /></td>
							</tr>
						<tr><td colspan=2 align="center"><input type="submit" value="Add Hotel Room"></td>
							</tr>		
						</table>
					</form>
				<a href="logout.php">Logout</a><br />
<! -- -->
		</article>
	
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
