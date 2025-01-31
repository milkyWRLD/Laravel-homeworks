@extends('layouts.app')

@section('content')
    <h1>Студент: {{ $student->name }} {{ $student->surname }}</h1>
    <p>Группа: {{ $group->title }}</p>
    <p>Дата начала: {{ $group->start_from }}</p>
    <a href="{{ route('groups.show', $group->id) }}">Назад к группе</a>
@endsection
