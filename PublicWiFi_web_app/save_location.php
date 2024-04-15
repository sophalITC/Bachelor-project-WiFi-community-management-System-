<?php
$conn=mysqli_connect("localhost","root","123456","project_db");

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

<?php
$lat_value=$_POST['lat_value'];
$lon_value=$_POST['lon_value'];
$zoom_value=$_POST['zoom_value'];

$sql = "INSERT INTO `location` (`user_latitude`, `user_longitude`, `user_zoom`)
VALUES ('".$lat_value."', '".$lon_value."', '".$zoom_value."')";
$retval = mysqli_query( $conn, $sql );
if(isset($retval))
$message = "Save Complete!!";
echo "<script type='text/javascript'>alert('$message');</script>";
$message2 = "Thank You for Share !!";
echo "<script type='text/javascript'>alert('$message2');</script>";
echo "<script type='text/javascript'>window.location.href = \"freewifi.html\";</script>";  //ลิ้ง auto
//echo $sql;
?>
