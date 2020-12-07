<p>Вопрос с сайта от <b>{{ $datd['name'] }}</b></p>

<p>Имя: {{ $data['name'] }}</p>
<p>Email: {{ $data['email'] }}</p>
<p>Тел: {{ $data['phone'] }}</p>
<p>Вопрос: {{ $data['message'] }}</p>

<p>Вы можете ответить перейды по ссылке: <a href="mailto:{{ $data['email'] }}?subject=RE: Вопрос с сфйта"{{ $data['email'] }}</a></p>