<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>

<script>
    window.onload = function () {
      document.getElementById("password1").onchange = validatePassword;
      document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
      var pass2 = document.getElementById("password2").value;
      var pass1 = document.getElementById("password1").value;
      if (pass1 != pass2)
        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
      else
        document.getElementById("password2").setCustomValidity('');
      //empty string means no validation error
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

@section('content')
@extends('layout.header')
@section('contentt')

<!-- main -->
<div class="w3layouts-main" > 
	<div class="bg-layer" >
		<h1>Register </h1>
		<div class="header-main" style="width:450px;"> 
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom"  style="width:100%;">
			
				<form action="/register" method="post" name="employee_register" enctype="multipart/form-data" onsubmit="return" class="oh-autoval-form">


<input autocomplete="off" type="text" class="form-control av-name"   av-message="For name validation (space and . is allowed)"
Input Data
placeholder="First Name" name="firstname"  required="" title="Name should only contain letters.">
<input type="text" class="form-control av-name"   autocomplete="off"  av-message="For name validation (space and . is allowed)" placeholder="Second Name" name="secondname"  pattern="[A-Za-z0-9]+" 
title="Name should only contain letters." required="">

<input type="email" class="form-control av-email " placeholder="Enter Email" autocomplete="off" name="email"  av-message="Invalid email address"
pattern="([a-z0-9][-a-z0-9_\+\.]*[a-z0-9])@([a-z0-9][-a-z0-9\.]*[a-z0-9]\.(arpa|root|aero|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|ac|ad|ae|af|ag|ai|al|am|an|ao|aq|ar|as|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|cr|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|ee|eg|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|im|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mv|mw|mx|my|mz|na|nc|ne|nf|ng|ni|nl|no|np|nr|nu|nz|om|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)|([0-9]{1,3}\.{3}[0-9]{1,3}))"  required="" >

@if ($errors->has('email'))
                                    <span role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
<input type="text" class="form-control av-name"   av-message="For name validation (space and . is allowed)" placeholder="Type of Job" name="jobtype"   required="" autocomplete="off">

<input type="text" class="form-control av-phone"   av-message="Phone number 7-13 digits long" placeholder="Mobile Number" name="mobile" autocomplete="off"
 required="">
 <input type="text" class="form-control" placeholder="House Number" name="housenumber" required autocomplete="off">
 @if ($errors->has('housenumber'))
                                    <span role="alert">
                                        <strong>{{ $errors->first('housenumber') }}</strong>
                                    </span>
                                @endif
	  
<label><font color="#0E9408">Upload your Photo</font></label>
<input  name="uploadedimage" class="form-control av-image"   av-message="image validation" type="file" placeholder="Photo">

<input type="hidden" name="_token" value="{{@csrf_token()}}"/>

<input type="password" class="form-control av-password" id="password1"   av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars." placeholder="Password" name="password" required="">
<input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" id="password2">

<input type="hidden" name="type"  value="reguser"/><br>
<input type="submit" class="btn btn-success" name="submit"></button>

				
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
