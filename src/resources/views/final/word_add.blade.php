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
        <p><input type="text" name="word" placeholder="新規フォルダの名前"></p>
        <select name="category">
            @for ($i = 1; $i <= count($items); $i++)
                <option value="{{$i}}">{{$items[$i-1]["category_name"]}}</option>
            @endfor
        </select>
        <p><textarea name="word_content" cols="30" rows="10"></textarea></p>
        <button type="submit">この名前で作成</button>
    </form>

</body>
</html>