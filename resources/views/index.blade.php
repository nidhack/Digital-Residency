
@extends('layout.footer')

@section('content')
@extends('layout.header')
@section('contentt')

<body>


<div class="">
    

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="#">Digital Residency</a></h2>
             
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kerala</p>
              <p>Residents' associations are organisations formed by groups of people from a specific geographic community who come together to address issues within their local area and act as a voice for their local community.</p>
              <cite>Since 2002</cite>
            
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#">Digital Residency</a></h2>
             
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kerala</p>
              <p>Residents' associations are organisations formed by groups of people from a specific geographic community who come together to address issues within their local area and act as a voice for their local community.</p>
              <cite>Since 2002</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
            <div class="bg-img bg-img-3"></div>
            <h2><a href="#">Digital Residency</a></h2>
             
             <blockquote>              
             <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kerala</p>
             <p>Residents' associations are organisations formed by groups of people from a specific geographic community who come together to address issues within their local area and act as a voice for their local community.</p>
             <cite>Since 2002</cite>
             </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2><a href="#">Digital Residency</a></h2>
             
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kerala</p>
              <p>Residents' associations are organisations formed by groups of people from a specific geographic community who come together to address issues within their local area and act as a voice for their local community.</p>
              <cite>Since 2002</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#">Digital Residency</a></h2>
             
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kerala</p>
              <p>Residents' associations are organisations formed by groups of people from a specific geographic community who come together to address issues within their local area and act as a voice for their local community.</p>
              <cite>Since 2002</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Need an employee?</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
        <select class="form-control">
                <option>Plumber</option>
                <option>Electrician</option>
                <option>Painter</option>
              </select>
          <?php /*?><input type="text" class="form-control" placeholder="Search of Properties"><?php */?>
          <div class="row">
            <div class="col-lg-4 col-sm-3 ">
              <input type="date" class="form-control" name="date">
            </div>
            <div class="col-lg-4 col-sm-4">
              <input type="number" class="form-control" placeholder="No.Of Workers" name="count">
            </div>
           
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success"  onclick="myFunction()">Find Now</button>
              <script>
              function myFunction() {
              alert("Please Register First");
}
</script>

</div>
          </div>
          
          
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          
                 </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">View All Listing</a>
    <h2>Major Events</h2>
    <div id="owl-example" class="owl-carousel">
      <div class="properties">
        <div class="image-holder"><img src="images/event1.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold"></div>
        </div>
        <h4><font color="#0A8420">Residence Inaguration</font></h4>
       <p class="price">18-03-2018</p>
        
         <?php /*?><a class="btn btn-primary" href="property-detail.php">View Details</a><?php */?>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="images/event4.jpg" class="img-responsive" alt="properties"/>
          <div class="status new">Event 1</div>
        </div>
        <h4><font color="#0A8420">School kit Distrubution</font></h4>
       <p class="price">20-04-2002</p>
       
      </div>
      <div class="properties">
        <div class="image-holder"><img src="images/event5.jpg" class="img-responsive" alt="properties"/></div>
         <h4><font color="#0A8420">Residence  Fiirst Annuversary</font></h4>
       <p class="price">18-01-2019</p>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="images/event6.jpg" class="img-responsive" alt="properties"/></div>
         <h4><font color="#0A8420">Onam 2018</font></h4>
       <p class="price">18-06-2018</p>>
        
      </div>
      <div class="properties">
        <div class="image-holder"><img src="images/event1.jpg" class="img-responsive" alt="properties"/></div>
         <h4><font color="#0A8420">Residence Inaguration</font></h4>
       <p class="price">18-03-2002</p>
        
      </div>
     
      
    </div>
  </div>
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
   <!--   <h3>About Us</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn More</a></p>
      
      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Recommended Properties</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
           Carousel items 
          <div class="carousel-inner">
            <div class="item active">
              <div class="row">
                <div class="col-lg-4"><img src="images/properties/1.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="images/properties/2.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="images/properties/3.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="images/properties/4.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a> </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
</body>


@endsection
</html>