<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать группу</title>
</head>
<body>
    <h1>Создать новую группу</h1>
    <form action="{{ route('groups.store') }}" method="POST">
        @csrf
        <label>Название группы:
            <input type="text" name="title" required>
        </label><br>
        <label>Дата начала:
            <input type="date" name="start_from" required>
        </label><br>
        <label>Активна:
            <select name="is_active">
                <option value="1">Да</option>
                <option value="0">Нет</option>
            </select>
        </label><br>
        <button type="submit">Создать</button>
    </form>
    <a href="{{ route('groups.index') }}">Назад</a>
</body>
</html>
