<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Название кнопки</th>
                <th>Клики</th>
                <th>Уникальные</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clicks as $button => $items)
                <tr>
                    <td>{{ $button ?: 'Без названия' }}</td>
                    <td>{{ $items->count() }}</td>
                    <td>{{ $items->unique('user_id')->count() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
