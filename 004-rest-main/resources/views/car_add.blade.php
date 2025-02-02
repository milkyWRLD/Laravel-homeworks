@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Автомобили пользователя') }}</div>
                <div class="card-body">
                <h2 class="text-center">Добавления автомобиля</h2>
                <form action="{{ route('cars.store')}} " method="post">
                @csrf
                <div class="form-grup mb-3">
                    <label for="brand">Бренд авто</label>
                    <input type="text" name="brand" placeholder="Бренд авто" id="brand" class="form-control" required>
                </div>
                <div class="form-grup mb-3">
                    <label for="model">Модель авто</label>
                    <input type="text" name="model" placeholder="Модель авто" id="model" class="form-control" required>
                </div>
                <div class="form-grup mb-3">
                    <label for="price">Цена авто</label>
                    <textarea type="text" name="price" placeholder="Цена авто" id="price" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-success mb-3">Отправить</button>
                </form>

                <a href="{{ route('home') }}" class="btn btn-primary mt-4">Назад</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

