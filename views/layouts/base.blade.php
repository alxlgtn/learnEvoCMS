<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--        <title>{{ $meta['title'] }}</title>--}}
        <title>App Name - @yield('title')</title>
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.12/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.12/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.12/dist/js/uikit-icons.min.js"></script>
{{--        <link rel="stylesheet" href="../../assets/css/_base.css">--}}
    </head>
    <body>
        <div class="uk-container">
            <div class="uk-text-center">

            {{-- <h2>Menu</h2>--}}
            {{-- @yield('nav')--}}

            @yield('content')

            @stack('scripts')

            </div>
        </div>
    </body>
</html>