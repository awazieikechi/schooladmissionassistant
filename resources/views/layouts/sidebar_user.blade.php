 <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown mt-3">
                                <div class="user-pic"><img src="{{asset(Auth::user()->profileimage())}}" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu ml-2">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="mb-0 user-name font-medium">{{ Auth::user()->username }} <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email">{{ Auth::user()->email }}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="{{url('/profile')}}"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('/changepassword') }}"><i class="ti-settings mr-1 ml-1"></i> Change Password</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        
                        <!-- User Profile-->
                        <li class="sidebar-item"><a href="{{url('/dashboard')}}" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard </span></a></li>
                        <li class="sidebar-item"><a href="{{url('/profile')}}" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> My Profile </span></a></li>
                        
                         <li class="sidebar-item"><a href="{{url('/course')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Course</span></a></li>  
                          <li class="sidebar-item"><a href="{{url('/calender')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Calender</span></a></li>  
                           <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Contact Us </span></a></li>  
                                      
                    
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}" aria-expanded="false"><i class="mdi mdi-directions"></i><span class="hide-menu">Log Out</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->