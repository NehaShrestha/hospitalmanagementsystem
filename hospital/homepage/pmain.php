<!DOCTYPE html>
<html>
<head>
<title> Patient Main Page </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="pmain.css">
</head>
<body>
<a href="homepage.html" class="fa fa-home"> Log Out </a>
<center>
<h2> Search your data by entering your Email ID</h2>
<form action="" method="POST">
<input type="email" name="email" class="bttn" placeholder="Enter your email"/><br><br>
<input type="submit" name="search" class="btn" placeholder="Search"/>
<table>
<tr>
<th>Name</th>
<th>Address</th>
<th>Ward no. </th>
<th>Age</th>
<th>Gender</th>
<th>Phone no.</th>
<th>Father's name</th>
<th>Mother's name</th>
<th>Email</th>
</tr>
<?php
$connection=mysqli_connect("localhost:3307","root","");
$db= mysqli_select_db($connection, 'project');
if(isset($_POST['search'])){
	$email=$_POST['email'];
	$q= "SELECT * FROM pregistration where email='$email'";
	$result_set= mysqli_query($connection, $q);
	while ($row = mysqli_fetch_array($result_set, MYSQLI_ASSOC))
	{
		?>
	<tr>
		<td> <?php echo $row["name"]; ?> </td>
		<td> <?php echo $row["address"]; ?> </td>
		<td> <?php echo $row["wardno"]; ?> </td>
		<td> <?php echo $row["age"]; ?> </td>
		<td> <?php echo $row["gender"]; ?> </td>
		<td> <?php echo $row["phoneno"]; ?> </td>
		<td> <?php echo $row["fathersname"]; ?> </td>
		<td> <?php echo $row["mothersname"]; ?> </td>
		<td> <?php echo $row["email"]; ?> </td>
	</tr>
		<?php
	}
}
?>
</table>
</form>
</center>
  <div class="regs">
	<h3> Date Registration </h3>
	<p> Past Medical Reports </p>
	<a href="date.html" class="btn1"> > </a>
	<a href="pastreport.php" class="btn2"> > </a>
  </div>
</body>
</html>

