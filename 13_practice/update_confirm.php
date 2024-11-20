<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>アカウント更新確認画面</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <img src="img/diblog_logo.jpg">
        <div class="content">
            <ul class="menu">
                <li><a href="index.html">トップ</a></li>
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
        <h1>アカウント更新確認画面</h1>
        <?php
        //PDO
        mb_internal_encoding("utf8");
        $pdo=new PDO("mysql:dbname=practice;host=localhost;","root","");
        $stmt=$pdo->query("select*from login_user_transaction where id = '".$_POST['resultid1']."'");
        ?>
        <?php $row=$stmt->fetch() ?>
        <table>
            <tr>
                <th>名前（姓）
                </th>
                <td>
                    <?php echo $_POST['family_name']; ?></td>
            </tr>

            <tr>
                <th>名前（名）
                </th>
                <td>
                    <?php echo $_POST['last_name']; ?>
                </td>
            </tr>

            <tr>
                <th>カナ（姓）
                </th>
                <td>
                    <?php echo $_POST['family_name_kana']; ?>
                </td>
            </tr>

            <tr>
                <th>カナ（名）
                </th>
                <td>
                    <?php echo $_POST['last_name_kana']; ?>
                </td>
            </tr>

            <tr>
                <th>メールアドレス
                </th>
                <td>
                    <?php echo $_POST['mail']; ?>
                </td>
            </tr>

            <tr>
                <th>パスワード
                </th>
                <td>
                    <?php if(!empty($_POST['password'])){
                echo "セキュリティのため表示できません。";} ?>
                </td>
            </tr>


            <tr>
                <th>性別
                </th>
                <td>
                    <?php
            $option=['0'=>'男',
                    '1'=>'女'];
            $gender=$row['gender'] ;
            $genderdisp=$option[$_POST['gender']];
             echo $genderdisp ?>
                </td>
            </tr>

            <tr>
                <th>郵便番号
                </th>
                <td>
                    <?php echo $_POST['postal_code']; ?>
                </td>
            </tr>


            <tr>
                <th>住所（都道府県）
                </th>
                <td>
                    <?php echo $_POST['prefecture']; ?>
                </td>
            </tr>

            <tr>
                <th>住所（市区町村）
                </th>
                <td>
                    <?php echo $_POST['address_1']; ?>
                </td>
            </tr>

            <tr>
                <th>住所（番地）
                </th>
                <td>
                    <?php echo $_POST['address_2']; ?>
                </td>
            </tr>

            <tr>
                <th>アカウント権限
                </th>
                <td>
                    <?php
            $option=['0'=>'一般',
                    '1'=>'管理者'];
            $authority=$row['authority'] ;
            $authoritydisp=$option[$_POST['authority']];
            echo $authoritydisp ?>
                </td>
            </tr>

        </table>

        <table>
            <tr>
                <td>
                    <form action="update.php" method="post">
                        <input type='hidden' value='<?php echo $_POST["resultid1"];?>' name='resultid1' id='resultid1'>
                        <input type="submit" class="button1" value="前に戻る">
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
                </td>
                <td>
                    <form action="update_complete.php" method="post">
                        <input type='hidden' value='<?php echo $_POST["resultid1"];?>' name='resultid1' id='resultid1'>
                        <input type="submit" class="button1" value="更新する">
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
                </td>
            </tr>
        </table>


    </main>

    <footer>
        Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
    </footer>
</body>

</html>
