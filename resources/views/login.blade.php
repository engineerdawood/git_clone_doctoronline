@extends('layouts.app')
@section('navbar')
<div className="container-fluid border border-danger  ">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <div class="container">
            <a class="navbar-brand" href="#">
              Doctors@Online.COM
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarResponsive"
              aria-controls="navbarResponsive"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
             
            </div>
          </div>
        </nav>
      </div>
      <!-- start of marquee -->
<div class="container-fluid bg-dark border border-warning">
<div class="row " >
<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"style="height:20px;lineheight:20px;vertical-align:middle">
<marquee
class="alternate"
direction="left"
class=" font-weight-bold"
>
<p class="text-warning"> Doctor Helpline 0900:78601 Tele Fun Tele Fun</p>
</marquee>
</div>
</div>
</div>
<!-- end of marquee-->
@endsection

@section('content')



<div class="">
       
    


    <div class="container-fluid bg-dark pt-2 pb-4">
            <div class="row d-flex justify-content-around ">
              <div
                class="col-sm-5 col-md-5 col-xs-5 col-lg-5  border border-white   "

              >
                <div class="row border border-white ">
                  <div class="col-md-12 ">
                    <h1 class="text-white text-center">Admin Panel</h1>
                  </div>
                </div>
                <form action="{{ route('adminlogin') }}" method="post"  id="adminloginform " onsubmit="return ">

                  <div class="row form-group mt-5 pl-2 pr-2 ">
                    <div class="col-md-4">
                      <label class="form-control" for="adminemail">
                        Email
                      </label>
                    </div>
                    <div class="col-md-8">
                      <input
                        type="email"
                        name="adminemail"
                        id="adminemail"
                     
                        class="form-control"
                        required
                      />
                      <span id="err_adminemail" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>

                  <div class="row form-group mt-4 pl-2 pr-2 ">
                    <div class="col-md-4">
                      <label class="form-control" for="adminpassword">
                        Password
                      </label>
                    </div>
                    <div class="col-md-8">
                      <input
                        type="password"
                        name="adminpassword"
                        id="adminpassword"
                        class="form-control"

                        required
                      />
                      <span id="err_adminpassword" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>

                  <div class="row form-group mt-4 pl-2 pr-2  ">
                    <div class="col-md-12">
                          
                      <input
                        type="submit"
                        class="btn btn-block btn-primary"
                        value="Log In"
                        onclick="dontgo()"
                      />
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                  </div>


                  <div class="row form-group mt-4 pl-2 pr-2  ">
                    <div class="col-md-12">
                      <p class="font-weight-bold text-white">
                        forgot Password ?
                      </p>
                    </div>
                  </div>
                </form>

              </div>

<script>

