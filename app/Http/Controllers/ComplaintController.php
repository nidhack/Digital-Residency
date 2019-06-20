<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaints;

class ComplaintController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Complaints::create([
        
            'id' => $request['id'],
            'complaint_date' => $request['date'],
            'complaint_complaint' => $request['complaint'],
            'compaint_response' => $request['response'],
            
        ]);
    
    
    }
    public function complaintupdate(Request $data)
    {   
        $chittyid=$data->get('id');
        $id=$data['id'];
        
        $c_response=$data['c_response'];
        Complaints::where('id', $id)
            ->update(['compaint_response' => $c_response]);
           
        
            return view('admin.admin_complaint_response');
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
