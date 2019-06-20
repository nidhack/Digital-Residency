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
	<link href="../../../css/stylea.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../../../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
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
	$sess=session()->get('chitty_id');
	$uid = Auth::user()->id;
	
 foreach($st as $row)
 {
   ?>
   
				<form action="/chittydetco" method="post"  name="employee_register" enctype="multipart/form-data" onsubmit="return" class="oh-autoval-form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<input type="hidden"  value="{{$uid}}" name="uid"/><br>
				<label><font color="#0E9408">Chitty Id</font></label>
				
				<input  type="text" class="form-control" readonly name="chitty_id" value="<?php echo $row->chitty_id; ?>"/><br>
				<label><font color="#0E9408">Chitty Amount</font></label>
<input autocomplete="off" type="text" class="form-control" name="amount"   disabled value="<?php echo $row->chitty_det_amount ?>"/><br>
<label><font color="#0E9408">Chitty Number of Turns</font></label>
<input type="text" class="form-control"   autocomplete="off" disabled  name="details"  value="<?php echo $row->chitty_det_pay_no; ?>"/><br>
<label><font color="#0E9408">Chitty Details</font></label>
<input type="text" class="form-control"   autocomplete="off" disabled  name="payment" value="<?php echo $row->chitty_details; ?>" /><br>
<label><font color="#0E9408">Chitty Starting  Date of Joining</font></label>
<input type="date" class="form-control"   autocomplete="off" disabled  name="sdate" value="<?php echo $row->chitty_det_sdate; ?>"/><br>
<label><font color="#0E9408">Chitty Ending Date Joining</font></label>
<input type="date" class="form-control"   autocomplete="off" disabled  name="edate" value="<?php echo $row->chitty_det_edate; ?>"/><br>




<input type="submit" class="btn btn-success" name="submit" value="Join"></button>
</form>
<?php } 
?> 

				
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
