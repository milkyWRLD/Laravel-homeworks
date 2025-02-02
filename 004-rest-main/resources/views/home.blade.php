@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Панель управления') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Вы зашли в систему!') }}

                    <div>
                        <a href="{{ route('user.profile') }}" class="btn btn-primary mt-4">Посмотреть мой профиль</a>
                    </div>
                    <div>
                        <a href="{{ route('car.create') }}" class="m-1 btn btn-info mt-4">Добавить автомобиль</a>
                    </div>
                    <div>
                        <a href="{{ route('car.index') }}" class="m-1 btn btn-info mt-4">Посмотреть список автомобилей</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
