@extends('layouts.default')

@section('title', 'Контакты')

@section('content')

    <h2>Контактная информация</h2>
    
    <p>Адрес: {{ $address }}</p>
    <p>Почтовый индекс: {{ $post_code }}</p>

    @if (!empty($email))
        <p>Email: {{ $email }}</p>
    @else
        <p>Адрес электронной почты не указан.</p>
    @endif

    <p>Телефон: {{ $phone }}</p>

@endsection
