<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminlogin(Request $request)
    {
        $patients = DB::select('select * from patientreg');
        $admins = DB::select('select * from admin');
        $patientcount = count($patients);
        $admincount = count($admins);

        $adminemail=$request->input('adminemail');
        $adminpassword=$request->input('adminpassword');
    $checklogin=DB::table('admin')->where(['adminemail'=>$adminemail,'adminpassword'=>$adminpassword])->get();
        if(count($checklogin)>0){
            return view('admin',['patients'=>$patients,'admins'=>$admins,'patientcount'=>$patientcount,'admincount'=>$admincount]);
        }
        else{
          return view('login');
        }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addadmin(Request $request)
    {
        $patients = DB::select('select * from patientreg');
        $admins = DB::select('select * from admin');
        $patientcount = count($patients);
        $admincount = count($admins);
        $adminname=$request->input('adminname');
        $adminemail=$request->input('adminemail');
        $adminmobile=$request->input('adminmobile');
        $adminpassword=$request->input('adminpassword');
        $data=array('adminname'=>$adminname,'adminemail'=>$adminemail,'adminmobile'=>$adminmobile,'adminpassword'=>$adminpassword);
        DB::table('admin')->insert($data);
        //
        return view('admin',['patients'=>$patients,'admins'=>$admins,'patientcount'=>$patientcount,'admincount'=>$admincount]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function patientlogin(Request $request)
    {
        

        $patientemail=$request->input('patientemail');
        $patientpassword=$request->input('patientpassword');
    $checklogin=DB::table('patientreg')->where(['email'=>$patientemail,'password'=>$patientpassword])->get();
        if(count($checklogin)>0){
            return view('home');
        }
        else{
          return view('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}