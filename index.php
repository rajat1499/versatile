 <?php
 
session_start();
if(isset($_SESSION['email'])){
  header('location:index2.php');
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

  <!-- Animinate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">

   <!-- <link rel="stylesheet" type="text/css" href="index.css">   -->

  <link rel="stylesheet" type="text/css" href="slider.css">

  <link rel="stylesheet" type="text/css" href="index.js">

  <link rel="stylesheet" type="text/css" href="team.css">


  <script> 
 
  $(document).ready(function(){
        
        //For 1st Course
         $("#show").click(function(){
           $(".pera").toggleClass("main");
           $(this).css("display","none");
           $("#hide").css("display","inline");
         });

          $("#hide").click(function(){
           $(".pera").toggleClass("main");
           $(this).css("display","none");
           $("#show").css("display","inline");
         });

        //2nd First Course
          $("#show2").click(function(){
           $(".pera2").toggleClass("main");
           $(this).css("display","none");
           $("#hide2").css("display","inline");
         });

          $("#hide2").click(function(){
           $(".pera2").toggleClass("main");
           $(this).css("display","none");
           $("#show2").css("display","inline");
         });

         //3rd First Course
          $("#show3").click(function(){
           $(".pera3").toggleClass("main");
           $(this).css("display","none");
           $("#hide3").css("display","inline");
         });

          $("#hide3").click(function(){
           $(".pera3").toggleClass("main");
           $(this).css("display","none");
           $("#show3").css("display","inline");
         });

        //4th First Course
          $("#show4").click(function(){
           $(".pera4").toggleClass("main");
           $(this).css("display","none");
           $("#hide4").css("display","inline");
         });

          $("#hide4").click(function(){
           $(".pera4").toggleClass("main");
           $(this).css("display","none");
           $("#show4").css("display","inline");
         });

         //5th First Course
          $("#show5").click(function(){
           $(".pera5").toggleClass("main");
           $(this).css("display","none");
           $("#hide5").css("display","inline");
         });

          $("#hide5").click(function(){
           $(".pera5").toggleClass("main");
           $(this).css("display","none");
           $("#show5").css("display","inline");
         });

        
        //6th First Course
          $("#show6").click(function(){
           $(".pera6").toggleClass("main");
           $(this).css("display","none");
           $("#hide6").css("display","inline");
         });

          $("#hide6").click(function(){
           $(".pera6").toggleClass("main");
           $(this).css("display","none");
           $("#show6").css("display","inline");
         });
});
       
</script>

<style type="text/css">
  .pera
   {
     display: none;
   }
   .pera2
   {
     display: none;
   }
   .pera3
   {
     display: none;
   }
   .pera4
   {
     display: none;
   }
   .pera5
   {
     display: none;
   }
    .pera6
   {
     display: none;
   }
   #hide
   {
     display: none;
   }
   #hide2
   {
     display: none;
   }
   #hide3
   {
     display: none;
   }
   #hide4
   {
     display: none;
   }
   #hide5
   {
     display: none;
   }
   #hide6
   {
     display: none;
   }
 .main
   {
     display: inline;
   }
</style>

  <title>VTSCS</title>
</head>
                      
<body>
  <!-- Start Nagigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top" style="background-color:#25274D !important ">
    <a href="index.php" class="navbar-brand">Versatile</a>
    
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#courses" class="nav-link">Courses</a></li>
        <li class="nav-item"><a href="#team" class="nav-link">Team</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="aboutus.php" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="http://localhost/My/Alumini/gallery.php" class="nav-link">Our Alumini</a></li>    
        <li class="nav-item"><a href="http://localhost/My/Game/colorGame.php" class="nav-link">Game Zone</a></li>  

   <li class="nav-item" id="1"> <a href="login.php"> <button type="button" class="btn btn-danger" style="margin-right: 8px;">Login</button></a></li>

   <li class="animated infinite pulse delay-2s"><a href="signup.php"> <button type="button" class="btn btn-danger">Register Now
   </button></a></li> 
  </ul>
 </div>

  </nav> <!-- End Navigation -->
<!-- Start slider -->
  <div>
  <div class="carousel slide  " data-ride="carousel" data-interval="2000" id="jpweb" data-pause="hover">  <!--data-pause="false" -->
    <div class="carousel-inner">
       
      
      <div class="carousel-item active" id="A">
        <!-- <img src="images/12.jpg"> -->
        <!-- Start Header Jumbotron-->
        
  <header class="jumbotron">
    <div class="text-center" style="margin-top: 120px;">
      <h1 class="text-uppercase text-light font-weight-bold wow bounceInDown">Welcome to Versatile Technical Education</h1>
      <p class="font-italic font-weight-bold st text-light wow bounceInLeft delay-1s"> 3C - Create Challenge Conquer</p>
      <a href="#Contact" class="btn btn-outline-danger mr-4 wow swing delay-2s">Contact Us</a>
      <!-- <a href="#" target="_blank" class="btn btn-outline-danger">Join Us</a> -->
    </div>
  </header> <!-- End Header Jumbotron -->


        <div class="carousel-caption d-none d-md-block" style="margin-bottom: -20px;">
          <h3>Versatile Education</h3>
          <p style="padding-bottom: 10px;">We Support You Grow</p>
        </div>
      </div>
      
      <div class="carousel-item" id="B">
        <!-- <img src="images/bg3.jpg"> -->
        <!-- Start Header Jumbotron-->
        
  <header class="jumbotron">
    <div class="text-center" style="margin-top: 120px;">
      <h1 class="text-uppercase text-light font-weight-bold">Welcome to Versatile Technical Education</h1>
      <p class="font-italic font-weight-bold st text-light"> 3C - Create Challenge Conquer</p>
      <a href="#Contact" class="btn btn-outline-danger mr-4">Contact Us</a>
      <!-- <a href="#" target="_blank" class="btn btn-outline-danger">Join Us</a> -->
    </div>
  </header> <!-- End Header Jumbotron -->

        
        <div class="carousel-caption d-none d-md-block" style="margin-bottom: -20px;">
          <h3>Versatile Education</h3>
          <p style="padding-bottom: 10px;">We Support You Grow</p>
        </div>
      </div>

      <div class="carousel-item" id="C">
        <!-- <img src="images/bg2.jpg"> -->
        <!-- Start Header Jumbotron-->
        
  <header class="jumbotron">
    <div class="text-center" style="margin-top: 120px;">
      <h1 class="text-uppercase text-light font-weight-bold">Welcome to Versatile Technical Education</h1>
      <p class="font-italic font-weight-bold st text-light"> 3C - Create Challenge Conquer</p>
      <a href="#Contact" class="btn btn-outline-danger mr-4">Contact Us</a>
      <!-- <a href="#" target="_blank" class="btn btn-outline-danger">Join Us</a> -->
    </div>
  </header> <!-- End Header Jumbotron -->

        
        <div class="carousel-caption d-none d-md-block" style="margin-bottom: -20px;">
          <h3>Versatile Education</h3>
          <p style="padding-bottom: 10px;">We Support You Grow</p>
        </div>
      </div>


    </div>

      <a href="#jpweb" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
      <a href="#jpweb" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      
      <ul class="carousel-indicators" >
        <li data-target="#jpweb" data-slide-to="0" class="active"></li>
        <li data-target="#jpweb" data-slide-to="1"></li>
        <li data-target="#jpweb" data-slide-to="2"></li>
     </ul>
     
    
  </div>
</div>
<!-- End slider -->


<!-- Cousre Section-->
          <div class="container-fluid" id="courses">
            
            <section class="jumbotron ">
              <h2 class="text-center wow bounceInDown ">Courses</h2>
              <hr> 
                <div class="container-fluid">
                  <div class="row">

                 <!--First Course -->
                    <div class="col-lg-4 t">
                          <a href="signup.php">
                            <div id="ZoomEffect" class="wow zoomIn delay-1s">
                            <img src="images/c.png" id="img">
                            </div>
                          </a>
                            <div>
                            <h1 class="text1">C</h1>
                            <p>VERSATILE provides real-time and placement oriented C course in online and offline mode.VERSATILE’s
                            <span id="show" class="text-primary"><a>read more</a></span>
                            <span class="pera">C training course content is basically designed from basic to advanced levels.VERSATILE is having best C Training infrastructure.
                            </span>
                            <a id="hide" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                      <!--Second Course -->
                       <div class="col-lg-4">
                          <a href="signup.php">
                            <div id="ZoomEffect" class="wow zoomIn delay-1s ">
                            <img src="images/c++.png" id="img">
                          </div>
                          </a>
                          <div>
                            <h1 class="text1">C++</h1>
                            <p>VERSATILE provides real-time and placement oriented C++ course in online and offline mode. VERSATILE’s 
                            <span id="show2" class="text-primary"><a>read more</a></span>
                            <span class="pera2">C++ training course content is basically designed from basic to advanced levels. VERSATILE is having best C++ Training infrastructure.
                            </span>
                            <a id="hide2" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                         <!--Third Course -->
                            <div class="col-lg-4" >
                           <a href="signup.php">
                             <div id="ZoomEffect" class="wow zoomIn delay-1s">
                            <img src="images/java.png" id="img">
                          </div>
                           </a>
                          <div>
                            <h1 class="text1">JAVA</h1>
                            <p>VERSATILE provides real-time and placement oriented java traning in online and offline mode. VERSATILE’s
                            <span id="show3" class="text-primary"><a>read more</a></span>
                            <span class="pera3">Java training course content is basically designed from basic to advanced levels. VERSATILE is having best java Training infrastructure.
                            </span>
                            <a id="hide3" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>
                  </div>
 
                    <!--Fourth Course -->
                     <div class="row">

                    <div class="col-lg-4">
                          <a href="signup.php">
                            <div id="ZoomEffect" class="wow zoomIn delay-1s">
                            <img src="images/php.jpg" id="img">
                          </div>
                          </a>
                          <div>
                            <h1 class="text1">PHP</h1>
                            <p>VERSATILE provides real-time and placement oriented PHP course in online mode. VERSATILE’s
                            <span id="show4" class="text-primary"><a>read more</a></span>
                            <span class="pera4">PHP training course content is basically designed from basic to advanced levels. VERSATILE is having best PHP Training infrastructure.
                            </span>
                            <a id="hide4" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                      <!--Fifth Course -->
                       <div class="col-lg-4">
                          <a href="signup.php">
                            <div id="ZoomEffect" class="wow zoomIn delay-1s">
                            <img src="images/web.jpg" id="img">
                          </div>
                          </a>
                          <div>
                            <h1 class="text1">FrontEnd</h1>
                            <p>VERSATILE provides real-time and placement oriented Frontend course in online mode. VERSATILE’s
                            <span id="show5" class="text-primary"><a>read more</a></span>
                            <span class="pera5">Frontend training course content is basically designed from basic to advanced levels. VERSATILE is having best Frontend Training infrastructure.
                            </span>
                            <a id="hide5" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                          <!--sixth Course -->
                           <div class="col-lg-4">
                          <a href="signup.php">
                            <div id="ZoomEffect" class="wow zoomIn delay-1s">
                            <img src="images/python.png" id="img">
                            </div>
                          </a>
                            <div>
                            <h1 class="text1">PYTHON</h1>
                            <p>VERSATILE provides real-time and placement oriented Python course in Jalandhar. VERSATILE’s
                            <span id="show6" class="text-primary"><a>read more</a></span>
                            <span class="pera6">Python training course content is basically designed from basic to advanced levels. VERSATILE is having best Python Training infrastructure in the region.
                            </span>
                            <a id="hide6" class="text-primary">Read less</a>
                            </p>
                             </div>
                          </div>
                     

                  </div>
                </div>
            </section>
          </div>
          <hr>
    <!-- Course Section End-->


  <!-- Start Services -->
  <div class="container text-center border-bottom" id="services"> 
    <h2 class="wow zoomIn">Our Services</h2>

    <div class="row mt-4">
        <div class="col-sm-4 mb-4">
            <a href="serverSecurity.php"><i class="fa fa-database fa-5x text-danger wow bounceIn delay-1s"></i></a>
            <h4 class="mt-4">Server Security</h4>
          </div>
            
      
      <div class="col-sm-4 mb-4">
        <a href="webApplication.php"><i class="fa fa-desktop fa-5x  text-primary wow bounceIn delay-1s"></i></a>
        <h4 class="mt-4">Web Application</h4>
      </div>

      <div class="col-sm-4 mb-4">
          <a href="andriod.php"><i class="fa fa-android fa-5x text-success wow bounceIn delay-1s"></i></a>
          <h4 class="mt-4">Android Application</h4>
        </div>

    </div>
    </div>
  <!-- End Services -->




<!-- Team section start -->
   <div class="container-fluid" id="team" style="background-color: #262626;">
  <section class="team-area">
    <div class="container">
      <h3 class="section-heading wow zoomIn delay-1s">Team Members</h3>
      <div class="row">
        <!-- First card -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="team-single">
            <div class="content-area">


              <div class="side-one">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="img-area">
                      <img src="r.jpg" alt="">
                    </div>
                      <h4>Rajat Soni</h4>
                      <p>Full-Stack Developer</p>
                  
                  </div>
                </div>
              </div>


              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Rajat Soni</h4>
                      <p>He is Full-stack web developer with two years experience.</p>
                      <ul class="list-inline">

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-youtube"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-linkedin"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              
             </div>
            
          </div>
          
        </div>
        <!-- end -->





        <!-- Second card -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="team-single">
            <div class="content-area">


              <div class="side-one">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="img-area">
                      <img src="  sourabh.jpg" alt="">
                    </div>
                      <h4>Sourabh</h4>
                      <p>Front-end Developer</p>
                    
                  </div>
                </div>
              </div>


              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Sourabh</h4>
                      <p>He is UI/UX designer and web developer with two years experience.</p>
                      <ul class="list-inline">

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-youtube"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-linkedin"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              
             </div>
            
          </div>
          
        </div>
        <!-- end -->




<!-- Third card -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="team-single">
            <div class="content-area">


              <div class="side-one">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="img-area">
                      <img src="  pintu.jpg" alt="">
                      </div>
                      <h4>Pintu Kumar</h4>
                      <p>Back-end Developer</p>
                    
                  </div>
                </div>
              </div>


              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Pintu kumar</h4>
                      <p>He is Back-end web developer with three years experience.</p>
                      <ul class="list-inline">

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-youtube"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-linkedin"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              
             </div>
            
          </div>
          
        </div>
        <!-- end -->
        
      </div>
    </div>
    
  </section>
</div>
<!-- team section end -->

  
 
  <!--Start Contact Us-->
  <div class="container" id="Contact" style="margin-top: 15px;"> <!--Start Contact Us Container-->
    <h2 class="text-center mb-4 wow zoomIn">Contact US</h2>    <!-- Contact Us Heading -->
    <div class="row">           <!--Start Contact Us Row-->
      <div class="col-md-8">    <!--Start Contact Us 1st Column-->
        <form action="contact.php" method="post">
          <input class="form-control" name="name" placeholder="Name" /><br />
          <input class="form-control" name="phone" placeholder="Phone" /><br />
          <input class="form-control" name="email" placeholder="E-mail" /><br />
          <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
          <input class="btn btn-danger" type="submit" value="Send" /><br /><br />
        </form>
      </div>  <!-- End Contact Us 1st Column-->

      <div class="col-md-4 text-center">    <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        Versatile Technical Solutions and <br>
        Consultancy Services Pvt Ltd, <br>
        Jalandhar <br>
        Punjab - 144411 <br>
        Phone: +9760800504 <br> 
        <a href="https://www.google.com" target="_blank">www.versatile.com</a> <br>
    
        <br><br>
        <strong>Delhi Branch:</strong> <br>
        VTSCS Pvt Ltd, <br>
        Sec V, Delhi <br>
        WB - 804002 <br>
        Phone: +987654321 <br> 
        <a href="https://www.google.com" target="_blank">www.versatile.com</a> <br>
      </div>    <!-- End Contact Us 2nd Column-->
    </div>    <!-- End Contact Us Row-->
  </div>  <!-- End Contact Us Container-->    <!-- End Contact Us -->

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

<!-- Wow js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<!-- end -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>
</html>
