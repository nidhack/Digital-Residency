<?php

namespace App\Http\Controllers;

use Illuminate\support\facades\DB;
use Illuminate\support\facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
   // return view('home');
  
  // return view('logout()');
 // return Auth::logout();
///return Auth::user();
       if(Auth::user()->login_type == 'reguser'){
           
           return view('reguser_home');
          
      }
      elseif(Auth::user()->login_type == 'admin'){
         return view('dashboard');
      }
    elseif(Auth::user()->login_type == 'employee'){
       return view('emp.regemp_home');
        }

    }


    public function test()
    {
        return Auth::user();
    }
}




