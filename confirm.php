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
    <title>ユーザー登録 - 確認</title>
</head>
<body>
    <h1>ユーザー登録（2/3）確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>
    <p>
    <table border="1" bordercolor="black">
        <tr>
            <th>お名前</th>
            <th><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></th>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <th><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></th>
        </tr>
        <tr>
            <th>年齢</th>
            <th><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8')."歳"; ?></th>
        </tr>
    </table>
    </p>
    <form action = "complete.php" method = "POST">

        <!--complete.phpページへデータ保持するために隠しフィールドに"name"と"email"と"age"を表示（ブラウザ表示はされない）-->
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">

        <!--最初のボタンは1つ前に戻る(データ保持されない)、2番目のボタンはcomplete.phpに遷移-->
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">登録する</button>
    </form>
</body>
</html>