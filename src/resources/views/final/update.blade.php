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
        <input type="hidden" name="word_id" value="{{$items[0]['word_id']}}">
        <p>ファイル名：<input type="text" name="word" value="{{$items[0]['word']}}"></p>
        <p><textarea name="word_content" cols="30" rows="10">{{$items[0]['word_content']}}</textarea></p>
        <button type="submit">変更</button> <button onclick="location.href='/top_return'">戻る</button>
    </form>
</body>
</html>