<?php
session_start();
$con= mysqli_connect('localhost:3307', 'root', '');
mysqli_select_db($con, 'project');
$name=$_POST['rname'];
$email=$_POST['remail'];
$date=$_POST['rdate'];
$prescription=$_POST['rpres'];
$medicines=$_POST['rmed'];
$s="SELECT * from 'pres' where name='$name' && email='$email' && date='$date' && prescription='$prescription' && medicines='$medicines'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num==1){
	echo "Username Already Taken";
}else{
	$reg="INSERT INTO `pres`(`name`, `email`, `date`, `prescription`, `medicines`) VALUES (`$name`, `$email`, `$date`, `$prescription`, `$medicines`)";
    mysqli_query($con, $reg);
	echo "Registration Successful";
}
?>
 