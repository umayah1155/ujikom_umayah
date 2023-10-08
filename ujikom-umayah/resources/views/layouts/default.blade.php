<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body class="antialiased">
        @yield('content')
        @include('includes.footer')
</body>
</html>