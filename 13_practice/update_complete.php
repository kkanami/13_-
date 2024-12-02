<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>アカウント更新完了画面</title>
    
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
        <h1>アカウント更新完了画面</h1>
        
     <?php
        //PDO
        mb_internal_encoding("utf8");
        try{
        $pdo=new PDO("mysql:dbname=practice;host=localhost;","root","");
        $pdo->exec("update login_user_transaction set family_name='".$_POST['family_name']."' , last_name='".$_POST['last_name']."' , family_name_kana='".$_POST['family_name_kana']."' , last_name_kana='".$_POST['last_name_kana']."' , mail='".$_POST['mail']."' , gender='".$_POST['gender']."' , postal_code='".$_POST['postal_code']."' , prefecture='".$_POST['prefecture']."' , address_1='".$_POST['address_1']."' , address_2='".$_POST['address_2']."' , authority='".$_POST['authority']."' , update_time= now() where id = '".$_POST['resultid1']."'");
            
        if(!empty($_POST['password'])){$pdo->exec("update login_user_transaction set password='".password_hash($_POST['password'],PASSWORD_DEFAULT)."', update_time= now() where id = '".$_POST['resultid1']."'");}
        
        }catch(Exception $e){
	   echo '<span style="color:#FF0000">エラーが発生したためアカウント更新できません。</span>' . $e->getMessage();
       
	   exit();
        }    
        
        ?>
        
       <div class="confirm">
                <p><span>更新完了しました</span></p>
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
