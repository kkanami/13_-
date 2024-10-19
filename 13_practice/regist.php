<!doctype html>
<html lang="ja">


<head>
    <meta charset="utf-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>


<body>
    <h1>お問い合わせフォーム</h1>
    <form method="post" action="mail_confirm.php">

        <div>
            <label>名前</label>
            <br>
            <input type="text" class="text" size="35" name="name" value="<?php if(!empty($_POST['name'])){echo $_POST['name'];}?>">
        </div>

        <div>
            <label>メールアドレス</label>
            <br>
            <input type="text" class="text" size="35" name="mail" value="<?php if(!empty($_POST['mail'])){echo $_POST['mail'];}?>">

        </div>

        <div>

            <label>年齢</label>
            <br>
            <select class="dropdown" name="age">
                <option value="">選択してください</option>
                <option value="18" <?php if( !empty($_POST['age']) && $_POST['age'] === "18" ){ echo 'selected'; } ?>>18歳</option>
                <option value="19" <?php if( !empty($_POST['age']) && $_POST['age'] === "19" ){ echo 'selected'; } ?>>19
                    歳</option>
                <option value="20" <?php if( !empty($_POST['age']) && $_POST['age'] === "20" ){ echo 'selected'; } ?>>20歳</option>
                <option value="21" <?php if( !empty($_POST['age']) && $_POST['age'] === "21" ){ echo 'selected'; } ?>>21
                    歳</option>
                <option value="22" <?php if( !empty($_POST['age']) && $_POST['age'] === "22" ){ echo 'selected'; } ?>>22歳</option>
                <option value="23" <?php if( !empty($_POST['age']) && $_POST['age'] === "23" ){ echo 'selected'; } ?>>23歳</option>
            </select>
        </div>

        <div>
            <label>コメント</label>
            <br>
            <!--                <textarea></textarea>の間に改行やインデントいれると謎のスペースがはいってしまうので注意-->
            <textarea cols="35" rows="7" name="comments"> <?php if( !empty($_POST['comments'])){ echo $_POST['comments'];}?></textarea>
        </div>

        <div>
            <input type="submit" class="submit" value="送信する">
        </div>

    </form>
    
    <form action="index.php">
        <input type="submit" class="button1" value="戻る">
    </form>

</body>

</html>
