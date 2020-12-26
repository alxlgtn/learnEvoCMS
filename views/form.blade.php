@extends('layouts.base')

@section('content')
    <h2>FormLister!!!without ajax</h2>

{{--    <div id="ajaxForm">--}}
{{--        @include('partials.form.ContactForm')--}}
{{--    </div>--}}

    {!! $modx->runSnippet('FormLister', array(
    'formid' => 'ContactForm',
    'to' => 'muteproj@gmail.com',
    'subject' => 'Отзыв с сайта',
    'protectSubmit' => '0',
    'submitLimit' => '0',
    'rules' => [
    "name" => [
    "required" => "Enter your name"
    ],
    "email" => [
    "required" => "Enter email",
    "email" => "Incorrect email"
    ],
    "phone" => [
    "required" => "Enter phone"
    ],
    "message" => [
    "required" => "Enter message"
    ]
    ],
    'successTpl' => '@B_FILE:partials/form/ContactForm',
    'formTpl' =>  '@B_FILE:partials/form/ContactForm',
    'reportTpl' =>  '@B_FILE:partials/form/ContactFormReport',

    ));  !!}
@endsection

@push('scripts')
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript">
            $(document).on('submit', '#ajaxForm form', function (ev) {
                const frm = $('#ajaxForm form');
                $('#submit').prop("disabled", true);
                $.ajax({
                    type: 'post',
                    dataType: "json",
                    url: '{{ $modx->config['site_url'] }}feedbackajaxform',
                    data: frm.serialize(),
                    success: function (data) {
                        $('#ajaxForm').empty();
                        $('#ajaxForm').html(data.output);
                    },
                });
                ev.preventDefault();
            });

            $(document).on('click', '#ask-us-us', function (ev) {
                const frm = $('ajaxForm form');
                $.ajax({
                    type: 'post',
                    url: '{{ $modx->config['site_url'] }}newform',
                    data: frm.serialize(),
                    success: function (data) {
                        $('#ajaxForm').empty();
                        $('#ajaxForm').html(data);
                    }
                });
                ev.preventDefault();
            })
        </script>
@endpush
