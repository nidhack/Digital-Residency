License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
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
		<h1>Register Complaint
        </h1>
		<div class="header-main" style="width:450px;"> 
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom"  style="width:100%;">
			

          <div class="card mb-3">
          <div class="card-header">
            <!-- <i class="fas fa-chart-area"></i> -->
						<!-- Area Chart Example</div> -->
						<div><center><h2>Select Employee</h2></center></div>
          <div class="card-body">
					<form method="POST" name="search" action="/emp_search_get">
            @csrf
<center><select name="user">
<option value='Select' selected disabled>Select</option>;
				@foreach($user as $users)
				$category=$users->category;
      <option value='{{$users->category}}'>{{$users->category}}</option>;
      
			@endforeach
    </select>
    
    
    <input type="submit" name="submit" value="Search"></center>
</form> 
  </div>
        </div>
  </div>
</div>	
<!-- //main -->

</body>
@endsection

@endsection


</html>
