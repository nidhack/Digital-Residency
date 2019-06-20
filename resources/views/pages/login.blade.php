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
		<h1> Login </h1>
		<div class="header-main" style="width:440px;"> 
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom"  style="width:100%;">
				<form action="{{ route('home') }}" >
						@csrf
						{{ method_field('POST') }}
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" placeholder="Email Address" required="" autocomplete="off" />
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Password" required="" autocomplete="off"/>
					</div>
					
					<div class="bottom">
					<button type="submit" class="btn">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
						
					</div>
					<div class="links">
						<p><a href="#">Forgot Password?</a></p>
						<p class="right"><a href="#">New User? Register</a></p>
						<div class="clear"></div>
					
					</div>
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
