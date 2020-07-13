<!DOCTYPE html>
<head>
    <title>@yield('title', 'titulo defecto')</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="icon" href="{{asset('/images/tabicon.png')}}">
    @yield('aditionalstyles')
</head>
<body>
    @include('partials._navbar')
    <div class="container">
        @yield('content')
    </div>
    <hr>
    @include('partials._footer')
    <script src="./js/bootstrap.js"></script>
    <script src="./js/jquery-3.3.1.js"></script>
    @yield('aditionalscripts')
</body>
