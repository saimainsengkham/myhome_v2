<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" user-scalable="no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('css/lightslider.css') }}" />

</head>

<body class="bg-white">

    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top d-none d-md-block">
        <div class="d-flex justify-content-between">
            <div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <span class="nav-link">Follow us:</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-phone-alt mr-2"></i> Contact</a>
                    </li>
                    @auth
                    <li class="nav-item bg-primary ml-3">
                        <a class="nav-link text-white" href="{{ url('my') }}">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>
                    <li class="nav-item bg-primary ml-3">
                        <a class="nav-link text-white" href="{{ url('login') }}">Login Account</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="">
        <div class="d-none d-md-block mt-5 py-5">
            <div class="container">
                <div class="logo-header">
                    <img src="{{ asset('images/assets/logo/myhome.svg') }}" width="150" alt="">
                </div>
            </div>
        </div>


        {{-- Desktop & Table Navbar --}}
        <div class="d-none d-md-block">
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-file-alt"></i> For Sale</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <i class="far fa-file-alt"></i> For Rent <i class="fas fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-building"></i> Properties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user-friends"></i> Agents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-users-cog"></i> Construction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-search"></i> Search</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>


        {{-- Mobile Sidebar --}}
        <div class="wrapper d-md-none">
            <nav id="sidebar">
                {{-- <div class="sidebar-header">
                    <img src="{{ asset('images/assets/logo/myhome.svg') }}" class="w-50" alt="">
        </div> --}}
        <ul class="list-unstyled components">
            <p>The providers</p>
            <li class="">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>

                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">About</a></li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Policy</a></li>
        </ul>
        </nav>



    </div>

    <div id="content">
        <nav class="d-md-none navbar navbar-expand-lg navbar-light bg-light">
            <div class="d-flex justify-content-between w-100">
                <div>
                    <a class="navbar-brand" href="#">Navbar</a>
                </div>
                <div>
                    <button type="button" id="sidebarCollapse" class="btn mr-auto">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>

        </nav>

        {{-- content --}}
        <div class="">
            @yield('content')
        </div>


    </div>

    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/js/lightslider.js') }}"></script>
    <script src="{{ asset('js/master.js') }}"></script>


</body>

</html>