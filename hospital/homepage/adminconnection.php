<?php
$name=$_POST['rname'];
$gender=$_POST['rgender'];
$email=$_POST['remail'];
$pass1=$_POST['renterPass'];
$pass2=$_POST['rconfirmPass'];
$servername="localhost:3307";
$username="root";
$password="";
$dbname="project";
$con= mysqli_connect($servername, $username, $password, $dbname);
if(!$con){
	die("Error: ".mysqli_connect_error());
}
if($pass1==$pass2){
	$sql= "INSERT INTO `adregistration`(`name`, `gender`, `email`, `password`) VALUES ('$name','$gender','$email','$pass1');";
	if(mysqli_query($con, $sql))
    {
	header('location:adminlogin.html');
    }else{
	header('location:adminregistration.html');		
}
}else{
	header('location:adminregistration.html');	
}
mysqli_close($con);
?>
