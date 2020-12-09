<form method="post">
    <fieldset class="uk-fieldset">
        <h2>Оставить отзыв</h2>

        <input type="hidden" name="formid" value="ContactForm">

        <div class="input {{ $data['name.classname'] }} uk-margin">
            <label>
                <input type="text" name="name" placeholder="Как ваc зовут?*" value="{{ $data['name.value'] }}" class="uk-input">
            </label>
            {{--            <div class="uk-alert-danger" uk-alert>--}}
{{--                <a class="uk-alert-close" uk-close></a>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>--}}
{{--            </div>--}}

            {!! $data['name.error'] !!}
        </div>

        <div class="input {{ $data['phone.classname'] }} uk-margin">
            <label>
                <input type="tel" name="phone" placeholder="Ваш елефон?*" value="{{ $data['phone.value'] }}" class="uk-input">
            </label>
            {!! $data['phone.error'] !!}
        </div>

        <div class="input {{ $data['email.classname'] }} uk-margin">
            <label>
                <input type="email" name="email" placeholder="Електропочта?*" value="{{ $data['email.value'] }}" class="uk-input">
            </label>
            {!! $data['email.error'] !!}
        </div>

        <div class="input {{ $data['message.classname'] }} uk-margin">
            <label>
                <textarea name="message" placeholder="Оставьте отзыв?*" class="uk-textarea" rows="5">{{ $data['message.value'] }}</textarea>
            </label>
            {!! $data['message.error'] !!}
        </div>

        <button class="uk-button uk-button-primary" id="submit">Отправить</button>
    </fieldset>
</form>