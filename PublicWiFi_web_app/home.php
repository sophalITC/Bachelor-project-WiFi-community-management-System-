<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	
	mysql_connect("localhost","root","123456");
	mysql_select_db("project_db");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>


<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Public WiFi Commuication</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="home.php">Public WiFi Communication System</a> by PSU TEAM</h1>
				<nav id="nav">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li>
							<a href="" class="icon fa-angle-down">Menus</a>
							<ul>
								<li><a href="profile.php">Profile</a></li>
								<li><a href="share_device.html">Share</a></li>
								<li><a href="freewifi.html">Free WiFi</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li>
									<a href="">Submenu</a>
									<ul>
										<li><a href="#">Option One</a></li>
										<li><a href="#">Option Two</a></li>
										<li><a href="#">Option Three</a></li>
										<li><a href="#">Option Four</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="logout.php" class="button">Logout</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Hello, And Welcome</h2>
				<p>To this site The Public WiFi Communication System</p>
				<ul class="actions">
					<h3 align="center">Welcome User : <font color="red"><?php echo $objResult["Username"];?></font></h3> <br>
				</ul>
			</section>

		<!-- Main -->
			<section id="main" class="container">

				<section class="box special">
					<header class="major">
						<h2>Introducing the Project
						<br />
						for learning to technology in this site.</h2>
						<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc ornare<br />
						adipiscing nunc adipiscing. Condimentum turpis massa.</p>
					</header>
					<span class="image featured"><img src="images/banner1.jpg" alt="" /></span>
				</section>

				<section class="box special features">
					<div class="features-row">
						<section>
							<span class="icon major fa-bolt accent2"></span>
							<h3>Map</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						</section>
						<section>
							<span class="icon major fa-area-chart accent3"></span>
							<h3>Monitoring</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						</section>
					</div>
					<div class="features-row">
						<section>
							<span class="icon major fa-cloud accent4"></span>
							<h3>Cloud Technology</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						</section>
						<section>
							<span class="icon major fa-lock accent5"></span>
							<h3>Security</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						</section>
					</div>
				</section>

			</section>

		<!-- CTA -->
			<section id="cta">

				<h2>Sign up for beta access</h2>
				<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>

				<form>
					<div class="row uniform 50%">
						<div class="8u 12u(mobilep)">
							<input type="email" name="email" id="email" placeholder="Email Address" />
						</div>
						<div class="4u 12u(mobilep)">
							<input type="submit" value="Sign Up" class="fit" />
						</div>
					</div>
				</form>

			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Copy All rights PSU TEAM.</li>
				</ul>
			</footer>

	</body>
</html>