<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма работника</title>
</head>
<body>
    <h1>Добавить работника</h1>
    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
        <label for="first_name">Имя работника:</label>
        <input type="text" id="first_name" name="first_name" required="true"><br>

        <label for="last_name">Фамилия работника:</label>
        <input type="text" id="last_name" name="last_name" required="true"><br>

        <label for="position">Занимаемая должность:</label>
        <input type="text" id="position" name="position" required="true"><br>

        <label for="address">Адрес проживания:</label>
        <input type="text" id="address" name="address" required="true"><br>

        <label for="data">Дополнительные данные (JSON):</label>
        <textarea id="data" name="data" required="true"></textarea><br>

        <button type="submit">Сохранить</button>
    </form>
</body>
</html>
