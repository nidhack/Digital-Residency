<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsAds;
class NewsAdsController extends Controller
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
        echo $image;
        $name= time().'_'.$image->getClientOriginalName();
        $img=$image->move(public_path().'/newsads/',$name);
        NewsAds::create([
       'id' => $request['id'],
    'newsads_image' => $name,
    'newsads_heading'=>$request['heading'],
    'newsads_description' => $request['description'],
    'newsads_status' => $request['newsAds_status']
   
    
    ]);
    return view('reguser_home');
    }

    public function createe(Request $request)
    {
        $image=$request['uploadedimage'];
        echo $image;
        $name= time().'_'.$image->getClientOriginalName();
        $img=$image->move(public_path().'/newsads/',$name);
        NewsAds::create([
       'id' => $request['id'],
    'newsads_image' => $name,
    
    'newsads_heading'=>$request['heading'],
    'newsads_description' => $request['description'],
    'newsads_status' => $request['newsAds_status']
   
    
    ]);
    return redirect('/dashboard');   
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
