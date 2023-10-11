<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
<div class="container">
    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
