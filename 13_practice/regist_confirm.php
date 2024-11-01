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

        <p>名前（姓）
            <br>
            <?php echo $_POST['family_name']; ?>
        </p>

        <p>名前（名）
            <br>
            <?php echo $_POST['last_name']; ?>
        </p>

        <p>カナ（姓）
            <br>
            <?php echo $_POST['family_name_kana']; ?>
        </p>

        <p>カナ（名）
            <br>
            <?php echo $_POST['last_name_kana']; ?>
        </p>

        <p>メールアドレス
            <br>
            <?php echo $_POST['mail']; ?>
        </p>

        <p>パスワード
            <br>
            <?php if(!empty($_POST['password'])){
                echo "●●●●";} ?>
        </p>


        <p>性別
            <br>
            <?php
            $option=['0'=>'男',
                    '1'=>'女'];
            $gender=$_POST['gender'] ;
            $genderdisp=$option[$_POST['gender']];
             echo $genderdisp ?>
        </p>

        <p>郵便番号
            <br>
            <?php echo $_POST['postal_code']; ?>
        </p>


        <p>住所（都道府県）
            <br>
            <?php 
           
            echo $_POST['prefecture']; ?>
        </p>

        <p>住所（市区町村）
            <br>
            <?php echo $_POST['address_1']; ?>
        </p>

        <p>住所（番地）
            <br>
            <?php echo $_POST['address_2']; ?>
        </p>

        <p>アカウント権限
            <br>
            <?php echo $_POST['authority']; ?>
        </p>

        <!--以下は、regist.htmlから引き渡されたpostをここで再度箱に格納し、complete.phpに引き渡す。type=hiddenにすることで非表示となる。-->
        <form action="regist_complete.php" method="post">
            <input type="submit" class="button2" value="登録する">
            <input type="hidden" value="<?php echo $_POST['family_name'];?>" name="family_name">
            <input type="hidden" value="<?php echo $_POST['last_name'];?>" name="last_name">
            <input type="hidden" value="<?php echo $_POST['family_name_kana'];?>" name="family_name_kana">
            <input type="hidden" value="<?php echo $_POST['last_name_kana'];?>" name="last_name_kana">
            <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['password'];?>" name="password">
            <input type="hidden" value="<?php echo $_POST['gender'];?>" name="gender">
            <input type="hidden" value="<?php echo $_POST['postal_code'];?>" name="postal_code">
            <input type="hidden" value="<?php echo $_POST['prefecture'];?>" name="prefecture">
            <input type="hidden" value="<?php echo $_POST['address_1'];?>" name="address_1">
            <input type="hidden" value="<?php echo $_POST['address_2'];?>" name="address_2">
            <input type="hidden" value="<?php echo $_POST['authority'];?>" name="authority">

        </form>
        <!--以下は入力を前ページに戻す-->
        <form method="POST" action="regist.php">
            <input type="submit" class="button2" value="前に戻る">
            <input type="hidden" value="<?php echo $_POST['family_name'];?>" name="family_name">
            <input type="hidden" value="<?php echo $_POST['last_name'];?>" name="last_name">
            <input type="hidden" value="<?php echo $_POST['family_name_kana'];?>" name="family_name_kana">
            <input type="hidden" value="<?php echo $_POST['last_name_kana'];?>" name="last_name_kana">
            <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['password'];?>" name="password">
            <input type="hidden" value="<?php echo $_POST['gender'];?>" name="gender">
            <input type="hidden" value="<?php echo $_POST['postal_code'];?>" name="postal_code">
            <input type="hidden" value="<?php echo $_POST['prefecture'];?>" name="prefecture">
            <input type="hidden" value="<?php echo $_POST['address_1'];?>" name="address_1">
            <input type="hidden" value="<?php echo $_POST['address_2'];?>" name="address_2">
            <input type="hidden" value="<?php echo $_POST['authority'];?>" name="authority">
        </form>




    </div>
</body>

</html>
