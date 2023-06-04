<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.google.com/specimen/Raleway?selection.family=Raleway:400,600" />
        <link href="https://fonts.google.com/specimen/Montserrat?query=montserrat&selection.family=Montserrat:400,700" />
        <link href="https://fonts.google.com/specimen/Playfair+Display?category=Serif&selection.family=Playfair+Display:400,400i" />
        <link href="https://fonts.google.com/specimen/Roboto+Condensed?selection.family=Roboto+Condensed:700" />
    </head>
    <body id="app">
        <example-component></example-component>
    </body>
</html>