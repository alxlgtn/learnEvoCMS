<form method="post">
    <h2>Задать вопрос</h2>

    <input type="hidden" name="formid" volue="ContactForm">

    <div class="input {{ $data['name.classname'] }}">
        <input type="text" name="name" placeholder="Как вав зовут?*" volue="{{ $data['name.volue'] }}">
        {!! $data['name.error'] !!}
    </div>

    <div class="input {{ $data['phone.classname'] }}">
        <input type="tel" name="phone" placeholder="Телефон?*" volue="{{ $data['phone.volue'] }}">
        {!! $data['phone.error'] !!}
    </div>

    <div class="input {{ $data['email.classname'] }}">
        <input type="email" name="email" placeholder="Електропочта?*" volue="{{ $data['email.volue'] }}">
        {!! $data['email.error'] !!}
    </div>

    <div class="input {{ $data['message.classname'] }}">
        <textarea name="message" placeholder="Задайте вопрос?*">{{ $data['message.volue'] }}</textarea>
        {!! $data['message.error'] !!}
    </div>

    <button class="btn btn__red" id="submit">Отправить</button>
</form>