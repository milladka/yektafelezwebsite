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
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('style')
    <title>{{config('app.name', 'یکتافلزخاورمیانه')}} | @yield('title')</title>
</head>
<body>
@include('inc.navbar')
<main role="main">