<?php
error_reporting(0);
$con = mysqli_connect('localhost','root','','testing');
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

// This page updates the user password

$old_pass = $_POST['old-password'];
//$old_pass = mysqli_real_escape_string($con, $old_pass);
//$old_pass = MD5($old_pass);

$new_pass = $_POST['password'];
//$new_pass = mysqli_real_escape_string($con, $new_pass);
//$new_pass = MD5($new_pass);

$new_pass1 = $_POST['password1'];
//$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
//$new_pass1 = MD5($new_pass1);

$query = "SELECT email, password FROM tbl_employee WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($new_pass != $new_pass1) {
    header('location: setting.php?error=The two passwords don\'t match');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  tbl_employee SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
       $data= mysqli_query($con, $query) or die($mysqli_error($con));
       if($data)
			{
				echo '<script language="javascript">';
				echo 'alert("Password is successfully changed")';
				echo '</script>';
				?>
				<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/My/index2.php">
				<?php
			}

		 //header('location: setting.php?error=Password changed');

       } else
        header('location: setting.php?error=Wrong Old Password');
}
?>
                       
