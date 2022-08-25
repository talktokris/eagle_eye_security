<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/admin/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('assets/admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/assets/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('assets/admin/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/admin/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/header-colors.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/custom.css') }}" />
    <title>Eagle Eye Security Admin Panel</title>


</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">

            @include('admin/layouts/sidebar') ;
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>

            @include('admin/layouts/header') ;

        </header>
        <!--end header -->
        <!--start page wrapper -->




        @yield('contents')





        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">


            @include('admin/layouts/footer') ;


        </footer>
    </div>
    <!--end wrapper-->

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/highcharts/js/highcharts.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/highcharts/js/exporting.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/highcharts/js/variable-pie.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/highcharts/js/export-data.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/highcharts/js/accessibility.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>

    <script src="{{ asset('assets/admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('assets/admin/assets/js/app.js') }}"></script>
    <script>
        new PerfectScrollbar('.customers-list');
        new PerfectScrollbar('.store-metrics');
        new PerfectScrollbar('.product-list');
    </script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>
</body>

</html>