</script>
              <div class="col-sm-5 col-md-5 col-xs-5 col-lg-5  bg-white  ">
                <div class="row  ">
                  <div class="col-md-12 border border-black">
                    <h1 class="font-weight-bold text-center  ">
                      Patient Panel
                    </h1>
                  </div>
                </div>
                <form action="{{ route('patientlogin') }}" method="post">

                  <div class="row form-group mt-5 pl-2 pr-2 ">
                    <div class="col-md-4">
                      <label class="form-control" for="patienemail">
                        Email
                      </label>
                    </div>
                    <div class="col-md-8">
                      <input
                        type="email"
                        name="patientemail"
                        id="patientemail"
                     
                        class="form-control"

                        required
                      />
                      <span id="err_patientemail" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>

                  <div class="row form-group mt-4 pl-2 pr-2 ">
                    <div class="col-md-4">
                      <label class="form-control" for="patientpassword">
                        Password
                      </label>
                    </div>
                    <div class="col-md-8">
                      <input
                        type="password"
                        name="patientpassword"
                        id="patientpassword"

                        class="form-control"

                        required
                      />
                      <span id="err_patientpassword" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>

                  <div class="row form-group mt-4 pl-2 pr-2  ">
                    <div class="col-md-12">
                           
                      <input
                        type="submit"
                        class="btn btn-block btn-primary"

                        value="Log In"
                      />
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                  </div>

                  <div class="row form-group mt-4 pl-2 pr-2  ">
                    <div class="col-md-12">
                      <p class="font-weight-bold ">Forgot Password ? </p>
                    </div>
                  </div>
                </form>

              </div>

            </div>
          </div>
    <form action="store" method="post" id="patientform"  onsubmit="return validate()" >
      <div class="container-fluid bg-dark border border-danger wrapper">
        <div
          class="jumbotron-fluid pb-5  "

        >
          <div class="col-md-12 ">

            <div class="row pb-4 ">
              <div class="col-sm-12 pb-4"></div>

              <button
                class="btn btn-block btn-warning font-weight-bold "

              >
                Patient Registration Form
              </button>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
              <label class="form-control" for="name">
                User Name
              </label>
            </div>
            <div class="col-sm-6">
              <input
                type="text"
                class="form-control"
                name="name"
                id="name"

                required
              />
              <span class="text-danger font-weight-bold" id="error_name"></span>
            </div>
          </div>



          <div class="row mt-4">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
              <label class="form-control" for="email">
                User Email
              </label>
            </div>
            <div class="col-sm-6">
              <input
                type="email"
                class="form-control"
                name="email"
                id="email"

                required
              />
              <span class="text-danger font-weight-bold" id="error_email"></span>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-sm-2" ></div>
            <div class="col-sm-3">
              <label class="form-control" for="mobile">
                Mobile #
              </label>
            </div>
            <div class="col-sm-6">
              <input
                type="number"
                class="form-control"
                name="mobile"
                maxlength="11"
                id="mobile"

                required
              />
              <span class="text-danger font-weight-bold" id="error_mobile"></span>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
              <label class="form-control" for="password">
                Password
              </label>
            </div>
            <div class="col-sm-6">
              <input
                type="text"
                class="form-control"
                name="password"
                id="password"
               on
                required
              />
              <span class="text-danger font-weight-bold" id="error_password"></span>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-sm-2" ></div>
            <div class="col-sm-3">
              <label class="form-control" for="retypepassword">
                Retype Password
              </label>
            </div>
            <div class="col-sm-6">
              <input
                type="text"
                class="form-control"
                name="retypepassword"
                id="retypepassword"
                required
              />
              <span class="text-danger font-weight-bold" id="error_retypepassword"></span>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
              <label class="form-control">Select Country</label>
            </div>
            <div class="col-sm-6" >
              <select class="form-control" name="country" id="country" >
                <option value="Paksitan">Pakistan</option>
                <option value="Paksitan">Pakistan</option>
                <option value="Paksitan">Pakistan</option>
                <option value="Paksitan">Pakistan</option>
                <option value="Paksitan">Pakistan</option>
                <option value="Paksitan">Pakistan</option>
              </select>
              <span class="text-danger font-weight-bold" id="error_country"></span>
            </div>
          </div>


          <div class="row mt-4">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">

                </div>
                <div class="col-sm-7" >
      <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

     <label class="checkbox-inline ">
<input type="checkbox" id="box" class="mr-4 " onclick=" return validate();"  value=" ">I Agree With The Terms & Conditions of The Company</label>
          <p class="text-danger font-weight-bold"> * Check box will not be clicked until all fields are valid </p>
</div>
              </div>





          <div class="row mt-4 ">
            <div class="col-sm-2" ></div>
            <div class="col-sm-3" > </div>
            <div class="col-sm-6">

              <input
                type="submit"
                class="btn btn-block btn-success"
                value="submit"
                name="submit"
                id="submit"
                onclick="return validate()"


              />
            </div>
          </div>

        </div>
      </div>
    </form>
</div>
    

  </div>
  <style>
    .wrapper{
        background-image: url('assets/images/wallpaper.jpg');
        background-repeat: no-repeat;
         background-size:cover;
            opacity: .75;
    }
.form-control,button{
    border-radius: 0px !important;
        border:2px solid #ffcc00;
}
input[type=text]:focus {
background-color: lightblue;
}
label{
font-weight: bold !important;

}
.checkbox-inline{
border:2px solid red;
padding:5px;
color:black;
}
button{
letter-spacing: 5px;
}
label{
letter-spacing: 2px;
}
p{
letter-spacing: 2px;

</style>


@endsection
