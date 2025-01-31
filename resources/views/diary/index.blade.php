<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diary</title>
</head>

<body>
    <h1>日記一覧</h1>
    <table>
        <thead>
            <tr>
                <th>書いた日付</th>
                <th>タイトル</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($diaries as $diary)
            <tr>
                <td>{{ $diary->date }}</td>
                <td>{{ $diary->title }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>