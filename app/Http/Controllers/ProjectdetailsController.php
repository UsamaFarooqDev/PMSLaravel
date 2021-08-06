<?php

namespace App\Http\Controllers;

use App\projectdetails;
use Illuminate\Http\Request;

class ProjectdetailsController extends Controller
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
    return view('/addproject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = rand(10,100000);
        $rms = new projectdetails();
        $rms->id = $id;
        $rms->name = $request->input('pname');
        $rms->Companyname = $request->input('cname');
        $rms->date = $request->input('date');
        $rms->status = $request->input('status');
        $rms->save();
        $request->session()->flash('msg','Project Added Successfully ');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\projectdetails  $projectdetails
     * @return \Illuminate\Http\Response
     */
    public function show(projectdetails $projectdetails)
    {
        return view('index')->with('dataArr',$projectdetails::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projectdetails  $projectdetails
     * @return \Illuminate\Http\Response
     */
    public function edit(projectdetails $projectdetails,$id)
    {
        return view('editproject')->with('data',$projectdetails::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\projectdetails  $projectdetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projectdetails $projectdetails)
    {
        $rms = projectdetails::find($request->id);
        $rms->name = $request->input('pname');
        $rms->Companyname = $request->input('cname');
        $rms->date = $request->input('date');
        $rms->status = $request->input('status');
        $rms->save();
        $request->session()->flash('msg','Project Updated Successfully ');
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projectdetails  $projectdetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(projectdetails $projectdetails, $id)
    {
        $projectdetails::destroy(array('id',$id));
    }
}
