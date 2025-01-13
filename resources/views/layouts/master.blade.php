<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('page_title')</title>

        <!-- Bootstrap Core CSS -->
        @vite(['resources/css/bootstrap.min.css'])
        <!-- MetisMenu CSS -->
        @vite(['resources/css/metisMenu.min.css'])

        <!-- Timeline CSS -->
        @vite(['resources/css/timeline.css'])

        <!-- Custom CSS -->
        @vite(['resources/css/startmin.css'])

        <!-- Morris Charts CSS -->
        @vite(['resources/css/morris.css'])

        <!-- Custom Fonts -->
        @vite(['resources/css/font-awesome.min.css'])

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">NDSS</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href=""><i class="fa fa-home fa-fw"></i>Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-bars fa-fw"></i> Apporals requests
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-user-plus fa-fw"></i> User requests
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        @if ( auth()->user())
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> {{ auth()->user()->name}} <b class="caret"></b>
                            </a>
                        @endif
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
            </nav>

            <aside class="sidebar navbar-default" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('patients.index')}}"><i class="fa fa-heart fa-fw"></i> Patients</a>
                        </li>
                        <li>
                            <a href="{{ route('pandemics.index')}}"><i class="fa fa-bug fa-fw"></i> Pandemics</a>
                        </li>

                        <li>
                            <a href="{{ route('healthCenters.index')}}"><i class="fa fa-hospital-o fa-fw"></i> Health Centers</a>
                        </li>
                        <li>
                            <a href="{{ route('infectionCases.index')}}"><i class="fa fa-stethoscope fa-fw"></i> Infection Cases</a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}"><i class="fa fa-users fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Other Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('login')}} ">Login Page</a>
                                </li>
                                <li>
                                    <a href="{{ route('register')}} ">Register Page</a>
                                </li>
                                <li>
                                    <a href="{{ route('profile.edit')}}">Profile Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- /.sidebar -->

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">@yield('page_header')</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    @yield('page_content')

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        @vite(['resources/js/jquery.min.js'])

        <!-- Bootstrap Core JavaScript -->
        @vite(['resources/js/bootstrap.min.js'])

        <!-- Metis Menu Plugin JavaScript -->
        @vite(['resources/js/metisMenu.min.js'])

        <!-- Morris Charts JavaScript -->
        @vite(['resources/js/raphael.min.js'])
        @vite(['resources/js/morris.min.js'])
        {{-- @vite(['resources/js/morris-data.js']) --}}

        <!-- Custom Theme JavaScript -->
        @vite(['resources/js/startmin.js'])

        <!-- DataTables JavaScript -->
        @vite(['resources/js/dataTables/jquery.dataTables.min.js'])
        @vite(['resources/js/dataTables/dataTables.bootstrap.min.js'])

        <!-- Custom Theme JavaScript -->
        @vite(['resources/js/startmin.js'])'

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

    </body>

</html>
