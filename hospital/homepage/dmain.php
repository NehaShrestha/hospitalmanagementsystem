<?php 
session_start();
$con=mysqli_connect('localhost:3307', 'root', '');
mysqli_select_db($con, 'project');
$name=$_POST['rname'];
$email=$_POST['remail'];
$doctorname=$_POST['rdoc'];
$date=$_POST['rdate'];
$prescription=$_POST['rpres'];
$medicines=$_POST['rmed'];
$s= "select * from pregistration where email='$email'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num==1){
	$reg= "INSERT INTO pres (`name`, `email`, `doctorname`, `date`, `prescription`, `medicines`, `pre_id`) VALUES ('$name','$email','$doctorname', '$date', '$prescription', '$medicines', '3');";
	mysqli_query($con, $reg);
	header('location: dmain.html');
}else{
	echo "Invalid Email Id";
}
?>


