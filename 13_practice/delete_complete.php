<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>アカウント削除完了画面</title>
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
            </ul>
        </div>
    </header>

    <main>
        <h1>アカウント削除完了画面</h1>


        <?php
        //PDO
        mb_internal_encoding("utf8");
        try{
        $pdo=new PDO("mysql:dbname=practice;host=localhost;","root","");
        $pdo->exec("update login_user_transaction set delete_flag=1 , update_time= now() where id = '".$_POST['resultid2']."'");
        }catch(Exception $e){
	   echo '<span style="color:#FF0000">エラーが発生したためアカウント削除できません。</span>';

	   exit();
        }    
        ?>

            <div class="confirm">
                <p><span>削除完了しました</span></p>
                <form action="index.html">
                    <input type="submit" class="button1" value="TOPページへ戻る">
                </form>
            </div>

    </main>

    <footer>
        Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
    </footer>
</body>

</html>
