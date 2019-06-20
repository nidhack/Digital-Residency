<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@extends('layout.footer')

@section('contenttt')
@extends('layout.header_reguser')
@section('contentt')

<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Builder Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webDesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="cssads/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="cssads/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="jsads/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- menu -->
<link href="cssads/component.css" rel="stylesheet" type="text/css"  />
<!-- //menu -->
<!-- gallery -->
<script src="jsads/jquery.chocolat.js"></script>
<link rel="stylesheet" href="cssads/chocolat.css" type="text/css" media="screen" charset="utf-8">
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
$(function() {
	$('.gallery a').Chocolat();
});
</script>
<!-- //gallery -->
<!-- FlexSlider -->
<link rel="stylesheet" href="cssads/flexslider.css" type="text/css" media="screen" />
<script defer src="jsads/jquery.flexslider.js"></script>
<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
<!-- //FlexSlider -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="jsads/move-top.js"></script>
<script type="text/javascript" src="jsads/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='//fontsads.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fontsads.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
</head>
	
<body class="cbp-spmenu-push">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<!-- pattern -->
	<div class="pattern">
		<div class="container">
<!-- header -->
			<div class="header" id="home">
				<div class="top-nav">
					<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s2">
						<h3>Menu</h3>
						<ul>
							<li><a href="#home" class="scroll">Home</a></li>
							<li><a href="#about" class="scroll">About Us</a></li>
							<li><a href="#news" class="scroll">News</a></li>
							<li><a href="#gallery" class="scroll">Gallery</a></li>
							<li><a href="#mail" class="scroll">Mail Us</a></li>
						</ul>
						<p>© 2015 Builder. Design by <a href="http://w3layouts.com/">W3layouts</a></p>
						<ul class="button-icons">
							<li><a href="#" class="twitter"></a></li>
							<li><a href="#" class="g"></a></li>
							<li><a href="#" class="v"></a></li>
						</ul>
					</nav>
					
					<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
					<script src="jsads/classie.js"></script>
					<script>
					var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
					showRightPush = document.getElementById( 'showRightPush' ),
					body = document.body;

					showRightPush.onclick = function() {
						classie.toggle( this, 'active' );
						classie.toggle( body, 'cbp-spmenu-push-toleft' );
						classie.toggle( menuRight, 'cbp-spmenu-open' );
						disableOther( 'showRightPush' );
					};

					function disableOther( button ) {
						if( button !== 'showRightPush' ) {
							classie.toggle( showRightPush, 'disabled' );
						}
					}
					</script>
				</div>
				
<!-- //about-bottom -->
<!-- news -->
			<div id="news" class="news">
		
				<h3>News</h3>
				<div class="line">
				</div>
				<p class="exercise">ALL IN ALL GOOD NEWSES AND GOOD DAYS</p>
			
				<div class="news-grids">
				
					<div class="col-md-5 news-grid">
						<div class="news-grd">
						
						<?php
 $st=DB::select("SELECT * FROM tbl_news_ads where newsads_status='News'");
 foreach($st as $row)
 {
   ?>
   <div class="gallery-grids">
					<div class="col-md-6 baner-top">
							<img src="newsads/<?php echo $row->newsads_image; ?>" alt=" " class="img-responsive" />
						</div>
						<div class="news-grd-text">
							<p class="date"><?php echo $row->updated_at; ?></p>
							<h4><?php echo $row->newsads_heading; ?></h4>
							<p class="children"><?php echo $row->newsads_description; ?></p>
							</div>
					</div>
				
					</div>
					</div>
					<div class="clearfix"> </div>
					<?php
					}
					?>
					</div>
					</div>
<!-- //news -->
<!-- gallery -->
			<div id="gallery" class="gallery">
				<h3>Gallery</h3>
				<div class="line">
				</div>
				<p class="exercise">The image used should reflect your brand values and be relevant and engaging to your target audience.</p>
				<?php
 $st=DB::select("SELECT * FROM tbl_news_ads where newsads_status='ads'");
 foreach($st as $row)
 {
   ?>
			
				<div class="gallery-grids">
					<div class="col-md-6 baner-top">
						<figure class="effect-bubba">
							<a href="newsads/<?php echo $row->newsads_image; ?>" rel="title" class="b-link-stripe b-animate-go  thickbox">
								<img src="newsads/<?php echo $row->newsads_image; ?>" alt="" class="img-responsive" />
								<figcaption>
									<h4><?php echo $row->newsads_heading; ?>"</h4>
									<p><?php echo $row->newsads_description; ?>"</p>	
								</figcaption>	
							</a>
						</figure>	
					</div>
					</div>
					<?php
 }
 ?>
						<div class="clearfix"> </div>
				
				</div>
			</div>
			</div>
		</div>
		</div></div>
<!-- //gallery -->
<!-- mail -->
			
<!-- //here ends scrolling icon -->
</body>
</div>
</div>



</html>
@endsection

@endsection
