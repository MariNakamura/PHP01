<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>入力画面</title>
</head>
<body>
    <h1>お問い合わせフォーム</h1>
    <form action="write.php" method="POST">
        <div>
            <label for="name">お名前：</label>
            <input type="text" id="name" name="name" />
        </div>
        <div>
            <label for="email">メールアドレス：</label>
            <input type="email" id="email" name="email" />
        </div>
        <div>
            <label for="message">お問い合わせ内容：</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <button type="submit">送信</button>
    </form>
</body>
</html>