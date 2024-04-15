<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	mysql_connect("localhost","root","123456");
	mysql_select_db("project_db");
	
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}
	$strSQL = "UPDATE member SET Password = '".trim($_POST['txtPassword'])."', Firstname = '".trim($_POST['txtFirstname'])."' 
	,Lastname = '".trim($_POST['txtLastname'])."',Email = '".trim($_POST['txtEmail'])."',Tel = '".trim($_POST['txtTel'])."'
	WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysql_query($strSQL);
	
	$message = "Save Completed!";
	echo "<script type='text/javascript'>alert('$message');</script>";	
	
	if($_SESSION["Status"] == "ADMIN")
	{
		//echo "<br> Go to <a href='admin_page.php'>Admin page</a>";
		echo "<script type='text/javascript'>window.location.href = \"admin.php\";</script>";
	}
	else
	{
		//echo "<br> Go to <a href='user_page.php'>User page</a>";
		echo "<script type='text/javascript'>window.location.href = \"profile.php\";</script>";
	}
	
	mysql_close();
?>
