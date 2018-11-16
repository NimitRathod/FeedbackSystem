<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>FeedbackSystem - @yield('title')</title>

        @include('admin.includes.styleFile')
    </head>
    <body>
        @include('admin.includes.left_panel')

        <div class="">
            @yield('content')
        </div>
        @include('admin.includes.scriptFile')
    </body>
</html>