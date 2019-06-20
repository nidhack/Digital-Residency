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
				<form action="user_chittyjoin.php" method="post" name="admin_adnews">
               <?php
										    // $con=@mysqli_connect("localhost","root","") or die('unable to connect');
                                            // @mysqli_select_db("adv_mobile_store",$con)or die('could not connect');
	                                           $sql="select * from tbl_chitty";
	                                           $result=mysqli_query($con,$sql);
	                                           $rowcount=mysqli_num_rows($result);
                                               if($rowcount!=0)
	                                             {
	                                               while($row=mysqli_fetch_array($result))
	                                                {  
														
                                                      $c_id=$row['chitty_id'];
                                                      $c_date=$row['chitty_date'];
                                                      $c_expdate=$row['chitty_expdate'];
														 $c_amount=$row['chitty_amount'];
														 $c_payno=$row['chitty_pay_no'];
													}}	
                                        ?>
             
           
               <label><font color="white">Chitty Id:</font></label> <input type="text" name="c_id" class="form-control"  value="<?php echo $c_id?>" disabled>
                <label><font color="white">Chitty Starting Date:</font></label>  <input type="date" class="form-control" placeholder="Date" name="date" value="<?php echo $c_date?>" disabled>
                  <label><font color="white">Chitty Closing Date:</font></label> <input type="date" class="form-control" placeholder="Date " name="date" value="<?php echo $c_expdate?>" disabled>
                 
                 <label><font color="white">Chitty Amount:</font></label> <input type="text" class="form-control" placeholder="Amount of chitty" name="amount"value="<?php echo $c_amount?>"  disabled>
  
       <label><font color="white">Chitti Total No Of Payments:</font></label>  <input type="text" class="form-control" placeholder="No of chitty Payments" value="<?php echo $c_payno?>" disabled>
  
       
               <input type="submit" class="btn btn-success"  value="Join Chitty" name="joinchitty">
          
          
		 </form></div>
		
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
