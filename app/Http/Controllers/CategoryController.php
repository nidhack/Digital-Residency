<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
    public function addCategory()
    {
        return view('admin.admin_pcategory');
    }

    public function saveCategory(Request $request)
    {
       category::create([
        'category_category' => $request ['pcategory'],
       ]);
       return view('admin.admin_pcategory');
    }
    public function show()
    {
        $product=Category::all();
        $productdetails=Category::all();
        return view('admin.viewcategory',compact('productdetails'));
        
        
    }



}