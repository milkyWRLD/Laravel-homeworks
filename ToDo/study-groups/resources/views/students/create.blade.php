@extends('layouts.app')

@section('content')
    <h1>Добавить студента в группу {{ $group->title }}</h1>

    <form method="POST" action="{{ route('groups.students.store', ['group' => $group->id]) }}">
        @csrf
        <label for="surname">Фамилия:</label>
        <input type="text" name="surname" required>

        <label for="name">Имя:</label>
        <input type="text" name="name" required>

        <button type="submit">Добавить</button>
    </form>

    <a href="{{ route('groups.show', $group->id) }}">Назад</a>
@endsection
