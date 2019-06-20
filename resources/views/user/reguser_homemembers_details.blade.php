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
		<h2><font color="#ffffff"> <center>House Members Details
       </font> </h2>
		<div class="header-main" style="width:450px;"> 
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom"  style="width:100%;">
			

			<?php
$email=Auth::user()->email;
$id=Auth::user()->id;
 $st=DB::select("select * from tbl_login,tbl_reg_user where tbl_login.email='$email' &&  tbl_reg_user.id='$id'");

 foreach($st as $row)
   {
 //echo $email;
// echo $row->id;
 //  echo $row->u_reg_hno;
?>

<form  method="post"  class="cv-form" action="/hmemberdet" enctype="multipart/form-data" onsubmit="return">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<input type="hidden" class="form-control" name="houseno" value="<?php echo $row->u_reg_hno;?>"/>

<label><font color="#ffffff">Member Name</font></label>
<input  name="name" class="form-control cv-name" type="text" placeholder="name of the member"  cv-message="Accepts Texts including . and white space. Minimum 3 Chars">
<input  name="Occupation" class="form-control" type="text" placeholder="Occupation of the member">
<label><font color="#ffffff">Upload your Photo</font></label>
<input  name="uploadedimage" class="form-control cv-image" type="file" placeholder="Photo" cv-message="Validating only image files including jpg, jpeg, png, gif and bmp">
<label><font color="#0E9408">Date of Birth</font></label>
<input type="date" class="form-control "   autocomplete="off"   name="edate" max="2019-05-03"/><br>


<input type="submit" class="btn btn-success" name="submit" value="submit">
								<!--	<input type="text" class="text-box" placeholder="Search..."><input type="submit" value="">-->
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
