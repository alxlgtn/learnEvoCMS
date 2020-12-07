<!DOCTYPE html>
<html>

<head>
    @include('partials.part_head--yandex_metrika')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <meta name="description" content="{{ $documentObject['description'] }}">
    <title>{{ $documentObject['longtitle'] }}</title>
    @include('partials.part_head--links')
</head>
<body>
    @include('partials.section--header')
    @include('partials.section--first_screen')
    @include('partials.section--top_form')
    @include('partials.section--services')
    @include('partials.section--certificate')
    @include('partials.section--services2')
    @include('partials.section--gallery')
    @include('partials.section--carousel')
    @include('partials.section--bottom_form')
    @include('partials.section--map')
    @include('partials.section--footer')

    @include('partials.part_footer--scripts')
    @include('partials.part_footer--scroll_to_top')
</body>

</html>
