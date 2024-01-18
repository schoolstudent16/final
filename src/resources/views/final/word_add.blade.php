<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>新しいフォルダを作成</h1>
    <form action="/add" method="POST">
        @csrf
        <p>単語：<input type="text" name="word" required></p>
        <p>カテゴリ名：<input type="text" name="category" required></p>
        <p>意味：<textarea name="word_content" cols="30" rows="10" required></textarea></p>
        <button type="submit">この名前で作成</button>
    </form>
    <p><button onclick="location.href='/top_return'">戻る</button></p>
</body>
</html>