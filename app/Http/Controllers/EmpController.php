<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Empbookings;
use App\Mail\SendMailableBooking;
use Mail;


class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function empbooking(Request $request)
    {
        return view('user.reguser_empbooking');
    }

    public function  empbook(Request $request)

     {
         $userid=$request['id'];
        Empbookings::create([ 
            'userid'=>$request['id'],

        'empjob'=>$request['category'],
        'empname' =>$request['subcat'],
        'bookingdate' => $request['date'],
         'bookingstatus'=>'Booked',

         
            
        ]);
         $id=$request->get('id');
         $st=DB::select("SELECT * FROM tbl_empbooking as a,tbl_login as l WHERE a.empname=l.id and a.userid=$id ");
          $a=sizeof($st);
          $emailid=$st[$a-1]->email; 
         $sv=DB::select("SELECT * FROM tbl_reg_user as c,tbl_empbooking  as e where c.id=e.userid and  c.id=$id"); 
           $b=sizeof($sv);
    
     $name=$sv[$b-1]->u_reg_fname;
     $houseno=$sv[$b-1]->u_reg_hno;
      $phoneno=$sv[$b-1]->u_reg_phone;
      $this->mail($emailid,$name,$houseno,$phoneno);
  return view('user.reguser_bookingsucces');
        }

public function mail($emailid,$name,$houseno,$phoneno)
{
  
    if (Mail::to($emailid)->send(new SendMailableBooking($name,$houseno,$phoneno))){
        return true;
    }
        return false;
}
}


        
        //  return response()->json($check);
     

