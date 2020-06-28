<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/landing/img/logo.png') }}" type="image/png">
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/libs/fontawesome-pro/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/css/dashboard.css') }}" rel="stylesheet" />

    @yield('css')

</head>
<body>
    <div class="page">
        @yield('content')
    </div>

    <!-- Required scripts -->
   <script src="{{ asset('assets/dashboard/js/vendors/jquery-3.2.1.min.js') }}"></script>
   <script src="{{ asset('assets/dashboard/js/vendors/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('assets/dashboard/js/jscolor.min.js') }}"></script>
   <script src="{{ asset('assets/dashboard/js/clipboard.min.js') }}"></script>
   <script src="{{ asset('assets/dashboard/js/dashboard.js') }}"></script>

   @yield('js')

</body>
</html>