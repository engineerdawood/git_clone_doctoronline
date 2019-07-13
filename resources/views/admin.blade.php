@extends('layouts.app')

@section('navbar')
@parent

<script src="{{ asset('js/admin.js') }}"></script>
<style>
th{
border:1px solid green;
}
*{
    margin:0px;
    padding:0px;

}
.tab-pane{
    overflow-x: scroll;
    height: 600px;
}


</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-white text-center text-dark font-weight-bold border border-primary p-3" style="font-size:35px;"
        }>
        Admin@DoctorOnline.com
        </div>
    </div>
    <div class="row" >
       <div class="col-md-3 border border-white bg-dark pt-5 pb-5">
            <ul class="nav nav-tabs list-group  ">
                    <li class="nav-item list-group-item  active"><a href="#dashboard" class="nav-link bg-dark text-white font-weight-bold text-center"  role="tab" data-toggle="tab"  >DASHBOARD</a></li>
                    <li class="nav-item list-group-item"><a href="#viewpaptients" class="nav-link bg-dark text-white font-weight-bold text-center"  role="tab" data-toggle="tab">VIEW PATIENTS</a></li>
                    <li class="nav-item list-group-item"><a href="#addadmin" class="nav-link bg-dark text-white font-weight-bold text-center"  role="tab" data-toggle="tab">ADD ADMIN</a></li>
                    <li class="nav-item list-group-item"><a href="#viewadmin" class="nav-link bg-dark text-white font-weight-bold text-center"  role="tab" data-toggle="tab">VIEW ADMINS</a></li>
                </ul>
        </div>
      
       <div class="col-md-9 border border-white m-0 p-0">
        <div class="tab-content  ">
                <div class="tab-pane active  " role="tabpanel" id="dashboard"  >
                    <div class="conatiner-fluid ">
                        <div class="row m-0 p-0">
                                <table class="table border border-danger" style="font-size:12px;">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Regsitered Admins</th>
                                            <th scope="col">Registered Patients</th>
                                            
                                           
                                          </tr>
                                        </thead>
                                        <tbody>                                                                                         
                                               
                                            
                                       
                                                <tr>
                                              <th scope="row">{{$admincount}}</th>   
                                                <th scope="row">{{$patientcount}}</th> 
                                                
                                               
                                              
                                              
    
    
                                               
                                                
                                              </tr>
                                            
                                          
                                        </tbody>
                                      </table>
                                      
                                      
                        </div>
                    </div></div>
                <div class="tab-pane" role="tabpanel" id="viewpaptients"  >
                    <!-- starrt of view patients tab -->
                    <div class="conatiner-fluid">
                        <div class="row m-0 p-0">
                                <table class="table border border-danger" style="font-size:9px;">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Patient ID</th>
                                            <th scope="col">Patient Name</th>
                                            <th scope="col">Patient Email</th>
                                            <th scope="col">Patient Mobile</th>
                                            <th scope="col">Patient Password</th>
                                            <th scope="col">Patient Country</th>
                                            <th scope="col">Created At</th>
                                           
                                          </tr>
                                        </thead>
                                        <tbody>                                                                                         
                                        @foreach ($patients as $a)
                                            
                                       
                                            <tr>
                                            <th scope="row">{{$a->id}}</th>   
                                            <th scope="row">{{$a->name}}</th>
                                            <th scope="row">{{$a->email}}</th>
                                            <th scope="row">{{$a->mobile}}</th>
                                            <th scope="row">{{$a->password}}</th>
                                            <th scope="row">{{$a->country}}</th>
                                            <th scope="row">{{$a->created_at}}</th>

                                          
                                          


                                           
                                            
                                          </tr>
                                         @endforeach
                                          
                                        </tbody>
                                      </table>
                                      
                                      
                        </div>
                    </div>
                    <!-- end of view patients tab -->
                </div>
                <div class="tab-pane " role="tabpanel"  id="addadmin">
                    <!-- start of add admin-->
                    <div class="">
                        <div class="jumbotron">
                            <form action="addadmin" method="post" >
                            <div class="row">
                                <div class="col-md-4">
                                  <label for="adminname" class="form-control">Admin Name</label>  
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="adminname" name="adminname" class="form-control" required>
                                    <span  id="err-adminname" class=" text-danger font-weight-bold"></span>
                                    </div>
                            </div>

                            <div class="row mt-3">
                                    <div class="col-md-4">
                                      <label for="adminemail" class="form-control">Admin Email</label>  
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" id="adminemail" name="adminemail" class="form-control" required>
                                        <span id="err-adminemail" class=" text-danger font-weight-bold"></span>
                                        </div>
                                </div>



                                <div class="row mt-3">
                                        <div class="col-md-4">
                                          <label for="adminmobile" class="form-control">Admin Mobile</label>  
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" id="adminmobile" name="adminmobile" class="form-control" required>
                                            <span  id="err-adminmobile"  class="err-adminmobile text-danger font-weight-bold"></span>
                                            </div>
                                    </div>

                                    <div class="row mt-3">
                                            <div class="col-md-4">
                                              <label for="adminpassword" class="form-control">Admin Password</label>  
                                            </div>
                                            <div class="col-md-8">
                                                <input type="password" id="adminpassword" name="adminpassword" class="form-control" required>
                                                <span id="err-adminpassword" class="err-adminpassword text-danger font-weight-bold"></span>
                                                </div>
                                        </div>


                                        <div class="row mt-3">
                                                <div class="col-md-4">
                                                  
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="checkbox" id="box" class="mr-3" /> <span class="text-danger font-weight-bold">I Agree With Terms And Conditions Of The Company</span>
                                                    </div>
                                            </div>


                                            <div class="row mt-3">
                                                    <div class="col-md-4">
                                                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                                    </div>
                                                    <div class="col-md-8">
                                                       
                                                        <input type="submit" name="submit" id="submit" value="Add Admin" class="btn btn-block btn-success " >
                                                        </div>
                                                </div>
                            </form>
                           
                        </div>
                    </div>
                    <!-- end of add admin -->
                </div>
                <!-- start of view admin -->
                <div class="tab-pane " role="tabpanel" id="viewadmin"  > <div class="conatiner-fluid">
                        <div class="row m-0 p-0">
                                <table class="table border border-danger" style="font-size:12px;">
                                        <thead class="thead-dark ">
                                          <tr class="">
                                            <th scope="col">Admin ID</th>
                                            <th scope="col">Admin Name</th>
                                            <th scope="col">Admin Email</th>
                                            <th scope="col">Patient Mobile</th>
                                            <th scope="col">Patient Password</th>
                                           
                                          </tr>
                                        </thead>
                                        <tbody>                                                                                         
                                        @foreach ($admins as $row)
                                            
                                       
                                            <tr>
                                            <th scope="row">{{$row->id}}</th>   
                                            <th scope="row">{{$row->adminname}}</th>
                                            <th scope="row">{{$row->adminemail}}</th>
                                            <th scope="row">{{$row->adminmobile}}</th>
                                            <th scope="row">{{$row->adminpassword}}</th>
                                           
                                          
                                          


                                           
                                            
                                          </tr>
                                         @endforeach
                                          
                                        </tbody>
                                      </table>
                                      
                                      
                        </div>
                    </div>
                </div>
                <!-- end of view admin --->
        </div>
          

       </div>
    </div>
    </div>

@endsection
@section('content')

<div class="container-fluid">

</div>

@endsection
<script >

            </script>