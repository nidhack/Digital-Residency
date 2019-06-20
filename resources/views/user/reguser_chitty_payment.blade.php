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
		<h1>Chitty Payment </h1>
		<div class="header-main" style="width:450px;"> 
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom"  style="width:100%;">
			

            <?php
$email=Auth::user()->email;
 $st1=DB::select("select * from tbl_login where email='$email'");
 foreach($st1 as $row1)
   {
// //  echo $email;
//  echo $row->id;
   
?>
  @foreach ($st as $row)
  <form action="/chittypaid" method="post" name="user_chittyjoin" enctype="multipart/form-data" onsubmit="return">
  @csrf
  <input type="hidden" name="id" value="<?php echo $row1->id;?>">   
  <input type="hidden" name="cid" value="{{$c}}">   
     <label><font color="#DFD8D8">Chitty id</font></label> <input type="text" name="chitty_id" class="form-control"  value="{{$c}}" disabled>
<input type="text" class="form-control cv-atm" placeholder="cardno" name="cardno" required="" cv-message="ATM Card numbers from 14-20 digits" >
<input type="text" class="form-control" placeholder="amount" name="amount" required="" value="{{$row->chitty_det_amount}}" disabled>
               
 @endforeach              
<label><font color="#DFD8D8">Select Type of Card</font></label>   
<select name="cardtype"   class="form-control" required="">
  <option >sellect</option>
  <option value="Sbi">visa</option>
  <option value="Canara">master</option>
</select>
                <input type="text" class="form-control" placeholder="Enter Card Holder Name" name="cardname" pattern="[a-zA-Z0-9\s]+">

              
              <input type="text" class="form-control" placeholder="Enter your Cvv" pattern="[0-9]{3}" >
               

      <label><font color="#DFD8D8">Card Expiry Date</font></label><input type="month" class="form-control" placeholder="Enter Card Expiry Date of your card" required="">

     
             <input type="submit" class="btn btn-success"  value="Pay Now" name="joinchitty" value="submit">
 
        


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
