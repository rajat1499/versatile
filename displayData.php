<?php

session_start();

$con = mysqli_connect('localhost','root','','testing');
if(!isset($_SESSION['email']))
{
  header('location:index.php');
}

/*if($conn)
{
	echo "Connection OK.";
}
else
{
	die("Connection failed because".mysql_connect_error());
}*/
//$query = "SELECT *FROM chandigarh WHERE Name = 'nitin' ";
 //$query = "SELECT * FROM tbl_employee WHERE '$_SESSION['email'] = email' ";
 $query = "SELECT * From tbl_employee where email = '".$_SESSION['email']."'";
 
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);



if($total!=0)
{	
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
</head>
<body>	
	<div class="container">
	<div class="table-responsive-md">
		<header class="text-center" style="padding-bottom: 4px; background-color:#25274D !important; color: white;">
			<h3>User Detail's</h3>
		</header>	
		<table class="table table-striped table-bordered table-hover">
			<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Phone</th>
			<th>City</th>
			<th>College</th>
			</tr>



<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['name']."</td>
				<td>".$result['email']."</td>
				<td>".$result['password']."</td>
				<td>".$result['phone']."</td>
				<td>".$result['city']."</td>
				<td>".$result['collegeName']."</td>
			  </tr>
			  ";
	}
}
else
{
	echo "No Record Found";
}
?>
</table>
<a href="index2.php"><button class="btn btn-danger b2">Back</button></a>
</div>
</div>


</body>
</html>
