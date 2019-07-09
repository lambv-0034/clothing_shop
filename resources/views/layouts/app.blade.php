<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/dark.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-icons.css') }}" rel="stylesheet">
<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/swiper.css') }}" rel="stylesheet">

</head>
<body class="stretched">
  <div id="wrapper" class="clearfix">
    @include('shared.navbar')
    @yield('page-title')
    @yield('content')
    @include('shared.footer')
  </div>
<div>
</div>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery.easing/js/jquery.easing.min.js') }}"></script>
@yield('script')
</body>
</html>
