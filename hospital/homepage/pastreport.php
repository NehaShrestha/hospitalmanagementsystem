<!DOCTYPE html>
<html>
<head>
<title> Pharmacist Main Page </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="pastreport.css">
</head>
<body>
<a href ="pmain.php" class="button button1"> Previous</a>
<center>
<h2> Search your past medical reports by entering Email ID</h2>
<form action="" method="POST">
<input type="email" name="email" class="bttn" placeholder="Enter your email"/><br><br>
<input type="submit" name="search" class="btn" placeholder="Search"/>
<table>
<tr>
<th>Patient Name</th>
<th>Email</th>
<th>Doctor Name</th>
<th>Date</th>
<th>Prescription</th>
<th>Medicines</th>
</tr>
<?php
$connection=mysqli_connect("localhost:3307","root","");
$db= mysqli_select_db($connection, 'project');
if(isset($_POST['search'])){
	$email=$_POST['email'];
	$q= "SELECT * FROM pres where email='$email'";
	$result_set= mysqli_query($connection, $q);
	while ($row = mysqli_fetch_array($result_set, MYSQLI_ASSOC))
	{
		?>
	<tr>
		<td> <?php echo $row["name"]; ?> </td>
		<td> <?php echo $row["email"]; ?> </td>
		<td> <?php echo $row["doctorname"]; ?> </td>
		<td> <?php echo $row["date"]; ?> </td>
		<td> <?php echo $row["prescription"]; ?> </td>
		<td> <?php echo $row["medicines"]; ?> </td>
	</tr>
		<?php
	}
}
?>
</table>
</form>
</center>
</body>
</html>