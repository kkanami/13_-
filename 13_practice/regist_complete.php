<?php
mb_internal_encoding("utf8");
try{
$pdo=new PDO("mysql:dbname=practice;host=localhost;","root","");
$pdo->exec("insert into login_user_transaction(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority)
values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".password_hash($_POST['password'],PASSWORD_DEFAULT)."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."');");
}catch(Exception $e){
	echo '<span style="color:#FF0000">エラーが発生したためアカウント登録できません。</span>';

	exit();
}
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
            <p><span>登録完了しました</span></p>
             <form action="index.php">
           <input type="submit" class="button1" value="TOPページへ戻る">
       </form>
        </div>
         
    </body>
</html>


<!--
try{

$dbh = new PDO("mysql:host=localhost; dbname=test_db5; charset=utf8", "$user", "$password");

$stmt = $dbh->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");

$stmt->execute(array(':email' => $_POST['email'],':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)));

}catch(Exception $e){
	echo "データベースの接続に失敗しました：";
	echo $e->getMessage();
	exit();
}
参考↑https://qiita.com/wakahara3/items/792943c1e0ed7a87e1ef-->
