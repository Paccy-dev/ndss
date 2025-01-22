<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('page_title')</title>

        <!-- Bootstrap my CSS -->
        @vite(['resources/css/validate.css'])
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
            <div class="container-fluid">
                @yield('page_content')
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
