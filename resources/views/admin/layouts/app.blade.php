<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <title>FeedbackSystem @yield('title')</title>

    @include('admin.includes.styleFile')
    @yield('styleFile')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('style')
</head>
<body>
    @include('admin.includes.leftPanel')

    <!-- Right Panel --> 
    <div id="right-panel" class="right-panel">

        @include('admin.includes.headerPanel')

        @include('admin.templates.widgets.breadcrumbs')

        @yield('content')

        <div class="clearfix"></div>

        @include('admin.includes.footerPanel')
    </div>
    <!-- /#right-panel -->

    @include('admin.includes.scriptFile')
    @yield('scriptFile')
    @yield('footerScript')
</body>
</html>