<!-- Stored in resources/views/layouts/app.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>
</head>
<body>
    @section('sidebar')
        This is the master<br>
        app.blade SIDEBAR!!!!
    @show

</body>
</html>
{{--<html>--}}
{{--    <head>--}}
{{--        <title>App Name - @yield('title')</title>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        @section('sidebar')--}}
{{--            This is the master sidebar!!!!--}}
{{--        @show--}}

{{--        <div class="container">--}}
{{--            @yield('content')--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}
