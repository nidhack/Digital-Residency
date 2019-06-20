@extends('layout.header')
@extends('layout.footer')
@section('content')

@endsection

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
   
    <h2>Register</h2>
</div>
</div>
<!-- banner -->
<div class="container">

<!-- Header Starts -->
  <div class="header">
	
<a href="index.php"><img src="images/nn.png" alt="Realestate"></a>
             

             <?php /* <ul class="pull-right">
                <li><a href="buysalerent.php">Buy</a></li>
                <li><a href="buysalerent.php">Sale</a></li>         
                <li><a href="buysalerent.php">Rent</a></li> */ ?>
              </ul> 
</div>
<!-- #Header Starts -->
</div> 


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
<form action="uinsertb.php" method="post" name="employee_register" enctype="multipart/form-data">


                <input autocomplete="off" type="text" class="form-control" placeholder="First Name" name="fname"
                pattern="[A-Za-z0-9]+"  required="" title="Name should only contain letters.">
                <input type="text" class="form-control" placeholder="Second Name" name="lname"  pattern="[A-Za-z0-9]+" 
                title="Name should only contain letters." required="">
                
                <input type="email" class="form-control" placeholder="Enter Email" name="email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required=""  title="Email should be valid">
                <input type="text" class="form-control" placeholder="Type of Job" name="job"  pattern="[A-Za-z0-9]+" required=""title="Job should only contain letters." >
                <input type="text" class="form-control" placeholder="Mobile Number" name="mobile"
                pattern="^\d{10}$" required="" title="Phone number with 7-9 and remaing 9 digit with 0-9">
                 <input type="text" class="form-control" placeholder="House Number" name="hnumber" required>
               
                      
                <label><font color="#0E9408">Upload your Photo</font></label>
                <input  name="uploadedimage" class="form-control" type="file" placeholder="Photo" enctype="multipart/form-data">
                
                <!--<input type="text" class="form-control" placeholder="House Name" name="hname"  pattern="[A-Za-z0-9]+" 
                title="Name should only contain letters." required="">-->
                <input type="hidden" name="_token" value="{{@csrf_token()}}"/>
                <textarea rows="6" class="form-control" placeholder="Address" name="address"></textarea>
                <input type="password" class="form-control" placeholder="Password" name="password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required="">
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">

              
      <button type="submit" class="btn btn-success" name="Submit">Register</button>
          
</form>

        </div>
  
</div>
</div>
</div>

