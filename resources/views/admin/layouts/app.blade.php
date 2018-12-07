<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <title>FeedbackSystem @yield('title')</title>

    @include('admin.includes.styleFile')
    @yield('styleFile')
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END Custom CSS-->
    @yield('style')
</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    @include('admin.includes.leftPanel')

    <!-- Center Panel --> 
    <div class="app-content content">
        <div class="content-wrapper">

            @include('admin.includes.headerPanel')


            @yield('content')

            <div class="clearfix"></div>

        </div>
    </div>
    <!-- Center Panel -->
    @include('admin.includes.footerPanel')

    @include('admin.includes.scriptFile')
    <script src="{{ asset('app-assets/js/scripts/forms/validation/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
    @yield('scriptFile')
    @yield('footerScript')
</body>
</html>