@extends('mainLayout')

@section('title', 'Закрытая страница')

@section('content')
    <h1>Закрытая страница</h1>

    <p>Пользователь: </p>

    <a href="{{ route('user.logout') }}" class="btn btn-warning">Разлогинуться</a>
@endsection
