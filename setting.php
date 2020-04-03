 <?php
error_reporting(0);
$con = mysqli_connect('localhost','root','','testing');
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<title>Setting form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
 	<!-- Animinate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <!-- End -->
</head>
	<style type="text/css"> 
		body{
			/*background: url(images/15.jpg);*/
			background-image: linear-gradient(to right, #C04848 , #480048);
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			height: 550px;
			width:100%;
			}
	</style>
<body>
	<!-- <div class="container"> -->
		<!-- <button class="btn btn-success" data-target="#mymodel" data-toggle= 
		"modal">LOGIN</button>-->
		

	 <div class="container wow zoomIn"  style="margin-top: 100px; ">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<div class="modal-header">
					<h3 class="text-center">Change Password</h3>
					 <a href="index2.php"><button style="margin-top: -35px;"  type="button" class="close" data-dismiss="modal">&times</button></a>
				</div>

				<div class="modal-body">
					<form id="validateForm" action="settings_script.php" method="post">
						<div class="form-group">
							<label><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Old Password:</label>
							<input type="password" name="old-password" class="form-control" placeholder="Old Password">
						</div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-lock " aria-hidden="true"></span>  New Password:</label>
							<input type="password" name="password" class="form-control"
							placeholder="New Password">
						</div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-lock " aria-hidden="true"></span>  Confirm Password:</label>
							<input type="password" name="password1" class="form-control"
							placeholder="Confirm Password">
						</div>

						<button type="submit" class="btn btn-danger ">Change</button>
						<?php
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>
					</form>
					
				</div>

			
				
			</div>
			
		</div>

		
	</div>


	<!-- </div> -->
<!-- Wow js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<!-- end -->




<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

<script type="text/javascript">
	$(document).ready(function(){	
$('#validateForm').bootstrapValidator({
/*feedbackIcons: {
	valid: 'glyphicon glyphicon-ok',
	invalid: 'glyphicon glyphicon-remove',
	validating: 'glyphicon glyphicon-refresh'
},*/
fields: {
	old-password: {
		validators: {
			notEmpty: {
				message: 'Enter your old password'
			}
		}
	},
	password: {
		validators: {
			stringLength: {
				min: 5,
				message: 'Please Enter your password with minimum 5 characters length'
			},
			notEmpty: {
				message: 'Enter your new password'
			}
		}
	},
	password1: {
		validators: {
			notEmpty: {
				message: 'Enter your confirm new password'
			},
			identical: {
				field: 'newpass',
				message: 'Enter the password, what enter in password field'
			}
		}
	 }
	}
	
});
});
</script>
</body>
</html>   