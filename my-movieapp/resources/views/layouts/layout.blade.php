<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App name - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <header>
                @include('partials.header')
            </header>

            <div id="app" class="main">
                @yield('content')
            </div>

            <footer>
                @include('partials.footer')
            </footer>
        </div>
    </body>
</html>