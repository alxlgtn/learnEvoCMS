<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master SIDEBAR!!!</p>
@endsection

@section('content')
    <p>This is my body CONTENT!!!!!</p>
@endsection

{{--@extends('layouts.base')--}}

