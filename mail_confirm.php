<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">

</head>

<body>
    <h1>お問合わせ内容確認</h1>

    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
            <br> よろしければ「送信する」ボタンを押して下さい。
        </p>

        <p>名前
            <br>
            <?php echo isset($_POST['name']) ? $_POST['name'] : ""; ?>
        </p>

        <p>メールアドレス
            <br>
            <?php echo isset($_POST['mail']) ? $_POST['mail'] : ""; ?>
        </p>

        <p>年齢
            <br>
            <?php echo isset($_POST['age']) ? $_POST['age'] . "歳" : ""; ?>
        </p>

        <p>コメント
            <br>
            <?php echo isset($_POST['comments']) ? $_POST['comments'] : ""; ?>
        </p>

        <div class="buttons">
            <form action="index.html">
                <input type="submit" class="button1" value="戻って修正する" />
            </form>

            <form action="insert.php" method="post">
                <input type="submit" class="button2" value="登録する" />
                <input type="hidden" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ""; ?>">
                <input type="hidden" name="mail" value="<?php echo isset($_POST['mail']) ? $_POST['mail'] : ""; ?>">
                <input type="hidden" name="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : ""; ?>">
                <input type="hidden" name="comments" value="<?php echo isset($_POST['comments']) ? $_POST['comments'] : ""; ?>">
            </form>
        </div>
    </div>
</body>
</html>
