<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>ログイン</h2>
        <form action="" method="POST">
            @csrf
            <p>ユーザー名</p>
            <p><input type="text" name="user_name"></p>
            <p>メールアドレス</p>
            <p><input type="text" name="mail_address"></p>
            <p>パスワード</p>
            <p><input type="password" name="pass"></p>
            <a href="/account/1">アカウントを作成</a><button type="submit">ログイン</button>
        </form>
        
    </div>
</body>
</html>