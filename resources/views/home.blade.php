<h1>Lorem ipsum dolor sit amet!</h1>

@extends('layouts.app')

@section('content')
    <h1>Welcome to lorem ipsum</h1>

    <x-alert color="red">
        This is a warning!
    </x-alert>

    <x-alert color="green">
        Success!
    </x-alert>
@endsection