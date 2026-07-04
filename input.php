<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー登録 - 入力</title>
</head>
<body>
    <h1>ユーザー登録（1/3）入力</h1>
    <form action="confirm.php" method="post">
        <p>
            <label>
                お名前：
                <input type="text" name="name" required>
            </label>
        </p>
        <p>
            <label>
                メールアドレス：
                <input type="email" name="email" required>
            </label>
        </p>
        <p>
            <label>
                年齢：
            <input type="number" name="age" required>
            </label>
        </p>
        <button type="submit">確認画面へ</button>
    </form>
</body>
</html>