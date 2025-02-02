@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Автомобили пользователя') }}</div>
                <div class="card-body">
                <h2 class="text-center">Список автомобилей</h2>
                <div>
                <a href="{{ route('car.create') }}"><button class="btn btn-info m-1">Добавить</button></a>
                </div>
                <div>
                <a href="/api/user"><button class="btn btn-info m-1">Посмотреть Api пользователя</button></a>
                </div>

                @foreach($cars as $car)
                <div class="card m-1 p-1">
                    <p class="text-center">ID: {{$car-> id}}</p>
                    <p class="text-center">Бренд: {{$car-> brand}}</p>
                    <p class="text-center">Модель: {{$car-> model}}</p>
                    <p class="text-center">Стоимость: {{$car-> price}}</p>
                </div>

            @endforeach

                <a href="{{ route('home') }}" class="btn btn-primary mt-4">Назад</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
