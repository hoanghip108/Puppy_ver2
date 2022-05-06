<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/app-creative.min.css')}}" rel="stylesheet" type="text/css" id="light-style"/>
    <link href="{{asset('css/app-creative-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style"/>
    <link rel="stylesheet" href="{{asset('css/ImageHover.css')}}">
    <title>Document</title>
</head>
<body class="loading" data-layout="detached" data-layout-config='{"layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
@yield('Nav')
<div class="container-fluid mm-active">
    <div class="wrapper mm-show">
        @yield('LeftNav')
        @yield('main')
    </div>
</div>

<script src="{{asset('js/vendor.min.js')}}"></script>
<script src="{{asset('js/app.min.js')}}"></script>
<!-- Apex js -->
<script src="{{asset('js/vendor/apexcharts.min.js')}}"></script>
<!-- Todo js -->
<script src="{{asset('js/ui/component.todo.js')}}"></script>
</body>
</html>
