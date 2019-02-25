<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />

        <title>Agence Immobilière</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" media="screen, projection" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @include("layouts.partials._header")

        @yield('content')

        @include("layouts.partials._footer")
        <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>