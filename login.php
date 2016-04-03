<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Members Only</title>
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
	
	<header><h1><a href="customer_login.php">Members Only</a></h1>	</header>
	
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
			
        		<article>
        			<h2><a href="login.php">Login</a></h2>
							
<?php
session_start();

if (isset($_POST['userid']) && isset($_POST['password']))
{
  
  $userid = $_POST['userid'];
  $password = $_POST['password'];

  $db_conn = new mysqli('localhost', 'root', '', 'auth');

  if (mysqli_connect_errno()) {
   echo 'Connection to database failed:'.mysqli_connect_error();
   exit();
  }

  $query = 'select * from authorized_users '
           ."where name='$userid' "
           ." and password='$password'";

  $result = $db_conn->query($query);
  if ($result->num_rows >0 )
  {
    
    $_SESSION['valid_user'] = $userid;    
  }
  $db_conn->close();
}
?>

 
<?php
  if (isset($_SESSION['valid_user']))
  {
    echo 'You are logged in as: '.$_SESSION['valid_user'].' <br />';
	
    echo '<a href="logout.php">Log out</a><br />';
  }
  else
  {
    if (isset($userid))
    {
      
      echo 'Could not log you in.<br />';
    }
    else 
    {
     
      echo 'You are not logged in.<br />';
    }

    
    echo '<form method="post" action="login.php">';
    echo '<table>';
    echo '<tr><td>Userid:</td>';
    echo '<td><input type="text" name="userid"></td></tr>';
    echo '<tr><td>Password:</td>';
    echo '<td><input type="password" name="password"></td></tr>';
    echo '<tr><td colspan="2" align="center">';
    echo '<input type="submit" value="Log in"></td></tr>';
    echo '</table></form>';
  }
?>
<br />
<a href="customer_login.php">Members section</a>



							<img src="images/RiverIce.jpg" alt="" class="alignleft" /><p> The coast gaurd was able to break the ice on the river.</p>
						</article>
						
        		<article>
							<h2><a href="#">Bald Eagle Watch </a></h2>
							<p> March is the bird migrating month; the locals are moving south for food, the migrants are heading back north.</p>
						</article>
						
			</section><!-- end of #content -->

		<aside id="sidebar"><!-- sidebar -->
				<h3>Quick Links</h3>
					<ul>
						<li><a href="login.php">Login</a></li>
						<li><a href="member_only.php">Member Only</a></li>
						<li><a href="logout.php">Logout</a></li>
					 
					</ul>
					
				<h3>Hotel Lobby</h3>
					<img src="images/BaldEagle.jpg" alt="" /><br /><br />

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
