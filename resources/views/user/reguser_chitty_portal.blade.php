
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
                         


     </ul>
              
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->

<div class="container">

<!-- Header Starts -->
<div class="header">
<!--<a href="index"><img src="images/logo.png" alt="Realestate"></a>
<ul class="pull-right">
<h5> <font color="#0E9408">welcome {{ Auth::user()->email}}</font> </h5>
#Header Starts -->
</div>

</div>
<!-- #Header Starts -->
</div>



     <h1>CHITTY PORTALS</h1>
	 
<head>


<title>CHITTY RESULT</title>

<link href="chittyresultcss/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food Order Form Responsive, Login form web template, Sign up Web Templates,Profile widgets,Flat icon hover effects,Flat Registration Forms  Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!-- //end-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,600italic,700,300italic' rel='stylesheet' type='text/css'>
</head>
<body>
<div style="width:1500px;">
<?php

$st=DB::select("SELECT * FROM tbl_chitty_details ORDER BY 	chitty_id DESC Limit 3");
$l = 0;
$id1=Auth::user()->id;
$i = 1;
foreach($st as $row)
{
$id=$row->chitty_id;
$st1=DB::select("SELECT * FROM tbl_chitty_join where chitty_id ='$id'");


if(count($st1) <$row->chitty_det_pay_no)
   {$st3 = DB::select("SELECT * FROM tbl_chitty_join where chitty_id ='$id' and id = $id1");
  ?>
 		<div class="message warning"  style="float:left;width:500px;">
			<div class="inset agile">
				<div class="sap_tabs w3ls-tabs" style="width:300px;">
				<div id = "regstd<?php echo $i; ?>"></div>
					<h2>
							<label>SELECT AMOUNT</label></h2>
							
							
                        <form action="/chittyjo?id={{$row->chitty_id}}" method="post">
                        <input type="hidden" name="_token" value="{{@csrf_token()}}"/>
                        @csrf
                        <input  type="hidden" class="form-control" disabled id="chitty_id" name="chitty_id" value="<?php echo $row->chitty_id ?>"/><br>
												<label><font color=" #ff0080">Chitty Name</font></label>
				            <input  type="text" class="form-control" disabled name="chittyy_name" value="<?php echo $row->chitty_name ?>"/><br>
                                
							<label><font color=" #ff0080">Chitty Amount</font></label>
				            <input  type="text" class="form-control" disabled name="chittyy_id" value="<?php echo $row->chitty_det_amount ?>"/><br>
                             		
							<label><font color=" #ff0080">Chitty Number Of Payment</font></label>
                            <input  type="text" class="form-control" disabled name="chitty_payno" value="<?php echo $row->chitty_det_pay_no ?>"/><br>
              
				
                      
                             
                      
						        <input type="submit" id="join<?php echo $i; ?>" class="btn btn-success" name="submit" value="Join">
														</form>
														
														<?php 
															if($st3){

																?>
																<script>
																document.getElementById("join<?php echo $i; ?>").style.display = "none";
																document.getElementById("regstd<?php echo $i; ?>").innerHTML = "Already Registered"
																</script>
																<?php
															}
														?>
                            </div>
               
            </div>
        </div>
				<!--	<div class="clear"> </div>
					<div class="alert-close"> </div> 
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="login-agileits-top"> 
								<form action="#" method="post">
									<p>Where are you? </p>
									<input type="text" name="User Name" placeholder="Street Address,City,State" required=""/>
									<p>What would you like?</p>
									<input type="text" placeholder="Item,Restaurant,Cuisine(Optional)" name="User Name" required=""/> 
									<input type="submit" value="Find restaurants">
								</form>  =					</div>
                             
                                
                        </div> 
</div>
</div>-->
                     
												<?php
	 }
	 $i++;
 }
 ?>
</div> 
						<!-- <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="login-agileits-top"> 

						
							</div>
						</div> 
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2"  style="float:left;">
							<div class="login-agileits-top"> 
								<div class="login-agileits-top"> 
								<form action="#" method="post">
									<p>Name</p>
									<input type="text" name="Name" placeholder="Name" required=""/>
									<p>Phone</p>
									<input type="text" placeholder="Phone " name="User Name" required=""/> 
									<input type="submit" value="Check Availability">
								</form>  
							</div>  
							</div>
						</div>
					</div>							
				</div>	 
	</div>	-->
	<div class="right-section-w3ls"></div>
			<div class="clear"> </div>

				</div>					
		</div>

	<div class="clear"> </div>
     <div class="copy-right w3l-agile">
		
	</div>
<script type="text/javascript" src="chittyresultjs/jquery-2.1.4.min.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<!-- ResponsiveTabs js -->
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
			<!-- //ResponsiveTabs js -->		
			<div class="footer">

<div class="container">



<div class="row">
        
             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>NIDHA FATHIMA CK</b><br>
<span class="glyphicon glyphicon-map-marker"></span> CALICUT <br>
<span class="glyphicon glyphicon-envelope"></span> nidhafathimack@gmail.com<br>
<span class="glyphicon glyphicon-earphone"></span> 7025010468</p>
            </div>
        </div>
<p class="copyright">Copyright 2013. All rights reserved.	</p>

</div></div>			
            </body>


</html>
