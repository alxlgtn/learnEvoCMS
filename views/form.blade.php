@extends('layouts.base')

@section('title', 'Page Title')

@section('nav')
    <ul class="nav">
        <li>home</li>
        <li>item_1</li>
        <li>item_2</li>
    </ul>
@endsection

@section('content')

    <h2>FormLister</h2>

    {!! $modx->runSnippet('FormLister', array(
        'formid' => 'ContactForm',
        'to' => 'muteproj@gmail.com',
        'subject' => 'Message from Ligas FormLister EvoCMS',
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
        'successTpl' => '@B_FILE:partials/form/successTpl',
        'formTpl' =>  '@B_FILE:partials/form/ContactForm',
        'reportTpl' =>  '@B_FILE:partials/form/ContactFormReport'
    )); !!}

@endsection
