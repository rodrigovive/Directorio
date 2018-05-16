<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    @yield('after-styles')
    <!--<link rel="stylesheet" href="css/style.css">-->
    <title>@yield('title')</title>
</head>

<body>
    @include('backend.includes.sidebar')

    @yield('header')

    @yield('content')

    @include('backend.includes.footer')


    @yield('modal')


    <script src="{{asset('js/tether.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    @yield('after-scripts')
    <script type="text/javascript" src="{{asset('js/backend/datatables.js')}}"></script>


</body>

</html>