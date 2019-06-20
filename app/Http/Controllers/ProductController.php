<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use DB;
class ProductController extends Controller
{
    public function addProduct()
    {
        $data=DB::table('brands')->get();
        //return view('admin.product');
        return view('admin.admin_shop_productadd',['data' => $data]);
    }
    public function index()
    {
        $data=DB::table('categories')->get();
        // return $data;
         return view('admin.product',['data' => $data]);
    }
    
    public function subcat($id)
    {
        $sub=Products::where("category_id",$id)->get()->toJson();
        return $sub;
    }

    public function showproduct()
    {
        $productdetails=Products::all();
        $product=Products::all();
       return view('user.shopnow',compact('productdetails'));
    }

    public function singleproduct(Request $request)
    {
        $id=$request->id;
        $productdetails=DB::select('select * from products where p_id='.$id.' ');
    
       return view('user.singlepage',compact('productdetails'));
    }


    public function saveProduct(Request $request)
    {
        $images=$request['image'];
        $name=time().'_'.$images->getClientOriginalName();
        $img=$images->move(public_path().'/products/',$name);

        Products::create([
            'id'=>$request ['id'],
        'category_id' => $request ['category'],
        'subcategory_id'=>$request['subcategory'],
        'product_name' => $request ['name'],
        'product_price' => $request ['price'],
        'product_stock' => $request ['quantity'],
        'product_description' => $request ['des'],
        'product_image' => $name,//form name
        'product_status'=>'0',
       // 'brand' => $request ['brand'],
       
       ]);
       return view('user.reguser_shop_productadd');
    }
    public function show()
    {

        // $product=Product::all();
        // $productdetails=DB::select('select * from categories as c, subcategories as s, brands as b, 
        // products as p where p.c_id=c.c_id and p.sub_id=s.id and b.b_id z=p.brand');
        $productdetails=DB::table('tbl_product')
        ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
        ->join('tbl_subcategory','tbl_subcategory.subcategory_id','=','tbl_product.subcategory_id')
        
        ->select('tbl_category.*','tbl_subcategory.*','tbl_product.*')->get();
        return view('user.reguser_productview',compact('productdetails'));
        
        
    }
    public function editProduct(Request $request, $id=null){
        if($request->isMethod('post')){
            $data = $request->all();
 
//             if($request->hasFile('image')){
            
//             $images = $request->file('image');
//  $img = time().'_'.$images->getClientOriginalName();
//  $imgs = $images->move(public_path().'/upload/',$img);
//             }else{
//                 $img=$data['current_image'];
//             }
 
//             if(empty($data['description'])){
//                 $data['description']='';
//             }
 
 
           // echo "<prev>";print_r($data);die;
            Product::where(['p_id'=>$id])->update([
           'id' => $request['id'],
           'pname'=>$data['pname'],
           'description'=>$data['des'],
           'size'=>$data['size'],
           'stock'=>$data['stock'],
           'price'=>$data['price'],
           'image' =>image]);
             return redirect()->back()->with( 'alert-warning','Updated Successfully' );
             //return redirect()->back()->with('success','Updated Successfully');       
 
        }
        //get product details
      $productDetails = Product::where(['id'=>$id])->first();
 
 
      //brand dropdown
 
      $brands = Brand::where(['status'=>1])->get();
      $brand_dropdown = "<option selected disabled>Select</option>";
      foreach($brands as $bad){
         if($bad->id==$productDetails->brand_id){
             $selected ="selected";
         }else{
             $selected = "";
         }
       $brand_dropdown .= "<option value='" .$bad->id."' ".$selected." >".$bad->name."</option>";
      }
      //brand dropdown end
 
      //category dropdown
      $categories = Category::where(['parent_id'=>0])->get();
      $categories_dropdown = "<option selected disabled>Select</option>";
      foreach($categories as $cat){
       if($cat->id==$productDetails->category_id){
           $selected ="selected";
       }else{
           $selected = "";
       }
       
         $categories_dropdown .= "<option value='" .$cat->id."' ".$selected.">".$cat->name."</option>";
      $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
      foreach($sub_categories as $sub_cat){
          if($sub_cat->id==$productDetails->category_id){
              $selected = "selected";
          }else{
              $selected="";
          }
          $categories_dropdown .= "<option value = '".$sub_cat->id."' ".$selected.">&nbsp;--&nbsp;".$sub_cat->name."</option>";
      }
   }
   //category dropdown end
 
      return view('Admin.products.edit_product')->with(compact('productDetails','categories_dropdown','brand_dropdown'));
 
 
    } 

    public function deleteProduct($id=null){
        Product::where(['id'=>$id])->delete();
        return redirect()->back()->with( 'alert-warning','Product  has been deleted successfully' );
    }
    public function viewProduct(Request $request){
        $products = Product::get();
        $products = json_decode(json_encode($products));
        foreach($products as $key => $val){
            $category_name = Category::where(['id'=>$val->category_id])->first();
            $products[$key]->category_name = $category_name->name;
        }
         foreach($products as $key => $val){
         $brand_name = Brand::where(['id'=>$val->brand_id])->first();
         $products[$key]->brand_name = $brand_name->name;
     }
       
     // echo"<prev>";print_r($products);die;
        return view('Admin.products.view_product')->with(compact('products'));
    }
}
