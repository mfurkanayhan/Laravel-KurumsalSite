<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/fonts/circular-std/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/libs/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>@yield('title')</title>
    @yield('css')
    @yield('javascript')
</head>

<html>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<body class="dashboard-main-wrapper">
    <!-- ============================================================== -->
@include('admin._header')
@include('admin._sidebar')
@yield('content')
@include('admin._footer')
@yield('footer')
</body>
</html>
