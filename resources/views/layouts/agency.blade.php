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
    <meta name="theme-color" content="#2e2a8f">
    <!--website-favicon-->
    <link href="images/favicon.png" rel="icon">
    <!--plugin-css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugin.min.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- template-style-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/darkmode.css" rel="stylesheet">
    <link href="css/gdpr-cookie.css" rel="stylesheet">
    @yield('page-style')
</head>
<body>
<!-- Custom mouse start-->
<div class="mouse-cursor cursor"></div>
<div class="mouse-cursor cursor-follow"></div>
<!-- Custom mouse end-->

<!--Start Preloader -->
<x-page-loader/>
<!--End Preloader -->


@yield('content')


<!-- js placed at the end of the document so the pages load faster -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/plugin.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/preloader.js"></script>
<script src="js/tweenmax.min.js"></script>
<script src="js/gdprcookies.js"></script>
<script src="js/dark-mode.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
<script>
    gdprCookieNotice({
        statement: 'https://themeforest.net/user/rajesh-doot/portfolio',
        performance: ['JSESSIONID'],
        analytics: ['xxxx', 'ga'],
        marketing: ['SSID']
    });
</script>
@yield('page-script')
</body>
</html>
