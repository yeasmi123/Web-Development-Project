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
							
							<form action="card_payment.php" method="post">
							<p> All dates should in the format mm/dd/yy </p>
								<table border="0">
									<tr>
										<td>Booking Date </td>
											<td><input type="text" name="BookingDate" maxlength="50" size="25"></td>
											</tr>
										<tr><td>Check in Date </td>
											<td><input type="text" name="CheckInDate" maxlength="50" size="25"></td>
											</tr>
										<tr><td>Check Out Date </td>
											<td><input type="text" name="CheckOutDate" maxlength="50" size="25"></td>
											</tr>
										<tr><td>Number of Nights</td>
											<td><input type="text" name="No_OfNights" maxlength="50" size="25"></td>
											</tr>	
										<tr><td>Card Type</td>
											<td><input type="text" name="CardType" maxlength="50" size="25"></td>
											</tr>
										<tr><td>Credit Card Number</td>
											<td><input type="text" name="CreditCardNumber" maxlength="50" size="25"></td>
											</tr>
									<tr><td>Credit Card Name</td>
											<td><input type="text" name="CreditCardName" maxlength="50" size="25"></td>
											</tr>
									<tr><td>Expiration Month</td>
											<td><input type="text" name="ExpirationMonth" maxlength="50" size="25"></td>
											</tr>
									<tr><td>Expiration Year</td>
											<td><input type="text" name="ExpirationYear" maxlength="50" size="25"></td>
											</tr>
											<tr> 
										<td colspan="4"><input type="submit" name="submit" value="Credit card payment" style="font-size:1.5em; color#08088A;background-color:#B43104"></td>
										<td colspan="4"><input type="reset" name="reset" value="Reset" style="font-size:1.5em; color#08088A;background-color:#B43104"></td>
									</tr>
								</table>
							</form>
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
