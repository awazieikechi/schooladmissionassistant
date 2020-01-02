@include('layouts.header_user');
@include('layouts.sidebar_user');
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Member Detail</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="mr-2">
                                <div class="lastmonth"></div>
                            </div>
                            <div class=""><small></small>
                                <h4 class="text-info mb-0 font-medium"></h4></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class ="row">
                        @include('layouts.alert_user');
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Member Info</h4>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home5" role="tab" aria-controls="home5" aria-expanded="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Personal </span></a> </li>
                                    
                                    
                                </ul>
                    <div class="tab-content tabcontent-border p-20" id="myTabContent">
                                <div role="tabpanel" class="tab-pane fade show active" id="home5" aria-labelledby="home-tab">
                                        <form method="POST" action="{{route('profile.update')}}" >
                                           @csrf
                                            {{ method_field('PATCH') }}
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                  <label for="validationCustom01">Institution Name</label>
                                                  <input id="institution" type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" value="{{ old('institution')??Auth::user()->institution }}" placeholder="institution"  autocomplete="institution" autofocus>

                                                  @error('institution')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                  <label for="validationCustomphonenumber">Email</label>
                                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email')??Auth::user()->email}}" autocomplete="email">

                                                  @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            

                                             <div class="col-12">
                                                  <label for="validationCustomordob">Institution Address</label>
                                                  <input id="institution_address" type="text" class="form-control @error('home_address') is-invalid @enderror" name="institution_address" value="{{old('institution_address')??Auth::user()->institution_address}}" >

                                                  @error('institution_address')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div> 
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                  <label for="validationCustomphonenumber">Phone Number</label>
                                                  <input id="phonenumber" type="number" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" placeholder="23480..." value="{{ old('phone')??Auth::user()->phonenumber }}" autocomplete="phonenumber">

                                                  @error('phonenumber')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div> 
                                           
                                            <div class="col-md-6 mb-3">
                                                  <label for="validationCustomordob">Institution Website</label>
                                                  <input id="institution_website" type="text" class="form-control @error('institution_website') is-invalid @enderror" name="institution_website" value="{{old('institution_website')??Auth::user()->institution_website}}" >

                                                  @error('institution_website')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div> 
                                        <div class="form-row">

                                                        <div class="col-md-6 mb-3">
                                                              <label for="validationCustom03">City</label>
                                                              <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city')??Auth::user()->city }}" autocomplete="city" autofocus>

                                                              @error('city')
                                                              <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div> 
                                                        <div class="col-md-6 mb-3">
                                                          <label for="validationCustom04">State</label>
                                                          <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state')??Auth::user()->state }}" autofocus>

                                                          @error('state')
                                                          <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                      </div>
                                                        
                                                    </div>
                                                                    
                                        
                                                            

                                            <div class="w-100"></div>

                                            <div class="col mb-3">
                                              <div class="form-group">
                                                <div class="form-check custom-control custom-checkbox mr-sm-3">
                                                    <button type="submit" class="btn btn-primary">{{ __('Update') }}
                                                    </button>
                                                    <a href="{{route('profile.show')}}" button type="submit" class="btn btn-dark"> <i class="fa fa-pencil"></i> Cancel</a>
                                                </div>
                                                
                                            </div>
                                        </div>

                                    </form>


                                </div>
                                
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
@include('layouts.footer_user');