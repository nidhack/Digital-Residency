
<!DOCTYPE html>
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
<script src="js/jquery.min.js"> </script>

      
      <script src="js/dropdownemp.js"></script>

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

		<h1>Employee Booking successful
    </h1>
    
    <div class="header-main" style="width:1200px;"> 
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom"  style="width:100%;">
			
    <?php 
            $id = Auth::user()->id;
          $st=DB::select("select * from tbl_empbooking,tbl_emp_reg where  tbl_empbooking.empname=tbl_emp_reg.id and tbl_empbooking.userid=$id ");
          ;
     
          ?>
          
          <table id="table1" data-toggle="table" style="width:100%;text-align:left;background-color:#18E65D;"> 
                                            <thead>
                                                <tr>    `   
                                                <th data-field="Company" data-editable="true">&nbsp;&nbsp;Job Category&nbsp;&nbsp;</th>
                                                    <th data-field="Status" data-editable="true">&nbsp;&nbsp;Name&nbsp;&nbsp;</th>
                                  
                                                    <th data-field="Date" data-editable="true">&nbsp;&nbsp;Date &nbsp;&nbsp;</th>
                                                    <th data-field="Phone" data-editable="true">&nbsp;&nbsp;Phone Number&nbsp;&nbsp;</th>
                                                
                                                   
                                                    <th data-field="company" data-editable="true">&nbsp;&nbsp;Booked Status&nbsp;&nbsp;</th>
                                                 
                                                  
                                                    </tr>
                                            </thead>
                                            <tbody>
                                                @isset($st)
                                                @foreach($st as $approve)
                                               
                                               
                                                <tr>
                                                
                                                    <td>{{$approve->empjob}}</td><td>{{$approve->emp_reg_fname}}</td>
                                                    
                                                    
                                               <td>{{$approve->bookingdate}}</td>
                                               <td>{{$approve->emp_reg_phone}}</td>
                                               
                                                  <td>{{$approve->bookingstatus}}</td>                                               
                                                
        
                                                                  
                                                    
                                                                
                                                 
                                                    <td></td> </tr>
                                                @endforeach
                                                @endisset
                                               
                                                
                                            </tbody>
                                        </table>
        </div>
                                    

			        </div>

        </div>
  </div>
</div>	

<!-- //main -->

</body>
@endsection

@endsection


</html>
