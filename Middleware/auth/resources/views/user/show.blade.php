@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Данные пользователя</h1>
    <ul>
        <li><strong>ID:</strong> {{ $user->id }}</li>
        <li><strong>Имя:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
    </ul>
</div>
@endsection
