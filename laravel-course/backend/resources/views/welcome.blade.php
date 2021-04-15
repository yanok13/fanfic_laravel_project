<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Книга Фанфиков - более 25000 фендомов, ориджиналы от популярных авторов. Рассказы о героях известных фильмов, книг, аниме или игр">
    <meta property="og:title" content="Книга Фанфиков - более 25000 фендомов, ориджиналы от популярных авторов">
    <meta property="og:description" content="Книга Фанфиков - более 25000 фендомов, ориджиналы от популярных авторов. Рассказы о героях известных фильмов, книг, аниме или игр">
    <title>Книга Фанфиков - более 25000 фендомов, ориджиналы от популярных авторов</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    @yield('header', view('layouts.blocks.header.header'))
    @yield('navbar', view('layouts.navbar'))
    @yield('fanfic', view('layouts.fanfic'))

    @yield('footer', view('layouts.blocks.footer.footer'))
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
