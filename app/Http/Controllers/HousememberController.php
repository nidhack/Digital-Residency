<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Housemembersdetails;
class HousememberController extends Controller
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
    public function create(Request $request)
    {
        $image=$request['uploadedimage'];
      
        $name= time().'_'.$image->getClientOriginalName();
        $img=$image->move(public_path().'/housemembers/',$name);
        Housemembersdetails::create([
       'home_mem_houseno' => $request['houseno'],
       'home_mem_name' => $request['name'],
       'home_mem_occupation' => $request['Occupation'],
       'home_mem_d_o_b' => $request['edate'],
    'home_mem_image' => $name
    
   
    
    ]);
    return view('reguser_home');
        }
        public function viewmem(Request $request)
        {
            $housno=$request->input('category');
    return view ('admin.admin_viewmem',compact('housno'));
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
}
