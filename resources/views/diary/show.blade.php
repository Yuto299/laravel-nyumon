<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $diary->title }}</title>
</head>

<body>
    <h1>{{ $diary->title }}</h1>
    <!-- 内容と日付を表示する -->

    <div>
        <a href="{{ route('diary.edit', $diary) }}">
            <button>編集</button>
        </a>
    </div>
    <div>
        <div>{{ $diary->body }}</div>
        <div>{{ $diary->date }}</div>
    </div>
</body>

</html>