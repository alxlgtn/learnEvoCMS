<form method="post">
    <h2>Задать вопрос</h2>

    <input type="hidden" name="formid" volue="ContactForm">

    <div class="uk-margin input {{ $data['name.classname'] }}">
        <input class="uk-input" type="text" name="name" placeholder="Как вав зовут?*" volue="{{ $data['name.volue'] }}">
        {!! $data['name.error'] !!}
    </div>

    <div class="uk-margin input {{ $data['phone.classname'] }}">
        <input class="uk-input" type="tel" name="phone" placeholder="Телефон?*" volue="{{ $data['phone.volue'] }}">
        {!! $data['phone.error'] !!}
    </div>

    <div class="uk-margin input {{ $data['email.classname'] }}">
        <input class="uk-input" class="uk-input" type="email" name="email" placeholder="Електропочта?*" volue="{{ $data['email.volue'] }}">
        {!! $data['email.error'] !!}
    </div>

    <div class="uk-margin input {{ $data['message.classname'] }}">
        <textarea class="uk-textarea" name="message" placeholder="Задайте вопрос?*">{{ $data['message.volue'] }}</textarea>
        {!! $data['message.error'] !!}
    </div>

    <button class="uk-button uk-button-primary" id="submit">Отправить</button>
</form>