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
            @foreach($diaries as $diary)
            <tr>
                <td>
                    <a href="{{ route('diary.show', $diary) }}">{{ $diary->date }}</a>
                </td>
                <td>{{ $diary->title }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

<!-- @foreach ($diaries as $diary)
この記述は必要。ここでは個別のデータないから。
<tr>
    <td>{{ $diary->date }}</td>
    <td>{{ $diary->title }}</td>
</tr>
@endforeach -->