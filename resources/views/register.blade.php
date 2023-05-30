@extends('layouts.app')

@section('title')Регистрация@endsection

@section('custom.css')
    <link rel="stylesheet" href="/css/register.css">
@endsection

@section('content')
<div class="container">
    <p>Занятие: {{$sport->title}}</p>
    <p>Тренер: {{$sport->coach}}</p>
    <p>Стоимость занятия: {{$sport->price}} Руб.</p>
</div>
<h1 class="container" style="text-align:center;">Введите информацию для регистрации</h1>
<form id="registrationForm" action="{{ route('register.store', ['sport' => $sport->id]) }}" method="POST">
    @csrf
    {{-- Поля для заполнения --}}
    <input type="text" name="first_name" placeholder="Имя" required>
    <input type="text" name="last_name" placeholder="Фамилия" required>
    <input type="text" name="phone_number" placeholder="Номер телефона" required>
    <input type="email" name="email" placeholder="Email" required>

    {{-- скрытые поля --}}
    <input type="hidden" name="sport_id" value="{{ $sport->id }}">
    <button type="submit" class="bot1">Зарегистрироваться</button>
@endsection
