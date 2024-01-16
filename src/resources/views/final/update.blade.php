<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/confirm_update" method="POST">
        @csrf
        <input type="text" name="word_id" value="{{$items[0]['word_id']}}">
        ファイル名：<input type="text" name="word" value="{{$items[0]['word']}}">
        <button type="submit">変更</button>
    </form>
</body>
</html>