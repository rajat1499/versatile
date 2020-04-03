<?php
//error_reporting(0);
$conn = mysqli_connect('localhost','root','','testing');
/*if($conn)
{
	echo "Connection succesfull";
}
else
{
	echo "error";
}*/
$connect = mysqli_connect('localhost', 'root', '', 'testing');

	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$message = $_POST["text"];
	
	$qy = "INSERT INTO contact(Name, Phone, Email, Message) VALUES ('$name', '$phone', '$email', '$message')";

	$data = mysqli_query($conn, $qy) or die(mysqli_error($conn));

			if($data)
			{
				echo '<script language="javascript">';
				echo 'alert("We will revert back you soon!")';
				echo '</script>';
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("All fields are required.")';
				echo '</script>';
			}

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/My/index.php">