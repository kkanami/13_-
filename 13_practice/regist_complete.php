<?php
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>


<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>登録完了画面</title>
        <link rel="stylesheet"type="text/css"href="style3.css">
    </head>
    <body>
        <h1>アカウント登録</h1>
        <div class="confirm">
            <p>登録完了しました</p>
             <form action="index.html">
           <input type="submit" class="button1" value="TOPページへ戻る">
       </form>
        </div>
         
    </body>
</html>