<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo-2.jpg') }}">
    <title>My Admission Assistant - Michelle & Anthony Consulting</title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <link href="{{ asset('css/routingmap.css') }}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
      <link href="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/extra-libs/calendar/calendar.css') }}" rel="stylesheet" />
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="{{url('/dashboard')}}"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{url('/')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="" alt="homepage" class="dark-logo" width="90" />
                            <!-- Light Logo icon -->
                            <img src="" alt="" class="light-logo" width="90"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="" alt="homepage" class="dark-logo" width="90"/>
                             <!-- Light Logo text -->    
                             <img src="{{ asset('assets/images/logo-2.jpg') }}" class="light-logo rounded-circle" alt="" width="80"/>
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block">Hire Hall <i class=""></i></span>
                             <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span>
                            </a>
                            
                        </li>
                        <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block">Online Book shop <i class=""></i></span>
                             <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span>
                            </a>
                            
                        </li>
                        <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block">About Us <i class=""></i></span>
                             <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span>
                            </a>
                            
                        </li>
                        <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block">Our Team <i class=""></i></span>
                             <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span>
                            </a>
                            
                        </li>
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                                
                            </a>
                        
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                  
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset(Auth::user()->profileimage())}}" alt="user" class="rounded-circle" width="31"> Hi {{ Auth::user()->username }}</a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white mb-2">
                                    <div class=""><img src="{{asset(Auth::user()->profileimage())}}" alt="user" class="img-circle" width="60"/></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0"></h4>
                                        <p class=" mb-0"></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="{{url('/profile')}}"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                <a class="dropdown-item" href="{{ url('/changepassword') }}"><i class="ti-email mr-1 ml-1"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('/profile/edit')}}"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-10"><a href="{{url('/profile/edit')}}" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>