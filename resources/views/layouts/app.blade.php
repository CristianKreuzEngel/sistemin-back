<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/resources/css/default.css"> -->
    <!-- <link rel="stylesheet" href="/resources/css/main.css"> -->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link  href="{{ asset('css/main.css') }}" rel="stylesheet">

    
    @yield('head')
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
</body>
</html>