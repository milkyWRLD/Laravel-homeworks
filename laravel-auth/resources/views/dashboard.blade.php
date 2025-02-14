@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Личный кабинет</h1>
    <p>Имя: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>ID: {{ $user->id }}</p>
</div>
@endsection
