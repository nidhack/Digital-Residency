<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User;
use View;
use App\Empbookings;

class AprovesController extends Controller
{
    public function approvereguser($id)
    {
    
       $value = User::where('id', '=', $id)->get();
      // $st=DB::select("select * from tbl_login,tbl_reg_user where role='reguser' and tbl_login.id=tbl_reg_user.id");
       foreach ($value as $object)
       { 
        if($object->login_status == '1')
           {
            User::where('id', $id)
            ->update(['login_status' => 0]);
               
           }
        else
           {
            User::where('id', $id)
            ->update(['login_status' => 1]);
           }
           
         }
        // return View('/Admins/accordion');
        //return view('');
      return redirect('/listruser');
    }
    public function approveemp($id)
      {
            
       $value =User::where('id', '=', $id)->get();
      // $st=DB::select("select * from from tbl_login,tbl_reg_user where role='reguser' and tbl_login.id=tbl_reg_user.id");
       foreach ($value as $object)
       { 
        if($object->login_status == '1')
           {
            User::where('id', $id)
            ->update(['login_status' => 0]);
               
           }
        else
           {
            User::where('id', $id)
            ->update(['login_status' => 1]);
           }
           
         }
        // return View('/Admins/accordion');
        //return view('');
      return redirect('/listremp');
        }
    public function deleteruser($id)
    {
    
      $a=$id;
      if (is_array($a)) 
      {
          User::destroy($a);
      }
      else
      {
          User::findOrFail($a)->delete();
      }
      return redirect('/listruser');
    
    }
    public function deleteemp($id)
    {
       $a=$id;
      if (is_array($a)) 
      {
          User::destroy($a);
      }
      else
      {
         User::findOrFail($a)->delete();
      }
      return redirect('/listremp');
    }
  /*  public function search(Request $req)
    {
      $search=$req->input('search');
      $st=DB::select("select * from tbl_login,tbl_reg_user where reg_fname='$search' and tbl_login.id=tbl_reg_user.id");
      return view('Admins/dashboard',compact('st'));
    }*/
    public function approvebooking($empname)
    {
    
       $value = Empbookings::where('empname', '=', $empname)->get();
      // $st=DB::select("select * from tbl_login,tbl_reg_user where role='reguser' and tbl_login.id=tbl_reg_user.id");
       foreach ($value as $object)
       { 
        if($object->bookingstatus == 'Booked')
           {
        Empbookings::where('empname', $empname)
            ->update(['bookingstatus' => 'Approved']);
               
           }
        else
           {
            Empbookings::where('empname', $empname)
            ->update(['bookingstatus' => 'Booked']);
           }
           
         }
        // return View('/Admins/accordion');
        //return view('');
       return redirect('/bookingnotification');
    }

  }

