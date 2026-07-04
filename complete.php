<?php
// フォームから送信されたデータを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー登録 - 完了</title>
</head>
<body>
    <h1>ユーザー登録（3/3）完了</h1>
    <p><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>さん、登録が完了しました！</p>
    <p>確認メールを <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?> に送信しました。</p>
    <a href="input.php?clear=1">最初に戻る</a> <!--clear=1により入力フォームを空にしてinput.phpにアクセス-->
</body>
</html>