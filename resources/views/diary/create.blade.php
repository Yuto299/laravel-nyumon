<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日記作成フォーム</title>
</head>

<body>
    <h1>日記作成</h1>

    <form method="POST" action="{{ route('diary.store') }}">
        @csrf

        <div>
            <label for="title">タイトル:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="body">本文:</label>
            <textarea name="body" id="body" required></textarea>
        </div>

        <div>
            <button type="submit">投稿</button>
        </div>
    </form>
</body>

</html>