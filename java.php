<?php
session_start();

$con = mysqli_connect('localhost','root','','testing');
if(!isset($_SESSION['email']))
{
  header('location:index.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Font Awesome 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">-->

     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--Jquery CDN-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="course.css">
</head>
<body>
<!-- Start Nagigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top" style="background-color:#25274D !important ">
    <a href="http://localhost/My/index2.php" class="navbar-brand">Versatile</a>
    <span class="navbar-text">Create Challenge Conquer</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index2.php" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li> 
         <li class="nav-item"><a href="#Courses" class="nav-link">Courses</a></li> 
         <li class="nav-item"><a href="#Team" class="nav-link">Team</a></li> 
         <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li> 


      
   <li class="nav-item" id="1"> <a href="logout.php"> <button type="button" class="btn btn-danger" style="margin-right: 8px;">Logout</button></a></li>

   <li><a href="setting.php"> <button type="button" class="btn btn-danger">Setting
   </button></a></li> 
  
   <li class="nav-item" style="margin-left: 200px;"><a href="displayData.php" class="nav-link"><i class="fa fa-user-circle " style="color:#DDDDDD;"></i> 
    <?php echo $_SESSION['email'];?></a></li>
  </ul>
 </div>

  </nav> <!-- End Navigation -->

<!-- Course content -->
  <div class="container-fluid bg-dark" id="main">
    <h1>Java Programming Language Course</h1>
    <h5 class="text-white">Fee:999/-</h5>
    <a href="PaytmKit/TxnTest.php"><button class="button button2">Enroll Now</button></a>
    </div>
  <div class="row A">
  <div class="container col-md-6">
    <h3>What you will learn?</h3>
    <p>A powerful course which covers techniques for attacking and solving challenging computational problems in which the Fundamental algorithmic and Domain specific techniques will also be covered. Programming language libraries that are commonly used in problem-solving are taught and few additional topics may be included depending on how the course progresses. "Live Questions will be there for each topic of the course which means we will be solving many problems on other platforms like Codechef, Hackerrank etc. so that your competitive profile will also be build"</p>
  <div class="container">
    <h3>Build your skills!</h3>
    <ul>
      <li>Competitive</li>
      <li>skillsFocusSolve</li>
      <li>Challenging problems</li>
    </ul>
  </div>
</div>
  <div class="container col-md-6">
    <h3>Insights into the course</h3>
    <div class="embed-responsive embed-responsive-16by9">
   
<iframe src="https://www.youtube.com/embed/Zv8-hrGiGno"></iframe>
 
</div>
</div>

</div>


<div class="row B ">
  <h3>Instructors</h3>
  <div class="container col-md-12 col-lg-12 col-sm-12">
    <h5>Rajat Soni</h5>
    <p>Rajat is the Founder who holds a Bachelors in CS from LPU.He has 5+ years of valuable industry experience with Amazon and Facebook in the US. He is a leading tech educationist and has created the curriculum for all our courses plus the teaching methodology that Versatile education follows.</p>
  </div>

  <div class="container col-md-12 col-lg-12 col-sm-12">
    <h5>Sourabh</h5>
    <p>Saurabh is a Software Developer at Versatile eduacation. He is a CS graduate from LPU and has 2+ years of teaching experience. He is known as the Ninja of Competitive Coding and Python. Moreover, he holds a superb contribution towards our Online learning portal.</p>
  </div>
</div>

<h3 style="margin-left: 20px;">EXCLUSIVE FEATURES</h3>
<div class="row C">
  <div class=" container col-md-4">
    <div class="card">
    <img src="img/4.png">
    <h5 style="padding-top: 10px; padding-left: 10px;">Exceptional Faculty</h5>
    <p style="padding: 10px;">Our faculty is from the best institutes around the world such as IITD, Stanford and more. They also have work experience in tech giants like Amazon, Facebook, Adobe which makes them exceptional.</p>
  </div>
  </div>
  <div class=" container col-md-4">
    <div class="card">
    <img src="img/5.png">
    <h5 style="padding-top: 10px; padding-left: 10px;">Mentor Support</h5>
    <p style="padding: 10px;">An incredible mentor support is provided where 1 teaching assistant is assigned to 10 students. The TA’s are top performers alumni dedicated to support and clear doubts at any point of time.</p>
  </div>
  </div>
  <div class=" container col-md-4">
    <div class="card">
    <img src="img/2.png">
    <h5 style="padding-top: 10px; padding-left: 10px;">Course Curriculum</h5>
    <p style="padding: 10px;">Industry leading curriculum designed by expert developers turned educators who have invested time to create quality content infused with unique teaching methodology.</p>
    </div>
  </div>
  
</div>

<div class="container col-md-6" >
 <center><h5>Get started with Java Programming Language Course</h5></center>
  <a href="PaytmKit/TxnTest.php"><center><button class="button button2" style="margin-bottom: 20px; margin-top: 5px;">Enroll Now</button></center></a>
</div>

<!-- Start Footer-->
  <footer class="container-fluid  text-white mt-5" style="border-top: 3px solid #DC3545;background-color: #25274D !important;">
    <div class="container">   <!-- Start Footer Container -->
      <div class="row py-3">    <!-- Start Footer Row -->
        <div class="col-md-6">      <!-- Start Footer 1st Column -->
          <div>
            <span>Follow Us: </span>
            <a href="#" target="_blank"><i class="fa fa-facebook px-3"></i></a>
            <a href="#" target="_blank"><i class="fa fa-twitter pr-3"></i></a>
            <a href="#" target="_blank"><i class="fa fa-youtube pr-3"></i></a>
            <a href="#" target="_blank"><i class="fa fa-google-plus-g pr-3"></i></a>
            <a href="#" target="_blank"><i class="fa fa-rss pr-3"></i></a>
          </div>
        </div>    <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">   <!-- Start Footer 2nd Column -->
          <small> Designed by <a href="#" target="_blank">Versatile Technical Solutions</a> &copy; 2019. </small>
        </div>    <!-- End Footer 2nd Column -->
      </div>    <!-- End Footer Row -->
    </div>    <!-- End Footer Container -->
  </footer> <!-- End Footer -->


  








  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>
</html>
