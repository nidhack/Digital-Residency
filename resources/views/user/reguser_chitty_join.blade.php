<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<link href="css/clientval-style.css" rel="stylesheet"/>
<script src="js/clientval-script.js" cv-key=API-KEY></script>

<head>

<script>
    window.onload = function () {
       }

   
  </script>


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

@section('contenttt')
@extends('layout.header_reguser')
@section('contentt')

<!-- main -->
<div class="w3layouts-main" > 
	<div class="bg-layer" >
		<h1>Chitty Join </h1>
		<div class="header-main" style="width:450px;"> 
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom"  style="width:100%;">
			

            <?php
            $date=date("d-m-Y");
$email=Auth::user()->email;
 $st=DB::select("select * from tbl_login where email='$email'");
 foreach($st as $row)
   {

?>
  
<form action="/chittyjoinnnn"  name="employee_register" enctype="multipart/form-data" onsubmit="return" >


<input type="hidden" name="id" value="<?php echo $row->id;?>">   
<label><font color="#0E9408">Joining  chitty Id</font></label> <br>
<input type="text"  class="form-control" name="chitty_id" value="{{$c}} "> <br>
<label><font color="#0E9408">Date of Joining  chitty</font></label>
<input type="text" class="form-control "  name="date" value="{{$date}}">
<label><font color="#0E9408">Enter your Account No Here</font></label>
                  <input type="text" class="form-control"  name="cardno" cv-message="Card numbers in 16 digits" pattern="[0-9]{16}">
                  <label><font color="#0E9408">Enter your IFSC Here</font></label>
                  <input type="text" class="form-control"  name="ifsc" required="" pattern="^[A-Za-z]{4}[a-zA-Z0-9]{7}$"  cv-message="Bank IFSC Code Exact format (4 Chars+ 7 Digits)">
                  <input type="hidden" class="form-control"  name="branch" required="" value="branch">
                 <label><font color="#0E9408">Select your Bank Here</font></label>
                
                   <select name="bank"   class="form-control" required="">
<option >sellect</option>
  <option value="Sbi">Sbi</option>
  <option value="Canara">canara</option>
  <option value="Sib">sib</option>
  <option value="Indian Bank">Indian Bank</option>
  <option value="South Indian Bank">South Indian Bank</option>
</select>
                   <input type="hidden" name="payment_status" value="0"> 
                   <input type="hidden" name="result_status" value="0"> 
       
                 <input type="submit" class="btn btn-success" name="Submit" value="submit"></button>
          
          
		 </form>	 
    <?php
    }
    ?> 

        </div>
  </div>
</div>	
<!-- //main -->

</body>
@endsection

@endsection


</html>
