{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--    <style>--}}

{{--</head>--}}
{{--<body>--}}
<div style="background-color:#e2fad0;
            border-radius: 5px;
            padding:15px;
            margin:15px">

    <h3 style="color: darkcyan">Отзыв с сайта: {{ $datd['name'] }}</h3>

    <p style="color: #5a5a5a"><b>Имя:</b> {{ $data['name'] }}</p>
    <p style="color: #5a5a5a"><b>Email:</b> {{ $data['email'] }}</p>
    <p style="color: #5a5a5a"><b>Тел:</b> {{ $data['phone'] }}</p>
    <p style="color: #5a5a5a"><b>Текст отзыва:</b><br> {{ $data['message'] }}</p>
</div>

{{--<p>Вы можете ответить перейдя по ссылке: <a href="mailto:{{ $data['email'] }}?subject=RE: Вопрос с сайта"{{ $data['email'] }}</a></p>--}}
{{--</body>--}}
{{--</html>--}}

