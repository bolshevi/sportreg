@extends('layouts.app')

@section('title')Запись на спортивные занятия@endsection

@section('custom.css')
    <link rel="stylesheet" href="/css/style_gs.css">
@endsection

@section('content')
<section>
    <div class="container">
        <h1 class="text-center text-black mt-5 pb-5">Занятия</h1>
        <div class="items mb-5" style="">
            @foreach($sports as $sport)
            <form action="#">
                <div class="item text-white mb-4"
                    style="">
                    <img class="img-fluid" src="{{ $sport->img }}" style="height:350px;">
                    <div class="content p-4">
                        <h3>{{ $sport->title }}</h3>
                        <p style="color: rgb(105, 105, 105);"><i>Пермь, дворец спорта "МОЛОТ"</i></p>
                        <p>Длительность: {{ $sport->duration }} мин</p>
                        <p>Дата: {{ $sport->date }}</p>
                        <p>Время начала: {{ $sport->start_time }}</p>
                        <p>Время окончания: {{ date('H:i', strtotime($sport->start_time) + ($sport->duration * 60)) }}</p>
                        <p>Тренер: {{ $sport->coach }}</p>
                        <p>Стоимость: {{ $sport->price }} Руб.</p>
                        <a href="{{ route('register', ['sport' => $sport->id]) }}" style="">Записаться</a>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('footer')
<section class="pt-5 pb-5" style="">
    <footer>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <h2 class="text-white">Наш номер телефона:</h2>
                    <p class="card-text text-white">8 (800) 100-10-10</p>
                </div>
                <div class="col">
    
                </div>
                    <li class="nav-item">
                        <a class="nav-link text-white">Ваш город: Пермь</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</section>
@endsection