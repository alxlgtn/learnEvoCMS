<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $meta['title'] }}</title>
    </head>
    <body>
    @section('header')
        <h2>Menu</h2>
        <ul>
            @foreach($topmenu as $item)
                <li>
                    <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                    <small>@if( $item['active'] ==1 || $item['here'] == 1) * @endif</small>
                    @if(is_array($item['children']))
                        @foreach($item['children'] as $item)
                            <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                            <small>@if( $item['active'] ==1 || $item['here'] == 1) * @endif</small>
                        @endforeach
                    @endif
                </li>
            @endforeach
        </ul>

        @stack('scripts')


    </body>
</html>