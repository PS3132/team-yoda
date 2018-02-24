<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Standard Meta --}}
    @section('metaLabels')
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="">
    <meta name="author" content="">
    @show


    {{-- Site Properties--}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title') @hasSection('title') | @endif {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    {{-- Styles --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    {{-- icon css --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    @yield('addCss')

</head>
<body class="fixed-nav">
    {{-- Wrapper --}}
    <div id="wrapper">

        {{-- Side Navigation --}}

        {{-- Page Wrapper --}}
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                {{-- Top navigation --}}
                {{--@include('layouts.partials.top_nav_manu')--}}
            </div>

            {{-- Main Content--}}
            @yield('content')

        </div>
    </div>

    {{--scripts--}}
</body>
</html>