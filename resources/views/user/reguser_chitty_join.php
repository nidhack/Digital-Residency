 <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="css/stylea.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>
@extends('layout.footer')

@section('content')
@extends('layout.header')
@section('contentt')

<!-- main -->
<div class="w3layouts-main" > 
	<div class="bg-layer" >
		<h1>Upload Ads & Newses </h1>
		<div class="header-main" style="width:440px;"> 
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom"  style="width:100%;">
				<form action="user_chittyjoin_action.php" method="post" name="user_chittyjoin">
              <?php
						  //$cid=$_POST['c_id'];	
						  $user_id=$_SESSION['u_name'];     
	
	                                           $sql="select * from tbl_regmember where u_emailid='$user_id'";
	                                           $result=mysqli_query($con,$sql);
	                                         $rowcount=mysqli_num_rows($result);
                                            
                                              if($rowcount!=0)
											  {
	                                               while($row=mysqli_fetch_array($result))
	                                                { 
                                                      $u_id=$row['user_id'];
                                                   $u_fname=$row['u_firstname'];
                                                      $u_sname=$row['u_secondname'];
														 $u_email=$row['u_emailid'];
														// $u_job=$row['u_job'];
														$u_houseno=$row['u_houseno'];
														 $u_mobile=$row['u_mobile'];
														//$chitty_id=$row['chitty_id'];
														//$chitty_amount=$row['chitty_amount'];
														//echo $u_mobile;
														// $u_houseno=$row['u_houseno'];
														// $u_photo=$row['u_photo'];
														 //$u_address=$row['u_address'];
											}}				
														
                                         ?> 	
                           

             
               <input type="date" class="form-control" placeholder="Date of Joining  chitty" name="date" required="">
                  <input type="text" class="form-control" placeholder="Enter your Card No Here" name="cardno" pattern="[0-9]{16}">
                  <input type="text" class="form-control" placeholder="Enter your IFSC Here" name="ifsc" required="">
                 <input type="text" class="form-control" placeholder="Enter your Branch Name" name="branch" required="">
                   <input type="text" class="form-control" placeholder="Enter your Bank Name" name="bank" required="">
                  
          
       
                 <button type="submit" class="btn btn-success" name="Submit">Join Now</button>
          
          
		 </form>	 
          	
			</div>
		
		</div>
		<br>
		<br>
		<br>
		<br>
		
	</div>
</div>	
<!-- //main -->

</body>
@endsection

@endsection


</html>
