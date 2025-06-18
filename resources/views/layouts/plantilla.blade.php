<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Params --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Title --}}
    <title>{{$page}}</title>
    {{-- Icon --}}
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('libraries/bootstrap-5-3-7/css/bootstrap.min.css') }}">
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesProps.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mediaProps.css') }}">
    @yield('styles')
</head>
<body>
    @yield('navbar')
    @yield('sidebar')
    @yield('content')
    {{-- jQuery --}}
    <script src="{{ asset('libraries/jquery-3-7-1/jquery.js') }}"></script>
    {{-- Bootstrap --}}
    <script src="{{ asset('libraries/bootstrap-5-3-7/js/bootstrap.min.js') }}"></script>
    @yield('scripts')
</body>
</html>