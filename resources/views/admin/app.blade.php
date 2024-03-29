<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/')}}assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>


<body class="hold-transition sidebar-mini">
<div class="wrapper">


    <!--Navbar-->
@include('admin.includes.navbar')

<!--Sidebar Container -->
@include('admin.includes.sidebar')


<!-- Main Content-->
    <div class="content-wrapper">

        @yield('content')

    </div>


    <!--Footer -->
    @include('admin.includes.footer')
</div>


<!-- jQuery -->
<script src="{{asset('/')}}assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/')}}assets/dist/js/adminlte.min.js"></script>

</body>
</html>
