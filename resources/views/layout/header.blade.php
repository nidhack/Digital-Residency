
<!DOCTYPE html>
<html lang="en">
<head>
<head>
<link rel="stylesheet" type="text/css" href="css/oh-autoval-style.css">
<!-- Adding jQuery script. It must be before other script files -->
<script src="js/jquery.min.js"> </script>
<!-- Adding oh-autoVal script file -->
<script src="js/oh-autoval-script.js"></script>

</head>
<title>Realestate Bootstrap Theme </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="{{ asset('assets/script.js') }}"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

</head>

<body>

</body>
<!-- Header Starts -->
<div class="navbar-wrapper">
 
        <div class="navbar-inverse" role="navigation">
          <div class="container" >
          
            <div class="navbar-header">
         

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="/">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="login" >Login</a></li>
                <li class="nav-item dropdown"> 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="member_register">Member</a><br>
					<a class="dropdown-item" href="employee_register">Employee</a><br>
         <!-- <li><a href="contact">Contact</a></li>-->
         <!-- <li><li class="dropdown head-dpdn"style="li.dropdown.head-dpdn {
    display: inline-block;
    padding: 1em 0;    
	float: left;
}
li.dropdown.head-dpdn a.dropdown-toggle {
   margin: 1em 2em;">
										<a href="#" class="dropdown-toggle" style=".profile_details_drop a.dropdown-toggle {
    display:block;
	padding:0em 3em 0 1em;
}" data-toggle="dropdown" aria-expanded="false"><span style="background-color:#111111;" class="badge"><img style="width:30px;height:30px;border-radius:50%;" src="../images/bell2.jpg">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/p5.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/p6.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/p7.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li></li>
              </ul> -->
              
        </div> 
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index"><img src="images/logo.png" alt="Realestate"></a>

</div>
<!-- #Header Starts -->
</div>
@yield('content')