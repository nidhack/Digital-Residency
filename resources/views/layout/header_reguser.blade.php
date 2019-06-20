
<!DOCTYPE html>
<html lang="en">

</head>
<title>Realestate Bootstrap Theme </title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="css/oh-autoval-style.css">
<!-- Adding jQuery script. It must be before other script files -->
<script src="js/jquery.min.js"> </script>
<!-- Adding oh-autoVal script file -->
<script src="js/oh-autoval-script.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="css/clientval-style.css">
<!-- Adding jQuery script. It must be before other script files -->
<script src="js/clientval-script.js"   cv-key=80rqNNtGfqot> </script>
<link href="https://clientval.ml/cv-resources/1.9.3/css/clientval-style.css" rel="stylesheet"/>
<script src="https://clientval.ml/cv-resources/1.9.3/js/clientval-script.js" cv-key=80rqNNtGfqot></script>


 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



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
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <!-- Nav Starts -->
            <div class="navbar-collapse collapse  collapse">
           <!-- <ul class="nav navbar-nav navbar-left">-->
          
           <ul class="pull-right">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Home</a></li>
              <!--  <li><a href="about">About</a></li>-->
                <li><a href="/profileuser" >Profile</a></li> 
                <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newses</a>
                <div class="dropdown-menu">
                
              
        
          <a class="dropdown-item" href="/adnews">Add</a></br>
          <a class="dropdown-item" href="/adnewsuserview">View</a>
           
	</div>   
          </li>
          </li>     
                <li class="nav-item dropdown">
	  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chitty</a>
	  <div class="dropdown-menu">
                
              
    <a class="dropdown-item" href="/chittyportal">Chitty Portal</a></br>
          <a class="dropdown-item" href="/chittystatus">Chitty Status</a></br>
          <a class="dropdown-item" href="/chittyresult">Chitty Result</a></br>
           <a class="dropdown-item" href="/chittypaymentfro">Chitty Payment</a></br>
           
	</div>   
	 
	 
	  <li class="nav-item dropdown">
	  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Complaint</a>
	  <div class="dropdown-menu">
                
              
        
          <a class="dropdown-item" href="/complaint">Add</a></br>
          <a class="dropdown-item" href="complaintuserresponse">View</a>
           
	</div>   
	  </li>
	   <li class="nav-item dropdown">
	  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Members</a>
	  <div class="dropdown-menu">
                
              
        
          <a class="dropdown-item" href="/hmember">Members Add</a></br>
          <a class="dropdown-item" href="/hmemberview">Members View</a>
           
	</div>   
    </li>
    <li class="nav-item dropdown">
	  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Employee Booking</a>
	  <div class="dropdown-menu">
                
              
        
          <a class="dropdown-item" href="/empbooking">Book Here</a></br>
          <a class="dropdown-item" href="/empbookstatus">Booked Status</a>
           
	</div>   
	  </li>
	  
     <li class="nav-item dropdown">
<!-- <li><a href="/chat" >Chat Corner</a></li>  -->
	  </li> <li>  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> </li>
                         

     <li><li class="dropdown head-dpdn"style="li.dropdown.head-dpdn {
    display: inline-block;
    padding: 1em 0;    
	float: left;
}
li.dropdown.head-dpdn a.dropdown-toggle {
   margin: 1em 2em;">
										<a href="#" class="dropdown-toggle" style=".profile_details_drop a.dropdown-toggle {
    display:block;
	padding:0em 3em 0 1em;
}" data-toggle="dropdown" aria-expanded="false"><span style="background-color:#111111;" class="badge"><img style="width:30px;height:30px;border-radius:50%;" src="../images/bell2.jpg"><?php $notification_id?></span></a>
                  
                    
                    <ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3><font color="0D620D">Notification</h3>
												</div>
											</li>
											<li>
												<!-- <div class="user_img"><img src="images/p5.png" alt=""></div> -->
											   <div class="notification_desc">
												<p><h3><a href="/notificationall"></h3></p>
												<p><span><h4><font color="0D620D">Residence Notification<h4></span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <!-- <li class="odd"><a href="#"> -->
												<!-- <div class="user_img"><img src="images/p6.png" alt=""></div> -->
											   <div class="notification_desc">
												<p><h3><a href="/ChittyNotification"></p>
												<p><span><h4><font color="0D620D">Chitty Notification<h4></span></p>
                        </div>
                        <div class="clearfix"></div>	
											 </a></li>
											 <!-- <li class="odd"><a href="#"> -->
												<!-- <div class="user_img"><img src="images/p6.png" alt=""></div> -->
											   <div class="notification_desc">
												<p><h3><a href="/myChittyNotification"></p>
												<p><span><h4><font color="0D620D">My Chitty Notification<h4></span></p>
												</div>
											  
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="/All">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li></li>
               </ul>
            
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->

<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index"><img src="images/logo.png" alt="Realestate"></a>
<ul class="pull-right">
<h5> <font color="#0E9408">welcome {{ Auth::user()->email}}</font> </h5>
<!-- #Header Starts -->
</div>

</div>
<!-- #Header Starts -->
</div>
@yield('contenttt')