<!DOCTYPE html>
<html lang="en" class="loading">
<!-- BEGIN : Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MotherSoftIT</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- @include('admins.layouts.icon') --}}
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel = "icon" href =  "{{ asset('frontend/images/logo.png') }}" type = "image/x-icon"> 
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/feather/style.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/fonts/simple-line-icons/style.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">


    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/app.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/modified.app.css') }}">
    <!-- END APEX CSS-->


    <!-- Page CSS-->
    @yield("page-css")



    <!-- BEGIN : Body-->

<body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////   -->
    <div class="wrapper">


        <!-- main menu-->
        <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
        <div data-active-color="white" data-background-color="man-of-steel" data-image="{{ asset('app-assets/img/sidebar-bg/01.jpg') }}" class="app-sidebar">
            <!-- main menu header-->
            <!-- Sidebar Header starts-->
            <div class="sidebar-header">
                <div class="logo clearfix"><a href="" class="logo-text float-left tex-normal">
                        <div class="logo-img"><img src="{{ asset('frontend/images/logo.png') }}" class="rotate logoImg" /></div><span class="text align-middle h5">MotherSoftIT</span>
                    </a>
                    <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
            </div>
            <!-- Sidebar Header Ends-->
            <!-- / main menu header-->
            <!-- main menu content-->
            <div class="sidebar-content">
                <div class="nav-container">
                    <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">

                        <li class="nav-item"><a href="{{ route('dashboard') }}"><i class="ft-home text-danger"></i><span data-i18n="" class="menu-title">Dashboard</span></a></li>

                        <div class="dropdown-divider"></div>

                        
                        <li class="nav-item">
                            <a href="{{ route('slider.index') }}"><i class="fa ft-upload text-warning"></i><span data-i18n="" class="menu-title">Slider</span></a>
                        </li>
                         <li class="nav-item">
                            <a href="{{ route('portfolio.index') }}"><i class="fa fa-home text-primary"></i><span data-i18n="" class="menu-title">Portfolio</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('freelance.index') }}"><i class="fa fa-camera text-danger"></i><span data-i18n="" class="menu-title">Freelancer</span></a>
                        </li><li class="nav-item">
                            <a href="{{ route('successor.index') }}"><i class="fa fa-flag text-danger"></i><span data-i18n="" class="menu-title">Preview</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('student') }}"><i class="fa fa-star text-warning"></i><span data-i18n="" class="menu-title">Students</span></a>
                        </li>
                        {{-- <li class="has-sub">
                            <a href="#"><i class="fa fa-star text-primary" ></i><span > Category</span></a>
                            <ul class="menu-content">
                                <li class="nav-item">
                                     <a href=""><span data-i18n="" class="menu-title">Categories</span></a>
                                 </li>
                                  <li class="nav-item">
                                     <a href=""><span data-i18n="" class="menu-title">SubCategories</span></a>
                                 </li>
                            </ul>
                        </li> --}}
                        
                        
                         <li class="nav-item">
                            <a href="{{ route('contact.all') }}"><i class="fa fa-signal" style="color:tomato"></i><span data-i18n="" class="menu-title">Contacts</span></a>
                        </li> 



                        <li class="nav-item">
                             <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa ft-log-out " ></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>

                    </ul>
                </div>
            </div>


            <!-- main menu content-->
            <div class="sidebar-background"></div>
            <!-- main menu footer-->

        </div>
        <!-- / main menu-->


        <!-- Navbar (Header) Starts-->
        <nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent" href="javascript:;" class="open-navbar-container black"><i class="ft-more-vertical"></i></a></span>
                    <span class="badge gradient-crystal-clear white">{{ session()->get('user.name') }}</span>

                    {{-- @if (session()->get('admin.super') == 1)
                    <span class="badge gradient-pomegranate white ml-1">Act as a Super Admin</span>
                    @endif --}}

                </div>
                <div class="navbar-container">
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <a href=""><button class="btn btn-raised gradient-pomegranate white big-shadow mr-3">Home</button></a>
                        <ul class="navbar-nav">
                            <li class="nav-item mr-2 d-none d-lg-block"><a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen"><i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                                    <p class="d-none">fullscreen</p>
                                </a></li>

                            <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown"
                                    class="nav-link position-relative dropdown-toggle">
                                    <img src="{{ asset('frontend/images/logo.png') }}" alt="Admin-img" class="admin-img">
                                </a>
                                <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right">

                                    <!-- <div class="dropdown-divider"></div> -->
                                    <a href="" class="dropdown-item"href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa ft-log-out " ></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar (Header) Ends-->

        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <!-- Zero configuration table -->

                    @yield('content')


                </div>
            </div>
            <!-- END : End Main Content-->



            <!-- BEGIN : Footer-->
            <footer class="footer footer-static footer-light">
               <p class="clearfix text-muted text-sm-center px-2"><span>Copyright &copy; All rights reserved in MothersoftIT.
                    </span></p>
            </footer>
            <!-- End : Footer-->

        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- END Notification Sidebar-->



    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('app-assets/vendors/js/core/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('app-assets/vendors/js/prism.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/screenfull.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/pace/pace.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->

    <!-- BEGIN APEX JS-->
    <script src="{{ asset('app-assets/js/app-sidebar.js') }}" type="text/javascript"></script>
    {{-- Tostar + Sweetalert 2 --}}
    <script src="{{ asset('common/sweet-alert-2/sw-alert.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/datatable/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/data-tables/datatable-advanced.js') }}" type="text/javascript"></script>

    


     {{-- Toastar Alert --}}
     <script type="text/javascript">

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })


     
    </script>


   {{-- Page Js  --}}
   @yield("page-js")


</body>
<!-- END : Body-->

</html>



















