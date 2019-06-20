<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

@extends('layout.footer')

@section('contenttt')
@extends('layout.header_reguser')
@section('contentt')

<!DOCTYPE html>
<html>
<head>
<title>Skills Profile Widget Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Skills Profile Widget template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Custom Theme files-->
<link href="profilecss/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--web font-->
<link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//web font-->
<!--circle-chart-->
<script src="profilejs/jquery-1.11.1.min.js"></script> 
<!--//circle-chart-->

<!--ResponsiveTabs-->
<script src="profilejs/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
		});
	});
</script>
<!--//ResponsiveTabs-->
</head>

	<!-- main -->
	
	<div class="main">
		
		<div class="main-info w3l">
			<div class="main-row"><!-- main-row-one -->
				<div class="profile-grid logo wthree">
				<?php
   $email = Auth::user()->email;
   $st=DB::select("select * from tbl_reg_user,tbl_login where tbl_reg_user.id=tbl_login.id and tbl_login.email='$email'");
   foreach($st as $row)
    {
      
    
      ?>  <form method="post" action="{{url('updates/'.$row->id)}}" enctype="multipart/form-data">
	  @csrf
    
					<img src="proimage/<?php echo $row->u_reg_image; ?>" alt="" height="150px" width="150px">
					
        <div class="text-center">
        <input type="file" class="text-center file-upload" name="photo">
      </div></hr><br>
    </div><div class="form-group">
	<div class="col-xs-6">
	
	
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $row->u_reg_fname; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Second name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any." value="<?php echo $row->u_reg_lname; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="phone" id="phone" placeholder="enter phone"  title="enter your email" value="<?php echo $row->email; ?>"disabled >
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any." value="<?php echo $row->u_reg_phone; ?>" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                        <div class="col-xs-6">
                              <label for="housenumber"><h4>House No</h4></label>
                              <input type="text" class="form-control" name="hno" id="hno" placeholder="House Number" value="<?php echo $row->u_reg_hno; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="text"><h4>Occupation</h4></label>
                              <input type="text" class="form-control" id="location" name="job" placeholder="somewhere" title="enter a Occupation" value="<?php echo $row->u_reg_job; ?>">
                          </div>
					  </div>
					  
                      <div class="form-group">
					  <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update</button>
                        
                            </div>   
				
					
				</div>
			
				<!--bar-js-->
				<script src="profilejs/bars.js"></script>
				<div class="social-icons agileits">
						<ul>
							<li><a href="#"></a></li>
							<li><a href="#" class="fb"></a></li>
							<li><a href="#" class="be"></a></li>
							<li><a href="#" class="gg"></a></li>
						</ul>	
					</div>
				<div class="clear"> </div>
			</div>	
		</div>	
		<!-- copyright -->
		<div class="copyright">
			<p> © 2016 Skills Profile Widget . All rights reserved .</a></p>
		</div>
		<!-- //copyright -->
	</div>	
	<!-- main -->
	<?php 
	}?>
	@endsection

@endsection

</html>
