<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laravel: @yield('title', 'Home__Page') </title>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        @include('header')
        @yield('stored_theme')
        @yield('stored_contents')
        @include('footer')
    </div>
</div>
</body>
</html>
