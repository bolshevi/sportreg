@extends('layouts.app')

@section('title')Админ панель@endsection

@section('custom.css')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
<h1 class="container" style="text-align:center;">Записи</h1>

<table>
    <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Номер телефона</th>
            <th>Email</th>
            <th>Занятие</th>
            <th>Дата</th>
            <th>Время</th>
            <th>Удалить</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registrations as $registration)
            <tr>
                <td>{{ $registration->first_name }}</td>
                <td>{{ $registration->last_name }}</td>
                <td>{{ $registration->phone_number }}</td>
                <td>{{ $registration->email }}</td>
                <td>{{ $registration->sport->title }}</td>
                <td>{{ $registration->sport->date }}</td>
                <td>{{ $registration->sport->start_time }}</td>
                <td>
                    <form action="{{ route('admin.deleteRegister', $registration->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection