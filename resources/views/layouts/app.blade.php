<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title-block')</title>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!-- favicons -->

    <link rel="stylesheet" type="text/css" href="{{asset('fonts/jost/stylesheet.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/cormorant_garamond/stylesheet.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/fontawesome-pro/css/fontawesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/line-awesome/css/line-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/slick/slick-theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/slick/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/quilljs/css/quill.bubble.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/quilljs/css/quill.core.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/quilljs/css/quill.snow.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/chosen/chosen.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />

    <script src="{{asset('/js/jquery-1.12.4.js')}}"></script>
    <script src="{{asset('/libs/popper/popper.js')}}"></script>
    <script src="{{asset('/libs/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/libs/slick/slick.min.js')}}"></script>
    <script src="{{asset('/libs/slick/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('/libs/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/libs/quilljs/js/quill.core.js')}}"></script>
    <script src="{{asset('/libs/quilljs/js/quill.js')}}"></script>
    <script src="{{asset('/libs/chosen/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('/libs/waypoints/jquery.waypoints.min.js')}}"></script>

    @routes
    <script src="{{asset('/js/main.js')}}"></script>

</head>

<body>
    <div id="wrapper">
        @include('inc.header')

        @yield('content')

        @include('inc.footer')
    </div>

</body>
</html>
