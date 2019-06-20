<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCtegory;
use DB;
class SubcategoryController extends Controller
{
    // public function index()
    // {
    //     $data=DB::table('categories')->get();
    //    // return $data;
    //    // return view('admin.subcategory',['data' => $data]);
        
    // }
    public function addSubcategory()
    {
      
        $data=DB::table('tbl_category')->get();
      //  return $data;
         return view('admin.admin_psubcategory',['data' => $data]);
    }

    public function saveSubcategory(Request $request)
    {
     subctegory::create([
        'category_id' => $request ['category'],
        'subcategory_subcategory' => $request ['pcategory'],
       ]);
       return view('admin.admin_subcategory');
    }
    public function subCategory()
{
 
$st=DB::select("SELECT * FROM tbl_category");     
return view('admin.admin_subcategory')->with(['st' => $st]);  
}
}
