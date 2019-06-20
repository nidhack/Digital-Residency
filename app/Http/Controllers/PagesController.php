<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function about(){
    
     return view('pages.about');
      }
     public function login(){
          
           return view('pages.about');
       }
      public function member(){
          
            return view('pages.member_register');
        }
      public function employee(){
          
            return view('pages.employee_register');
        }
   
   
}
 