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
		<h1>Upload your Ads
	</h1>
		<div class="header-main" style="width:450px;"> 
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom"  style="width:100%;">
			

			<?php
$email=Auth::user()->email;
 $st=DB::select("select * from tbl_login where email='$email'");
 foreach($st as $row)
   {
 //echo $email;
// echo $row->id;
   
?>

<form  method="post"  action="/adnewsuser" class="cv-form" enctype="multipart/form-data" onsubmit="return">
<input type="hidden" name="_token" value="{{ csrf_token() }}">


<label><font color="#ffffff">Upload your Photo</font></label>
<input  name="uploadedimage" class="form-control cv-image" type="file" placeholder="Photo" cv-message="Validating only image files including jpg, jpeg, png, gif and bmp" >
<input type="hidden" name="newsAds_status" value="ads"/>
<input type="hidden" name="id" value="<?php echo $row->id; ?>">

<input  type="text" class="form-control" name="heading" placeholder="HEADING" /><br>
<textarea rows="6" class="form-control" placeholder="DESCRIPTION" name="description"></textarea>
<input type="submit" class="btn btn-success" name="submit"  value="submit" >
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
