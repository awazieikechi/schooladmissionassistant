@include('layouts.header_user');
@include('layouts.sidebar_user');
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                   
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Profile Page</h4>
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
                @include('layouts.alert_user');
                <div class="row">

                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="{{asset(Auth::user()->profileimage())}}" class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2">{{ Auth::user()->institution }}</h4>
                                    <h6 class="card-subtitle">{{Auth::user()->institution_website}}</h6>
                                    
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>{{Auth::user()->email}}</h6> <small class="text-muted pt-4 db">Phone</small>
                                <h6>{{Auth::user()->phonenumber}}</h6> <small class="text-muted pt-4 db">Organisation Address</small>
                                <h6>{{Auth::user()->institution_address}}</h6>
                               
                                <input type="hidden" value="{{Auth::user()->institution_address . ', ' . Auth::user()->state . ', ' . Auth::user()->country }}" id="home_address" name="home_address">
                                <small class="text-muted pt-4 db"> Address</small>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tabs -->
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Profile</a>
                                </li>
                                 
                            </ul>
                            <!-- Tabs -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                    <div class="card-body">
                                        <form class="form-horizontal">
                                <div class="form-body">
                                    <div class="card-body">
                                        <h4 class="card-title">Member Info</h4>
                                    </div>
                                    <hr class="mt-0 mb-5">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-5">Institution Name:</label>
                                                    <div class="col-md-7">
                                                        <p class="form-control-static"> {{ Auth::user()->institution }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col">
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-5">Email:</label>
                                                    <div class="col-md-7">
                                                        <p class="form-control-static"> {{ Auth::user()->email }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-5">Username:</label>
                                                    <div class="col-md-7">
                                                        <p class="form-control-static"> {{ Auth::user()->username }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-5">Phone Number:</label>
                                                    <div class="col-md-7">
                                                        <p class="form-control-static"> {{ Auth::user()->phonenumber }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        
                                        
                                         <div class="row">
                                            
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-5">City:</label>
                                                    <div class="col-md-7">
                                                        <p class="form-control-static"> {{ Auth::user()->city}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-5">State:</label>
                                                    <div class="col-md-7">
                                                        <p class="form-control-static"> {{ Auth::user()->state }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                        
                                        
                                        <!--/row-->
                                        
                                    </div>
                                    <hr class="mt-0 mb-5">
                                    
                                    <div class="form-actions">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-6">
                                                            <a href="{{route('profile.edit')}}" button type="submit" class="btn btn-warning btn-lg"> <i class="fa fa-pencil"></i> Edit</a>
                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>                                      
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                    
                                                <div class="col-md-6"> </div>
                                            </div>
                                        </div>  
                                    </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
             
@include('layouts.footer_user');