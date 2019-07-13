<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="css/app.css">
            <title>Doctoronline</title>
        </head>
        <body>
               

<!-- start of navbar section -->
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
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="{{route('home')}}">
                            Home
                            <span class="sr-only">(current)</span>
                          </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('gallery')}}">
                            Gallery
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('contact')}}">
                            Contact
                          </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">
                           Admin@login
                          </a>
                        </li>
                      </ul>
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
           
        @show     
<!-- end of navbar section -->
<!-- start of content yeild -->
            @yield('content')
            <!-- end of content yeild -->


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
           
            @section('footer')
               <!-- Footer -->
<footer class="page-footer font-small bg-dark pt-4">

        <!-- Footer Elements -->
        <div class="container-fluid ">

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

              <!-- Form -->
              <form class="form-inline">
                <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                  aria-label="Search">
                <i class="fas fa-search" aria-hidden="true"></i>
              </form>
              <!-- Form -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

              <form class="input-group">
                <input type="text" class="form-control form-control-sm" placeholder="Your email"
                  aria-label="Your email" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-sm  btn-success my-0" type="button">Sign up</button>
                </div>
              </form>

            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-white">© 2018 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/education/bootstrap/"> DoctorOnline.com</a>
        </div>
        <!-- Copyright -->

      </footer>
      <!-- Footer -->
      <!-- start of footer section -->
      

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/mvc/3.0/jquery.validate.unobtrusive.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('js/admin.js') }}" ></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::to('js/app.js') }}"></script>
      <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
      <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      
     
        </body>
        </html>
