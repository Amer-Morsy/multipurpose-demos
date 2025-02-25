<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>@hasSection('title')  @yield('title') @else Multipurpose Creative Portfolios @endif</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#4302b2">
    <!--website-favicon-->
    <link href="{{asset('images/favicon.png')}}" rel="icon">
    <!--plugin-css-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugin.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome/all.min.css')}}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <!-- template-style-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/darkmode.css')}}" rel="stylesheet">
    <style>html {
            scroll-behavior: smooth;
        }</style>
    @yield('page-style')
</head>
<body @isset($bodyClass)class="{{$bodyClass}}"@endisset>
<!--Start Preloader -->
<x-page-loader/>
<!--End Preloader -->


@yield('content')


<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/plugin.min.js')}}"></script>
<script src="{{asset('js/preloader.js')}}"></script>
<!--common script file-->
<script src="{{asset('js/main.js')}}"></script>
@yield('page-script')
</body>
</html>
