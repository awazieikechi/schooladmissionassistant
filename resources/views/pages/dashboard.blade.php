@include('layouts.header_user');
@include('layouts.sidebar_user');
@include('layouts.alert_user');

 <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">User Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                
                <h4 class="card-title mt-5"></h4>
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                           <div class="card text-white bg-orange">
                                        <div class="card-header">
                                            <h4 class="mb-0 text-white">WELCOME!!!</h4></div>
                                        <div class="card-body">
                                            <h3 class="card-title">My Admission Assistant Portal</h3>
                                            <p class="card-text">You are currently logged in as a User. Add your courses and make them available to students on our platform.</p>
                                            <a href="#" class="btn btn-dark">Find out More</a>
                                        </div>
                                    </div>
                                    
                            </div>
                            <!-- Column -->
                            
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                           <div class="card text-white bg-info">
                                        <div class="card-header">
                                            <h4 class="mb-0 text-white">GET TRAFFIC TODAY</h4></div>
                                        <div class="card-body">
                                            <h3 class="card-title">Connect to Success</h3>
                                            <p class="card-text">One Type of getting Traffic doesn't Fit All. Find out about our packages and services.</p>
                                            <a href="https://www.michelleandanthony.net/" class="btn btn-dark">Find out More</a>
                                        </div>
                                    </div>
                                    
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- Row -->
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-sm-12 col-md-4">
                                 <div class="card bg-success">
                                <div class="card-body text-center text-white">
                                    <div class="p-20">
                                        <h2>{{$usercourses->count()}}</h2>
                                        <h4 class="font-light mt-3">Total Courses</h4>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Column -->
                            
                            <!-- Column -->
                            <div class="col-sm-12 col-md-4">
                                 <div class="card">
                                <div class="card-body text-center text-black">
                                    <div class="p-20">
                                        <h2>News Feed </h2>
                                        <h4 class="font-dark mt-3"><a href="https://www.michelleandanthony.net/blog-financial-risk-management-training-consulting-services/"  >Get the Latest News</a></h4>
                                    </div>
                                </div>
                            </div>
                            </div> 
                           
                            <!-- Column -->
                           
                            
                            <!-- Column -->
                            <div class="col-sm-12 col-md-4">
                                <div class="card bg-orange">
                                <div class="card-body text-center text-white">
                                    <div class="p-20">
                                        <h2>Edit Course</h2>
                                        <h4 class="font-light mt-3"><a href="{{url('/course')}}" style="color:#fff;">Click Here</h4></>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- Row -->
                        
        </div>


@include('layouts.footer_user');