{{--@if ( isset($FormLister) && $FormLister->getFormStatus())--}}
{{--    <h2>Thenks</h2>--}}
{{--@else--}}

    <form method="post">
            <h3>Оставить отзыв</h3>

            <input type="hidden" name="formid" value="ContactForm">

            <div class="input {{ $data['name.classname'] }}">
            <input type="text" name="name" placeholder="Как ваc зовут?*" value="{{ $data['name.value'] }}">
            {!! $data['name.error'] !!}
            </div>

            <div class="input {{ $data['phone.classname'] }}">

                    <input type="tel" name="phone" placeholder="Ваш телефон?*" value="{{ $data['phone.value'] }}">
                {!! $data['phone.error'] !!}
            </div>

            <div class="input {{ $data['email.classname'] }}">
                    <input type="email" name="email" placeholder="Електропочта?*" value="{{ $data['email.value'] }}">
                {!! $data['email.error'] !!}
            </div>

            <div class="input {{ $data['message.classname'] }}">
                    <textarea name="message" placeholder="Оставьте отзыв?*">{{ $data['message.value'] }}</textarea>
                {!! $data['message.error'] !!}
            </div>

            <button class="btn" id="submit">Отправить</button>
    </form>
{{--@endif--}}


{{--        <div class="input {{ $data['name.classname'] }}">--}}
{{--            <label>--}}
{{--                <input type="text" --}}
{{--                       name="name" --}}
{{--                       placeholder="Как ваc зовут?*" --}}
{{--                       value="{{ $data['name.value'] }}">--}}
{{--            </label>--}}
{{--            {!! $data['name.error'] !!}--}}
{{--        </div>--}}

{{--<form method="post">--}}
{{--    <fieldset class="uk-fieldset">--}}
{{--        <h3>Оставить отзыв</h3>--}}

{{--        <input type="hidden" name="formid" value="ContactForm">--}}

{{--        <div class="input {{ $data['name.classname'] }} uk-margin">--}}
{{--                <input type="text" name="name" placeholder="Как ваc зовут?*" value="{{ $data['name.value'] }}" class="uk-input">--}}

{{--            {!! $data['name.error'] !!}--}}
{{--        </div>--}}

{{--        <div class="input {{ $data['phone.classname'] }} uk-margin">--}}
{{--            <label>--}}
{{--                <input type="tel" name="phone" placeholder="Ваш елефон?*" value="{{ $data['phone.value'] }}" class="uk-input">--}}
{{--            </label>--}}
{{--            {!! $data['phone.error'] !!}--}}
{{--        </div>--}}

{{--        <div class="input {{ $data['email.classname'] }} uk-margin">--}}
{{--            <label>--}}
{{--                <input type="email" name="email" placeholder="Електропочта?*" value="{{ $data['email.value'] }}" class="uk-input">--}}
{{--            </label>--}}
{{--            {!! $data['email.error'] !!}--}}
{{--        </div>--}}

{{--        <div class="input {{ $data['message.classname'] }} uk-margin">--}}
{{--            <label>--}}
{{--                <textarea name="message" placeholder="Оставьте отзыв?*" class="uk-textarea" rows="5">{{ $data['message.value'] }}</textarea>--}}
{{--            </label>--}}
{{--            {!! $data['message.error'] !!}--}}
{{--        </div>--}}

{{--        <button class="uk-button uk-button-primary" id="submit">Отправить</button>--}}
{{--    </fieldset>--}}
{{--</form>--}}