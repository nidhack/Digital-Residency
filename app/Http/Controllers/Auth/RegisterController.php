<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\reg;
use App\regemp;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
        //  'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tbl_login'],
        //   'password' => ['required', 'string', 'min:8', 'confirmed'],
           'u_reg_hno' => [ 'unique:reg'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $type = $data['type'];
        
         $User=User::create([
            //'id' => $data['login_id'],
            'email' => $data['email'],
            'password' => $data['password'],
            'login_type' => $data['type'],
            'login_status' => 1,
        
            'password' => Hash::make($data['password']),
        ]);
        if($type=="reguser")
        {
            $image=$data['uploadedimage'];
            $name= time().'_'.$image->getClientOriginalName();
            $img=$image->move(public_path().'/proimage/',$name);
       Reg :: create([
            'id'=>$User->id,
            
            'u_reg_fname' => $data['firstname'],
        'u_reg_lname' => $data['secondname'],
        'u_reg_job' => $data['jobtype'],
        'u_reg_phone' => $data['mobile'],
        'u_reg_hno' => $data['housenumber'],
        'u_reg_image' => $name,
        
        ]);
       }
    else
    {  
        $imagee=$data['photo'];
        $name= time().'_'.$imagee->getClientOriginalName();
        $img=$imagee->move(public_path().'/proeimage/',$name);
  
       Regemp :: create([
            'id'=>$User->id,
            'emp_reg_fname' => $data['firstname'],
        'emp_reg_lname' => $data['secondname'],
        'emp_reg_job' => $data['jobtype'],
        'emp_reg_phone' => $data['mobile'],
        'photo' => $name,
        
        ]);
       }
        return $User;
        

    }
}


            
      