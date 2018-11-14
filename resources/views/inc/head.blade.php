<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{--head-section--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="یکتافلزخاورمیانه - مرجع فیمت گذاری و فروش آهن">
    <meta name="keywords" content="آهن, پروفیل, ورق, فروش آنلاین, میلگرد, فولاد">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon192.png') }}">
    <link rel="canonical" href="<?php echo url()->current();?>">
    <link rel="icon" href="{{ asset('img/favicon32.png') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('img/favicon192.png') }}" sizes="192x192">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <title>{{config('app.name', 'یکتافلزخاورمیانه')}} | @yield('title')</title>
</head>
<body>
@include('inc.navbar')
<main role="main">