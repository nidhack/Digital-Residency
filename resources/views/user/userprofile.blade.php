

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
               <li class="active"><a href="home">Home</a></li>
               <!-- <li><a href="about">About</a></li>-->
                <li><a href="/profile" >Profile</a></li> 
                <li><a href="../../../../digiresidency/user/emp_booking_view.php">Booking Notification</a></li>
	
	  <li>  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> </li>
              
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->

<div class="header">


<a href="index"><img src="images/logo.png" alt="Realestate"></a>
<ul class="pull-right">

<!-- #Header Starts -->
</div>


<div class="">
<h5> <font color="#0E9408">welcome {{ Auth::user()->email}}</font> </h5>

<!-- $value = $request->session()->get('key');
$sess=  Auth::user()->email; -->
   <!-- $sess=$request->session()->get( Auth::user()->email); -->
   <!-- $data = $request->session()->all();
   echo $data; -->
   <?php
   $email = Auth::user()->email;
   $st=DB::select("select * from tbl_emp_reg,tbl_login where tbl_emp_reg.id=tbl_login.id and tbl_login.email='$email'");
   foreach($st as $row)
    {
      
      ?>
        <form method="post" action="{{url('update/'.$row->id)}}" enctype="multipart/form-data">
       @csrf
<div class="container bootstrap snippet" style="background-color:#535353;">
    <div class="row">
  		<div class="col-sm-10"><h1></h1></div>
    	<div class="text-left">
        <img src="proeimage/<?php echo $row->photo; ?>" class="avatar img-circle img-thumbnail" alt="$u_photo" height="200px" width="250px" >
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center file-upload" name="photo">
      </div></hr><br>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      

               
          <!--<div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>-->
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
               <!-- <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#messages">Menu 1</a></li>
                <li><a data-toggle="tab" href="#settings">Menu 2</a></li>-->
              </ul>
<?php
  
  
   
    // $st=DB::select("select * from tbl_emp_reg,tbl_login where email='$a'");
    // foreach($st as $object)
    // {
    //      $login_id=$object->id;
       
    // }
   // echo $login_id;
 // $user=DB::select("select * from tbl_emp_reg where id='$login_id'")->first();
?>
            
          <div class="tab-content">
            
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $row->emp_reg_fname; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Second name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any." value="<?php echo $row->emp_reg_lname; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your email" value="<?php echo $row->email; ?>" disabled >
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any." value="<?php echo $row->emp_reg_phone; ?>" >
                          </div>
                      </div>
                     <!-- <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>House No</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value="">
                          </div>
                      </div>
                      <div class="form-group">-->
                          
                          <div class="col-xs-6">
                              <label for="text"><h4>Occupation</h4></label>
                              <input type="text" name="job" class="form-control" id="location" placeholder="somewhere" title="enter a Occupation" value="<?php echo $row->emp_reg_job; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                        <!--  <div class="col-xs-6">
                              <label for="address"><h4>Address</h4></label>
                              <input type="textarea" class="form-control" name="password" id="password" placeholder="password" title="enter your Address" value="$u_address;" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                         //<div class="col-xs-6">
                           <label for="password"><h4></h4></label>
                             // <input type="password" class="form-control" name="password" id="password2" placeholder="password2" title="enter //your password2." >
                          </div>-->
                          <?php
                            }
                          ?>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update</button>
                               	
                            </div>
                            
                    
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             
        <!--<div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div>
      </div>-->
    </div>
  </div>
</div>
<!-- banner -->
<?php /*
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
        
         <a class="btn btn-primary" href="property-detail.php">View Details</a><?php 
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
                    <h4>Contact us</h4>
                    
                    <p><b>NIDHA FATHIMA CK</b><br>
<span class="glyphicon glyphicon-map-marker"></span> Calicut <br>
<span class="glyphicon glyphicon-envelope"></span> nidhafathimack@gmail.com<br>
<span class="glyphicon glyphicon-earphone"></span> 7025010468</p>
           
            </div>
        </div>
<p class="copyright">Copyright 2013. All rights reserved.	</p>


</div></div>




<!-- Modal 
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

 /.modal -->


</body>                                  
</html>
<script>
	$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>

