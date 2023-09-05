<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cube Algs</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="php-stuff">
    @foreach($data as $item)
        <p>{{ $item }}</p>
    @endforeach
</div>
<div class="vuejs-stuff" id="app"></div>
@vite('resources/js/app.js')
</body>
</html>