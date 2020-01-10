<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo-2.jpg') }}"/>
    <title>My Addmission Assistant - Michelle & Anthony Consulting </title>
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background-image: url('{{ asset('assets/images/big/university bg.jpg')}}'); no-repeat center center;">
          @if (Session::get('failed'))
          <div class="alert alert-warning"> <i class="ti-user"></i> {{ session('failed') }} <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          @endif
            <div class="auth-box registration">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="{{ asset('assets/images/logo-2.jpg') }}" alt="logo" /></span>
                        <h5 class="font-medium m-b-20"></h5>
                    </div>
                    <!-- Form -->
                          <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"> Application Form</h3>
                                <form method="POST" action="{{ route('register') }}" >
                                    @csrf
                                    
                              <div class="form-group row">
                                    
                                     <div class="col-12">
                                      <label for="validationCustomorganisation">Institution Name</label>
                                      <input id="institution" type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" value="{{ old('institution') }}"  autocomplete="organisation" autofocus>

                                        @error('institution')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                      <label for="validationCustomUsername">Username</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="username"  autocomplete="username">

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                      <label for="validationCustomemailaddress">Email Address</label>
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <div class="col-12">
                                      <label for="validationCustompassword">Password</label>
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password should be more than 8 characters"  autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                      <label for="validationCustomorpasswordconfirm">Confirm Password</label>
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-12">
                                      <label for="validationCustomphonenumber">Institution Contact Number</label>
                                     <input id="phonenumber" type="tel" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}"placeholder="23480..."  autocomplete="phonenumber">

                                            @error('phonenumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>   
                                <div class="form-group row">
                                    <div class="col-12">
                                      <label for="validationCustom03">City</label>
                                      <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" autocomplete="city" autofocus>

                                        @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                      <label for="validationCustom04">State</label>
                                      <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" autofocus>

                                        @error('state')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col mb-3">
                                      <label for="validationCustomorganisationadd">Institution Website</label>
                                      <input id="institution_website" type="text" class="form-control @error('institution_address') is-invalid @enderror" name="institution_website" value="{{ old('organisation_website') }}"   autocomplete="organisation_website" autofocus>

                                        @error('institution_website')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col mb-3">
                                      <label for="validationCustomorganisationadd">Institution Address</label>
                                      <input id="institution_address" type="text" class="form-control @error('institution_address') is-invalid @enderror" name="institution_address" value="{{ old('organisation_address') }}"   autocomplete="organisation_address" autofocus>

                                        @error('institution_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                        <select class="custom-select" name="institution_type" required>
                                          <option value="">Select Tertiary Institution</option>
                                          <option value="University" >University</option>
                                          <option value="Polytechnic" >Polytechnic</option>
                                          <option value="College of Education" >College of Education</option>
                                          <option value="Innovation Entreprise Institutions" >Innovation Entreprise Institutions</option>
                                        </select>
                                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                                    </div>
                                <div class="w-100"></div>
                                  
                                      <div class="col mb-3">
                                          <div class="form-group">
                                            <div class="form-check custom-control custom-checkbox mr-sm-3">
                                                <button type="submit" class="btn btn-primary">{{ __('Submit Form') }}
                                          </button>
                                            </div>
                                          </div>
                                      </div>
                                   
                                </form>
                            </div>
                        </div>
                    <div>
                </div>
                
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src=" {{ asset ('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
     <script src=" {{ asset ( 'assets/extra-libs/jqbootstrapvalidation/validation.js') }}"></script>
     <script src="{{ asset('js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
   
</body>

</html>

