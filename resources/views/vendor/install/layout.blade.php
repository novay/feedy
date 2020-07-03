<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100" dir="{{ (__('lang_dir') == 'rtl' ? 'rtl' : 'ltr') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('site_title')</title>

    <link href="favicon.png" rel="icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" id="app-css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <style type="text/css">
        body {
            background-color: #f5f5f5;
        }
        .mt-6, .my-6 {
            margin-top: 4rem!important;
        }
        .mb-6, .my-6 {
            margin-bottom: 4rem!important;
        }
    </style>

</head>
<body class="d-flex flex-column">
    <div class="d-flex flex-column flex-fill">
        @yield('content')
    </div>
</body>
</html>
