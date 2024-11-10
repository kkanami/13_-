<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>アカウント一覧画</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <img src="img/diblog_logo.jpg">
        <div class="content">
            <ul class="menu">
                <li>トップ</li>
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
        <h1>アカウント一覧画面</h1>
        <?php
        //PDO
        mb_internal_encoding("utf8");
        $pdo=new PDO("mysql:dbname=practice;host=localhost;","root","");
        $stmt=$pdo->query("select*from login_user_transaction");
        ?>

        <?php
         //投稿を表示させるrow…行 stmt…statementの略。声明 fetch…取ってくる
    while($row=$stmt->fetch()){
             echo'<div class="account">';
        
//               echo"<h3>".$row['title']."</h3>";
                echo $row['id'];
                echo $row['family_name'];
                echo $row['last_name'];
                echo $row['family_name_kana'];
                echo $row['last_name_kana'];
                echo $row['mail'];
                echo $row['authority'];
                echo $row['gender'];
                echo $row['delete_flag'];
                echo $row['registered_time'];
                echo $row['update_time'];
        
                echo"</div>";
            }
              ?>

        <form class="back" action="update.php">
            <input type="submit" class="back" value="更新">
        </form>
        
        <form class="back" action="delete.php">
            <input type="submit" class="back" value="削除">
        </form>


    </main>

    <footer>
        Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
    </footer>
</body>

</html>
