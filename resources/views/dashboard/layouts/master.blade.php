<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Qovex - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin-template/assets/images/favicon.ico')}}">

    <!-- DataTables -->
    <link href="{{ asset('admin-template/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-template/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link
        href="{{ asset('admin-template/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}"
        rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin-template/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin-template/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin-template/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-layout="horizontal" data-topbar="dark">

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('admin-template/assets/images/logo-sm-dark.png')}}" alt=""
                                        height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('admin-template/assets/images/logo-dark.png')}}" alt=""
                                        height="18">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('admin-template/assets/images/logo-sm-dark.png')}}" alt=""
                                        height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('admin-template/assets/images/logo-light.png')}}" alt=""
                                        height="18">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                            data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="topnav">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Points <div class="arrow-down"></div>
                                            </a>

                                            <div class="dropdown-menu px-2 " aria-labelledby="topnav-pages">
                                                <div class="row">
                                                    <div class="col">
                                                        <div>

                                                            <a href="{{ url('/dashboard/point-package') }}"
                                                                class="dropdown-item">Point
                                                                Packages</a>
                                                            <a href="{{ url('/dashboard/point-package/add') }}"
                                                                class="dropdown-item">Add New Package</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Orders <div class="arrow-down"></div>
                                            </a>

                                            <div class="dropdown-menu px-2 " aria-labelledby="topnav-pages">
                                                <div class="row">
                                                    <div class="col">
                                                        <div>
                                                            <a href="{{ url('/dashboard/point-order/all') }}"
                                                                class="dropdown-item">All Orders</a>
                                                            <a href="{{ url('/dashboard/point-order/success') }}"
                                                                class="dropdown-item">Success Orders</a>
                                                            <a href="{{ url('/dashboard/point-order/pending') }}"
                                                                class="dropdown-item">Pending Orders</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Advertisements <div class="arrow-down"></div>
                                            </a>

                                            <div class="dropdown-menu px-2 " aria-labelledby="topnav-pages">
                                                <div class="row">
                                                    <div class="col">
                                                        <div>

                                                            <a href="{{ url('/dashboard/advertisements') }}"
                                                                class="dropdown-item">Advertisements</a>
                                                            <a href="{{ url('/dashboard/advertisements/add') }}"
                                                                class="dropdown-item">Add New Advertisement</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user"
                                    src="{{ asset('admin-template/assets/images/users/avatar-2.jpg')}}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ml-1">Patrick</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i
                                        class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i
                                        class="bx bx-wallet font-size-16 align-middle mr-1"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span
                                        class="badge badge-success float-right">11</span><i
                                        class="bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i
                                        class="bx bx-lock-open font-size-16 align-middle mr-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                  document.getElementById('logoutForm').submit();"><i
                                        class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>
                                    Logout</a>
                            </div>
                        </div>

                        <form id="logoutForm" action="{{ url('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
            </header>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    @yield('content')
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Qovex.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->




    <!-- JAVASCRIPT -->
    <script src="{{ asset('/admin-template/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('/admin-template/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('/admin-template/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('/admin-template/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('/admin-template/assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('/admin-template/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('/admin-template/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('/admin-template/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}">
    </script>
    <script
        src="{{ asset('/admin-template/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}">
    </script>

    <!-- Datatable init js -->
    <script src="{{ asset('/admin-template/assets/js/pages/datatables.init.js')}}"></script>


    <script src="{{ asset('/admin-template/assets/js/pages/dashboard.init.js')}}"></script>

    <script src="{{ asset('/admin-template/assets/js/app.js')}}"></script>

</body>

</html>
