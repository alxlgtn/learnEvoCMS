<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $documentObject['pagetitle'] }}</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit-icons.min.js"></script>
</head>
<body>
    <div class="uk-container">

        <h1>{{ $documentObject['pagetitle'] }}</h1>
        <h2>{{ $modx->documentObject['pagetitle'] }}</h2>



        <p>{{ $documentObject['tv--some_text'] }}</p>
        <p>{{ $modx->documentObject['tv--some_text']['1'] }}</p>
        <p>{{ $modx->documentObject['tv--some_text']['0'] }}</p>
        <p>{{ $modx->documentObject['tv--some_text']['4'] }}</p>

        <hr>

        <p>@evoParser($documentObject['tv--some_text'])</p>
        <p>@evoParser('[*pagetitle*] - [(site_name)]')</p>
        <p>@evoParser('@{{chankName}}')</p>

        {{--links--}}
        {{--[~1~]--}}

        <p>{{ urlProcessor::makeUrl(1) }}</p>
        <p>@makeUrl('1')</p>

        <a href="@makeUrl('1')">link to</a>

        <p>{{ $modx->getConfig('site_name') }}</p>

        {{-- chanks --}}

        {{--<p>@include('partials.chunk', ['test' => 'data'])</p>--}}
        <p>@include('partials.chunk', ['mass' => ['data1'=>'1', 'data2'=>'2']])</p>

        {{-- snippets --}}

        {{-- Не кэшированный вызов --}}
        <p>{{ $modx->runSnippet('DocInfo', ['docid'=>'2'])  }}</p>

        {{-- Кэшированный навсегда --}}
        <p>{{ $modx->runSnippet('DocInfo', ['docid'=>'2', 'field'=>'content'], '0')  }}</p>

        {{-- Кэшированный на 10 мин --}}
        <p>{!! $modx->runSnippet('DocInfo', ['docid'=>'2', 'field'=>'content'], '600', 'forAllsite')  !!}</p>

        {{-- DocLister --}}
        <hr>
        <h3>DocLister</h3>
        {{--Фиговый варик с чанками из бызы--}}
{{--        {!! $modx->runSnippet('DocLister', [--}}
{{--            'parents'=>'2',--}}
{{--            'tpl'=>'@CODE: [+pagetitle+]<br>'--}}
{{--            ])--}}
{{--        !!}--}}
        <h3>DocLister blade chank</h3>
        {{--Хороший варик с чанками блэйда--}}
        <p>
        {!! $modx->runSnippet('DocLister', [
            'parents'=>'2',
            'tpl'=>'@B_FILE:partials/tpltForDocLister'
            ])
        !!}
        </p>


    </div>
</body>
</html>


