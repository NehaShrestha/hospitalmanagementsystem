<?php
$name=$_POST['rname'];
$address=$_POST['raddress'];
$wardno=$_POST['rward'];
$age=$_POST['rage'];
$gender=$_POST['rgender'];
$phoneno=$_POST['rphone'];
$fathersname=$_POST['rfather'];
$mothersname=$_POST['rmother'];
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
	$sql= "INSERT INTO pregistration (`name`, `address`,`wardno`,`age`, `gender`, `phoneno`,`fathersname`,`mothersname`, `email`, `password`) VALUES ('$name','$address','$wardno','$age','$gender','$phoneno','$fathersname','$mothersname','$email','$pass1');";
	if(mysqli_query($con, $sql))
    {
	header('location:patientlogin.html');
    }else{
	header('location:patientregistration.html');	
}
}else{
	header('location:patientregistration.html');
}
mysqli_close($con);
?>