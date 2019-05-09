<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('browser-title', 'Home') @yield('browser-title-separator', '-') @yield('browser-title-right', config('app.name'))</title>

    <!-- Custom Js -->
    <script type="text/javascript">
        @yield('header-js')
    </script>

    <!-- Scripts -->
    @section('header-scripts')
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/script.js') }}" defer></script>
    @show

    <!-- Fonts -->
    @section('fonts')
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Rancho|Montserrat:400,700" rel="stylesheet">
    @show

    <!-- Stylesheets -->
    @section('stylesheets')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    @show

    <!-- Custom Inline Styles -->
    <style type="text/css">
        @yield('custom-css')
    </style>
</head>
<body id="@yield('body-id', 'body')" class="bg-grey-light text-grey-darkest font-body leading-normal @yield('body-class', 'body')" @yield('body-attributes')>
