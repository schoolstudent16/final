<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/add" method="POST">
        @csrf
        <input type="text" name="word">
        <select name="category">
            
        </select>
        <textarea name="word_content" cols="30" rows="10"></textarea>

    </form>

</body>
</html>