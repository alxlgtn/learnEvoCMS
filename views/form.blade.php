@extends('layouts.base')

@section('content')
    <h2>FormLister!!!</h2>

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
        'successTpl' => '@B_FILE:partials/formFeedback/successTpl',
        'formTpl' =>  '@B_FILE:partials/formFeedback/ContactForm',
        'reportTpl' =>  '@B_FILE:partials/formFeedback/ContactFormReport'
    )); !!}
@endsection