<!doctype html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>アカウント登録確認画面</title>
        <link rel="stylesheet" type="text/css" href="style3.css">
    </head>


    <body>
        <h1>アカウント登録確認</h1>
        <div class="confirm">
            <p>登録内容はこちらでよろしいでしょうか？
                <br>よろしければ「登録する」ボタンを押してください。
            </p>

            <p>名前
                <br>
                <?php echo $_POST['name']; ?>
            </p>

            <p>メールアドレス
                <br>
                <?php echo $_POST['mail']; ?>
            </p>

            <p>年齢
                <br>
                <?php echo $_POST['age']."歳"; ?>
            </p>

            <p>コメント
                <br>
                <?php echo $_POST['comments']; ?>
            </p>

       <form method="POST" action="regist.php">
           <input type="submit" class="button1" value="戻って修正する">
            <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
           <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
           <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
           <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
       </form>
       <!--以下は、regist.htmlから引き渡されたpostをここで再度箱に格納し、complete.phpに引き渡す。type=hiddenにすることで非表示となる。-->
       <form action="regist_complete.php" method="post">
           <input type="submit" class="button2" value="登録する">
           <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
           <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
           <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
           <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
           
       </form>
     
       
       
        </div>
    </body>
</html>
