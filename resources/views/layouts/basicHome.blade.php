<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Loja - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>

<body>
    @include('layouts.indexNavbar')
    @yield('content')
</body>
</html>
