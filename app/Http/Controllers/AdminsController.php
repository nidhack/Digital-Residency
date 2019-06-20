<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Reg;
use App\Regemp;
class AdminsController extends Controller
{
    public function listruser(){
        $st=DB::select("select * from tbl_login,tbl_reg_user where login_type='reguser' and tbl_login.id=tbl_reg_user.id");

        return view('admin.admin_list_reguser',compact('st'));
         }
         
    public function listremp(){
        $sd=DB::select("select * from tbl_login,tbl_emp_reg where login_type='employee' and tbl_login.id=tbl_emp_reg.id");

        return view('admin.admin_list_empuser',compact('sd'));
         }
        public function showProfile()
        { 
            return view('user.emp_profile');
        }
        public function showProfileuser()
        { 
            return view('user.reguser_profilenw');
        }
        public function showUpdateuser($id, Request $data)
        { 
            $imagee=$data['photo'];
            $name= time().'_'.$imagee->getClientOriginalName();
            $img=$imagee->move(public_path().'/proeimage/',$name);
            $value = Regemp::where('id', '=', $id)->get();
            $fname=$data['first_name'];
            $lname=$data['last_name'];
            $job=$data['job'];
            $mobile=$data['mobile'];
            $photo=$name;
            Regemp::where('id', $id)
            ->update(['emp_reg_fname' => $fname,'emp_reg_lname'=>$lname,'emp_reg_job' =>$job,'emp_reg_phone'=>$mobile,'photo'=>$photo]);
           return redirect('/profile');
        }
        
        public function showUpdatreguser($id, Request $data)
        { 
            $imagee=$data['photo'];
            $name= time().'_'.$imagee->getClientOriginalName();
            $img=$imagee->move(public_path().'/proimage/',$name);
            $value = Reg::where('id', '=', $id)->get();
            $fname=$data['first_name'];
            $lname=$data['last_name'];
            $job=$data['job'];
            $mobile=$data['mobile'];
            $hno=$data['hno'];
            $photo=$name;
            Reg::where('id', $id)
            ->update(['u_reg_fname' => $fname,'u_reg_lname'=>$lname,'u_reg_job'=>$job,'u_reg_phone'=>$mobile,'u_reg_hno'=>$hno,'u_reg_image'=>$photo]);
           return redirect('/profileuser');
        }
}

