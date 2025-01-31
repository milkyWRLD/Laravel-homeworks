<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $group->title }}</title>
</head>
<body>
    <h1>Группа: {{ $group->title }}</h1>
    <p>Дата начала: {{ $group->start_from }}</p>
    <p>Статус: {{ $group->is_active ? 'Активна' : 'Не активна' }}</p>

    <h2>Студенты</h2>
    <ul>
        @foreach($group->students as $student)
            <a href="{{ route('students.show', [$group->id, $student->id]) }}">{{ $student->name }} {{ $student->surname }}</a>
        @endforeach
    </ul>

    <a href="{{ route('groups.index') }}">Назад</a>
    <a href="{{ route('groups.students.create', $group) }}">Добавить студента</a>
</body>
</html>
