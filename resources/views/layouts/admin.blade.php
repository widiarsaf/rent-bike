<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript"
        src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=oR7PHYXynBTePCeR3lkMoss05RSJKt0tZwajBysnHTBa3gGLmCNqGxWt6RdeC-EAgnkXDXpYMqxkw3FNAJZzA4NLe_JLnb10qKWQW18_XL4"
        charset="UTF-8"></script>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand" style="background-color: #FCDC6A !important">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" style="color: #474746" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <!-- Authentication Links -->

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto" style=" width: 300px !important">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-bell fa-lg"></i>
                        <span class="badge badge-danger navbar-badge"
                            style="height:13px; width:13px; font-size:9px;">1</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="width: 300px;">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <div class="mx-3">
                    <div class="image" width="300px" style="width: 200px !important; display: flex;">

                        <div style="display : flex;">
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                {{-- <a href=""><img src="img/user-avatar.png" style="height: 30px; width:30px;"
                                        class="img-circle" alt="User Image"></a> --}}
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </div>

                    </div>
                </div>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4" style="background-color: #161718 !important">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link mt-3">
                <img src="img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <h4 class="simple-text" style="color:white !important">Rental Bike</h4>
            </a>
            <hr style="background: rgb(73, 73, 73); height: 1.2px">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item mt-1 side-nav">
                            <a href="#" class="nav-link side-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item mt-1 side-nav">
                            <a href="#" class="nav-link side-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Daftar Sewa
                                </p>
                            </a>
                        </li>

                        <li class="nav-item mt-1 side-nav">
                            <a href="#" class="nav-link side-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Data Rekap
                                </p>
                            </a>
                        </li>
                        <li class="nav-item mt-1 side-nav">
                            <a href="#" class="nav-link side-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Pembayaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item mt-1 side-nav">
                            <a href="#" class="nav-link side-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    pengguna
                                </p>
                            </a>
                        </li>
                        <li class="nav-item mt-1 side-nav">
                            <a href="#" class="nav-link side-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    sepeda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item mt-1 side-nav">
                            <a href="#" class="nav-link side-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Kategori
                                </p>
                            </a>
                        </li>
                        <li class="nav-item mt-1 side-nav">
                            <a href="#" class="nav-link side-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Kalender
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background: #fcfcfc;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            @yield('title')
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="mx-2" style="border: 2px solid rgb(216, 216, 216); border-radius:5px">


                    <div class="table-place mx-3 mt-4">
                        @yield('content')
                    </div>
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
