

<html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
@extends('layout.footer')


@section('contenttt')
@extends('layout.header_reguser')
@section('contentt')
<!-- #Header Starts -->
</div>
<div class="">
    

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
         
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bgmain.png"></div>
              <?php
  
   foreach($st as $row)
   {
     ?> <form method="post" action="#">
     @csrf
 <table style="width:100%;text-align:left;background-color:#18E65D;">
 <tr>
   <th>No:</th>
   <th>Notificatiom</th>
   <th>Date</th>
 </tr>
 <tr>
   <td> <?php  echo $row->notification_id;?></td>
   <td> <?php  echo  $row->notification;?></td>
   <td> <?php  echo  $row->date;?></td>
 </tr>
 
</table>
<?php
}
?>

           </div>
         </div>
       </div><!-- /sl-slider -->
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

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                  <!-- <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="../../../../digiresidency/about.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="../../../../digiresidency/agents.php">Authorities</a></li>         
               <?php /*?><li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">Blog</a></li><?php */?> 
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="../../../../digiresidency/contact.php">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest Newses and Advertisement in our Residence.</p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Enter Your email address" class="form-control">
                                <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="../../../../digiresidency/images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="../../../../digiresidency/images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="../../../../digiresidency/images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="../../../../digiresidency/images/instagram.png" alt="instagram"></a>
            </div>

<!-- Modal 
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
 /.modal -->




 </body>
@endsection

@endsection


</html>