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

	

	<!-- Custom Theme files -->
	<link href="gallrycss/stylea.css" rel="stylesheet" type="text/css" media="all" />
	<link href="gallerycss/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//galleryfonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
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
			

   
   <script src="galleryjs/jquery.chocolat.js"></script>
<link rel="stylesheet" href="gallerycss/chocolat.css" type="text/css" media="screen" charset="utf-8">
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
$(function() {
	$('.gallery a').Chocolat();
});
</script>

<!-- gallery -->
<div id="gallery" class="gallery">
				<h3>Gallery</h3>
				<div class="line">
				</div>
				
<?php
 $st=DB::select("SELECT * FROM tbl_news_ads ");
 foreach($st as $row)
 {
   ?>
   
			
				<div class="gallery-grids">
					<div class="col-md-6 baner-top">

						<figure class="effect-bubba">
							<a href="newsads/<?php echo $row->newsads_image; ?>" rel="title" class="b-link-stripe b-animate-go  thickbox">
								
							<img src="newsads/<?php echo $row->newsads_image; ?>" alt="" class="img-responsive" />
								<figcaption>
                                   <h3>	<?php echo $row->newsads_description?></h3>			
					</div>
					
					<div class="clearfix"> </div>
				</div>
            </div>
            <?php
 }
 ?>
<!-- //gallery 

				
			<div>
		
		</div>
		<br>
		<br>
		<br>
		<br>-->
		
	</div>
</div>	
	</div>

</body>
@endsection

@endsection


</html>
