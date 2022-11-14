<?php 
session_start();
$con=mysqli_connect('localhost:3307', 'root', '');
mysqli_select_db($con, 'project');
$email=$_POST['remail'];
$date=$_POST['rdate'];
$s= "select * from pregistration where email='$email'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num==1){
	$reg= "INSERT INTO date(email, date) VALUES ('$email', '$date')";
	mysqli_query($con, $reg);
	header('location: pmain.php');
}else{
	header('location: date.html');
}1
?>
