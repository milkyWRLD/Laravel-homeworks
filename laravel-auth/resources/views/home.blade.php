@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Главная страница</h1>
    <a href="{{ route('open') }}">Открытая страница</a> |
    @auth
        <a href="{{ route('dashboard') }}">Закрытая страница</a> |
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Выйти
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @else
        <a href="{{ route('login') }}">Вход</a> |
        <a href="{{ route('register') }}">Регистрация</a>
    @endauth
</div>
@endsection
