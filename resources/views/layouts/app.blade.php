<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--title and description-->
    <title>{{ config('app.name', 'Laravel') }} | version 2.0.3</title> 
    <meta name="description" content="{{ config('app.name', 'Laravel') }}">
    <meta name="author" content="kioskhomehub.com">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favs/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favs/site.webmanifest">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/purpose.css') }} " id="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }} " id="stylesheet">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="{{ asset('assets/libs/@fortawesome/fontawesome-free/css/all.min.css') }} "><!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/dist/css/swiper.min.css') }} ">

</head>
    @yield('content')
</html>
