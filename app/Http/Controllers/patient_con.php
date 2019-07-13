<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\patient;
class patient_con extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = DB::select('select * from patientreg');
        $admins = DB::select('select * from admin');
        $patientcount = count($patients);
        $admincount = count($admins);
return view('admin',['patients'=>$patients,'admins'=>$admins,'patientcount'=>$patientcount,'admincount'=>$admincount]);
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
       $patient_name=$request->input('name');
       $patient_email=$request->input('email');
       $patient_mobile=$request->input('mobile');
       $patient_password=$request->input('password');
       $patient_country=$request->input('country');
       $data=array('name'=>$patient_name,
       'email'=>$patient_email,
       'mobile'=>$patient_mobile,
       'password'=>$patient_password,
       'country'=>$patient_country);
       DB::table('patientreg')->insert($data);
       //
       return view('login'); }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
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