<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr><th>単語</th><th>意味</th><th></th><th></th></tr>
        @foreach ($items as $item)
            <tr><td>{{$item->word}}</td><td>{{$item->word_content}}</td><td><form action="/update" method="POST">@csrf<input type="hidden" name="word_id" value="{{$item->word_id}}"><button type="submit">更新</button></form></td><td><form action="/delete" method="POST">@csrf<input type="hidden" name="word_id" value="{{$item->word_id}}"><button type="submit">削除</button></form></td></tr>
        @endforeach
    </table>
    <button onclick="location.href='/top_return'">戻る</button>
</body>
</html>