<?php
	mysql_connect("localhost","root","123456");
	mysql_select_db("project_db");
		
	
	$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST['txtUsername'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
			$message = "Username ���١�������!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else
	{	
		
		$strSQL = "INSERT INTO member (Username,Password,Firstname,Lastname,Email,Tel,Status) VALUES ('".$_POST["txtUsername"]."', 
		'".$_POST["txtPassword"]."','".$_POST["txtFirstname"]."','".$_POST["txtLastname"]."','".$_POST["txtEmail"]."','".$_POST["txtTel"]."',
		'".$_POST["ddlStatus"]."')";
		$objQuery = mysql_query($strSQL);	
	
		$message2 = "Register Completed!!";
		echo "<script type='text/javascript'>alert('$message2');</script>";
		
	}

	mysql_close();
?>

<script language=Javascript>top.location.href="index.html";</script>