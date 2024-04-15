<?php
	session_start();
	mysql_connect("localhost","root","123456");
	mysql_select_db("project_db");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			$message = "Username and Password Incorrect!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<script type='text/javascript'>window.location.href = \"index.html\";</script>";  //ลิ้ง auto
			 
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN")
			{
				header("location:admin.php"); //ลิ้งหน้าอื่นแบบ auto และมี เงื่อนไข
			}
			else
			{
				header("location:profile.php");
			}
	}
	mysql_close();
?>