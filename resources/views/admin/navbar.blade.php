<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title>Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/mcustomscrollbar@3.1.13/dist/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <link rel="icon" href="{{ asset('img/IMPERIAL LOGO.png') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto ">

                <!-- Navbar Search -->
                <li class="nav-item d-flex align-items-center">
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#logoutModal"
                        type="button">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </button>

                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header text-bg-primary">
                        <h1 class="modal-title fs-5" id="logoutModalLabel">Apakah Ingin Logout ? </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a class="btn btn-danger" href="{{ route('actionLogout') }}" role="button"
                            style="border:none;">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Brand Logo -->
            <a href= "{{ asset('/') }}" class="brand-link">
                <img src=" {{ asset('img/IMPERIAL LOGO.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Imperial Hotel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ url('images/profile') . '/' . Auth::user()->image }}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"> {{ Auth::user()->name }} </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p> Dashboard </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('user') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-user-alt"></i>
                                <p> User </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('kamar') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-bed"></i>
                                <p> Kamar </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/review') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-star"></i>
                                <p> Review </p>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- /.sidebar-menu -->
            </div>

            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">

            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Kelompok 10
            </div>

            <!-- Default to the left -->
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">Imperial</a>. </strong> All rights
            reserved.
        </footer>
    </div>

    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFB28Bo14J9zCyJ4Z+46MDWTI745h8SKanpyCAlzFf5AiCQN4w6T00kG/DuzIF" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/mcustomscrollbar@3.1.13/dist/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
