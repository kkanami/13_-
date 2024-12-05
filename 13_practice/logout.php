<?php
session_start();
$_SESSION = array();//セッションの中身をすべて削除
session_destroy();//セッションを破壊
?>
<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ログアウト画面</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <img src="img/diblog_logo.jpg">
        <div class="content">
            <ul class="menu">
                <li><a href="index.php">トップ</a></li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
                <li> <a href="regist.php">アカウント登録</a></li>
                <li> <a href="list.php">アカウント一覧</a></li>
                <li><a href="login.php">ログイン</a></li>
                <li><a href="logout.php">ログアウト</a></li>
            </ul>
        </div>
    </header>




    <main>
        <h1>ログアウト画面</h1>



        <div class="confirm">
            <p><span>ログアウトしました</span></p>
        </div>




    </main>

    <footer>
        Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
    </footer>
</body>

</html>
