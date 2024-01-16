<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/confirm_delete" method="POST">
        @csrf
        <p>単語ID：{{$items[0]['word_id']}}</p>
        <p>登録日：{{$items[0]['register_date']}}</p>
        <p>カテゴリ名：{{$items[0]['category_name']}}</p>
        <p>単語：{{$items[0]['word']}}</p>
        <p>意味：{{$items[0]['word_content']}}</p>
        <input type="hidden" name="word_id" value="{{$items[0]['word_id']}}">
        <button type="submit">削除</button>
    </form>
</body>
</html>