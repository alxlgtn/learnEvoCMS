<?php
Event::listen('evolution.OnPageNotFound', function ($params) {
    $modx = EvolutionCMS();
    switch($_GET['q']){

        case 'newform':
            echo View::make('partials.form.ContactForm');
            die();
            break;

        case 'feedbackajaxform':
            echo $modx->runSnippet('FormLister', array(
                'formid' => 'ContactForm',
                'to' => 'muteproj@gmail.com',
                'subject' => 'Отзыв с сайта',
                'api' => '2',
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
                'reportTpl' =>  '@B_FILE:partials/form/ContactFormReport'

            ));
            die();
            break;
    }
});
