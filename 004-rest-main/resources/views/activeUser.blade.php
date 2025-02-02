@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Профиль пользователя') }}</div>
                <div class="card-body">
                    <h2>Мой профиль</h2>
                    <ul>
                        <li>ID: {{ $user->id }}</li>
                        <li>Name: {{ $user->name }}</li>
                        <li>Email: {{ $user->email }}</li>
                    </ul>

                    <a href="{{ route('home') }}" class="btn btn-primary mt-4">Назад</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
