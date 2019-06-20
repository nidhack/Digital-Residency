




<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>
<title>Digital Residency </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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

<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal" >
<button id="myBtn"></button>


  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Here is Your Chitty Result</h2>
    </div>
    <div class="modal-body">
      <p><?php
	
	


//$pid=$_POST['pid'] ;

 /*$sql="SELECT *
FROM tbl_chitty_result

ORDER BY r_id DESC
LIMIT 1";
	                                           $result=mysqli_query($con,$sql);
	                                         $rowcount=mysqli_num_rows($result);
                                              if($rowcount!=0)
											  {
	                                               while($row=mysqli_fetch_array($result))
	                                                {  
                                                      $u_id=$row['r_fname'];
														$home_id=$row['r_houseno'];
                                                          $phone=$row['c_phone'];
	                                            echo $u_id;
													
			                                    echo $home_id;	
													echo $phone;
													}
											  }
*/	?>
    
     </p>
     
    </div>
    <div class="modal-footer">
      <h2><center><font color="#D71575">Congratz</font></center></h2>
      <h3><center>Others Please Wait For Next Turn</center></h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


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
            <div class="navbar-collapse collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="login.php" >Login</a></li> 
                <li class="nav-item dropdown"> 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="member_register.php">Member</a></br>
          <a class="dropdown-item" href="employee_register.php">Employee</a>
          
        </div> 
             
          </li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="../../../public/images/logo.png" alt="Realestate"></a>

              <ul class="pull-right">
                <li><a href="user/user_profile.php">Profile</a></li>
                <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newses</a>
                <div class="dropdown-menu">
                
              
        
          <a class="dropdown-item" href="user/adnews_user.php">Add</a></br>
          <a class="dropdown-item" href="user/adnews_userview.php">View</a>
           
	</div>   
               </li>     
                <li class="nav-item dropdown">
	  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chitty</a>
	  <div class="dropdown-menu">
                
              
        
          <a class="dropdown-item" href="user/user_chittyadd.php">Join Chitty</a></br>
          <a class="dropdown-item" data-toggle="modal" data-target="#myModal">Chitty Result</a>
           <a class="dropdown-item" href="user/chitty_user_payment.php">Chitty Payment</a>
           
	</div>   
	  </li>
	 <li><a href="user/user_notification_view.php">Notificaton</a></li>
	 
	  <li class="nav-item dropdown">
	  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Complaint</a>
	  <div class="dropdown-menu">
                
              
        
          <a class="dropdown-item" href="user/complaint_user.php">Add</a></br>
          <a class="dropdown-item" href="user/complaint_userresponse.php">View</a>
           
	</div>   
	  </li>
	   <li class="nav-item dropdown">
	  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Members</a>
	  <div class="dropdown-menu">
                
              
        
          <a class="dropdown-item" href="user/user_house_member.php">Members Add</a></br>
          <a class="dropdown-item" href="user/user_house_member_view.php">Members View</a>
           
	</div>   
	  </li>
	   <li><a href="user/employee_booking.php">Employee Booking</a></li>
	 
	  
	  <li><a href="logout.php">Logout</a>
         
                                    </li>
              </ul>
</div>
<!-- #Header Starts -->
</div>
<div class="">
    

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
				<h2><a href="#">Digital Residency</a></h2>
             
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kerala</p>
              <p>Residents' associations are organisations formed by groups of people from a specific geographic community who come together to address issues within their local area and act as a voice for their local community.</p>
              <cite>Since 2002</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
			   <h2><a href="#">Digital Residency</a></h2>
              <blockquote> 
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kerala</p>
              <p>Residents' associations are organisations formed by groups of people from a specific geographic community who come together to address issues within their local area and act as a voice for their local community.</p>
              <cite>Since 2002</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="#">Digital Residency</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kerala</p>
              <p>Residents' associations are organisations formed by groups of people from a specific geographic community who come together to address issues within their local area and act as a voice for their local community.</p>
              <cite>Since 2002</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
             <h2><a href="#">Digital Residency</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kerala</p>
              <p>Residents' associations are organisations formed by groups of people from a specific geographic community who come together to address issues within their local area and act as a voice for their local community.</p>
              <cite>Since 2002</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#">Digital Residency</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kerala</p>
              <p>Residents' associations are organisations formed by groups of people from a specific geographic community who come together to address issues within their local area and act as a voice for their local community.</p>
              <cite>Since 2002</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>



 <?php /*?><input type="text" class="form-control" placeholder="Search of Properties"><?php */?>
          <div class="row">
            <div class="col-lg-4 col-sm-3 ">
              <input type="date" class="form-control" name="date">
            </div>
            <div class="col-lg-4 col-sm-4">
              <input type="number" class="form-control" placeholder="No.Of Workers" name="count">
            </div>
           <?php /*?> <div class="col-lg-3 col-sm-4">
            <select class="form-control">
                <option>Property</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
              </div><?php */?>
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success"  onclick="window.location.href='buysalerent.php'">Find Now</button>
              </div>
          </div>
          
          
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">View All Listing</a>
    <h2>Major Events</h2>
    <div id="owl-example" class="owl-carousel">
      <div class="properties">
        <div class="image-holder"><img src="images/event1.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
       <p class="price">Price: $234,900</p>
        
         <?php /*?><a class="btn btn-primary" href="property-detail.php">View Details</a><?php */?>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="images/event4.jpg" class="img-responsive" alt="properties"/>
          <div class="status new">Event 1</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">########</p>
        
       
      </div>
      <div class="properties">
        <div class="image-holder"><img src="images/event5.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Event2</a></h4>
        <p class="price">######</p>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="images/event6.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Event3</a></h4>
        <p class="price">#######</p>
        
      </div>
      <div class="properties">
        <div class="image-holder"><img src="images/event1.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Event4</a></h4>
        <p class="price">######</p>
        
      </div>
     
      
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <?php /*?><h3>About Us</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn More</a></p>
      
      </div><?php */?>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3></h3>
        <div id="myCarousel" class="carousel slide">
          
          <!-- Carousel items -->
          <div class="carousel-inner">
           
          
         
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Authorities</a></li>         
               <?php /*?><li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">Blog</a></li><?php */?> 
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest Newses and Advertisement in our Residence.</p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Enter Your email address" class="form-control">
                                <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>Bootstrap Realestate Inc.</b><br>
<span class="glyphicon glyphicon-map-marker"></span> 8290 Walk Street, Australia <br>
<span class="glyphicon glyphicon-envelope"></span> hello@bootstrapreal.com<br>
<span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
            </div>
        </div>
<p class="copyright">Copyright 2013. All rights reserved.	</p>


</div></div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



