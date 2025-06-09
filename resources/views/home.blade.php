@extends('layouts.default')

@section('title', 'Главная страница')

@section('content')

    <h2>Добро пожаловать, {{ $name }}!</h2>
    
    @if ($age > 18)
        <p>Возраст: {{ $age }}</p>
    @else
        <p>Предупреждение: указанный человек слишком молод.</p>
    @endif

    <p>Должность: {{ $position }}</p>
    <p>Адрес: {{ $address }}</p>


@endsection
