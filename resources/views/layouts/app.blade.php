<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Sunfit General Contracting')</title>
<meta name="description" content="@yield('description', 'Sunfit General Contracting delivers civil, structural, MEP and interior works under one roof.')">
<link rel="icon" href="{{ asset('images/logo.webp') }}">
<link rel="preload" href="{{ asset('fonts/unbounded-latin-500-normal.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="{{ asset('css/sunfit.css') }}">
@stack('head')
</head>
<body>
@include('partials.header')

@yield('content')

@include('partials.footer')
<script src="{{ asset('js/sunfit.js') }}" defer></script>
@stack('scripts')
</body>
</html>
