<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <!--[if lt IE 7]>
    <html class="no-js ie6 oldie" lang="en"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js" lang="en">  <!--<![endif]-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon/logo-icon.png')}}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')PasarBatik.id @yield('description')</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    @stack('css')
    </head>
<body @stack('body')>
@include('module.navbar')
@yield('header')
<div id="app">
    @yield('content')
</div>
@include('module.footer')
<!-- BackToTop Button -->
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>

<script src="/js/jquery.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="{{ asset('js/select-bootstrap.min.js') }}"></script>
<script src="/js/swal.min.js"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
@include('module.modal-login')

@stack('js')
</body>
</html>
