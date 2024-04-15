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


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Public WiFi Commuication</title>
		<meta charset="UTF-8">
		<meta name="Generator" content="EditPlus®">
		<meta name="Author" content="">
		<meta name="Keywords" content="">
		<meta name="Description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/mainstyle.css" type="text/css">
		<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)"/>
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

	<body>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.html">Public WiFi Communication System</a> by PSU TEAM</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>
							<a href="" class="icon fa-angle-down">Menus</a>
							<ul>
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
						<li><a href="#" class="button">Sign Up</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Login</h2>
					<p>Please login.</p>
				</header>
				<div>
					<div class="12u">
						<!-- Form -->
							<section class="box">
							<form name="form1" method="post" action="save_profile.php">
							 <h3> Edit Profile! </h3><br>
							  <table width="400" border="1" style="width: 400px">
								<tbody>
								  <tr>
									<td width="125"> &nbsp;UserID:</td>
									<td width="180">
									  <?php echo $objResult["UserID"];?>
									</td>
								  </tr>
								  <tr>
									<td> &nbsp;Username:</td>
									<td>
									  <?php echo $objResult["Username"];?>
									</td>
								  </tr>
								  <tr>
									<td> &nbsp;Password:</td>
									<td><input name="txtPassword" type="password" id="txtPassword" value="<?php echo $objResult["Password"];?>">
									</td>
								  </tr>
								  <tr>
									<td> &nbsp;Confirm Password</td>
									<td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $objResult["Password"];?>">
									</td>
								  </tr>
								  <tr>
									<td>&nbsp;Firstname:</td>
									<td><input name="txtFirstname" type="text" id="txtFirstname" value="<?php echo $objResult["Firstname"];?>"></td>
								  </tr>
								   <tr>
									<td>&nbsp;Lastname:</td>
									<td><input name="txtLastname" type="text" id="txtLastname" value="<?php echo $objResult["Lastname"];?>"></td>
								  </tr>
								   <tr>
									<td>&nbsp;Email:</td>
									<td><input name="txtEmail" type="text" id="txtEmail" value="<?php echo $objResult["Email"];?>"></td>
								  </tr>
								   <tr>
									<td>&nbsp;Tel:</td>
									<td><input name="txtTel" type="text" id="txtTel" value="<?php echo $objResult["Tel"];?>"></td>
								  </tr>
								  <tr>
									<td> &nbsp;Status</td>
									<td>
									  <?php echo $objResult["Status"];?>
									</td>
								  </tr>
								</tbody>
							  </table>
							  <br>
							  <input type="submit" name="Submit" value="Save">
							</form>
							
								<hr />

							</section>

					</div>
				</div>

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