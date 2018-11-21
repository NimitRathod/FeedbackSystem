<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <title>FeedbackSystem @yield('title')</title>

    @include('student.includes.styleFile')
    @yield('styleFile')
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END Custom CSS-->
    @yield('style')
</head>
<body class="horizontal-layout horizontal-menu 2-columns menu-expanded" data-open="hover"
data-menu="horizontal-menu" data-col="2-columns">
<br>
<!-- Center Panel --> 
<div class="app-content content">
    <div class="content-wrapper">

        @include('student.includes.headerPanel')

        @yield('content')

        <div class="clearfix"></div>

    </div>
</div>
<!-- Center Panel -->
@include('student.includes.footerPanel')

@include('student.includes.scriptFile')
@yield('scriptFile')
@yield('footerScript')
</body>
</html>