<!doctype html>
<html lang="ja">


<head>
    <meta charset="utf-8">
    <title>アカウント登録画面</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>


<body>
    <h1>アカウント登録</h1>
    <form method="post" class="main" action="regist_confirm.php">

        <div>
            <label>名前（姓）</label>
            <br>
            <input type="text" class="text" size="35" maxlength="10" name="family_name" value="<?php if(!empty($_POST['family_name'])){echo $_POST['family_name'];}?>">
          
        </div>

        <div>
            <label>名前（名）</label>
            <br>
            <input type="text" class="text" size="35" maxlength="10" name="last_name" value="<?php if(!empty($_POST['last_name'])){echo $_POST['last_name'];}?>">
        </div>

        <div>
            <label>カナ（姓）</label>
            <br>
            <input type="text" pattern="[\u30A1-\u30F6]*" class="text" size="35" maxlength="10" name="family_name_kana" value="<?php if(!empty($_POST['family_name_kana'])){echo $_POST['family_name_kana'];}?>">
        </div>

        <div>
            <label>カナ（名）</label>
            <br>
            <input type="text" pattern="[\u30A1-\u30F6]*" 　inputmode="katakana" class="text" size="35" maxlength="10" name="last_name_kana" value="<?php if(!empty($_POST['last_name_kana'])){echo $_POST['last_name_kana'];}?>">
        </div>

        <div>
            <label>メールアドレス</label>
            <br>
            <input type="email" class="text" size="100" maxlength="100" name="mail" value="<?php if(!empty($_POST['mail'])){echo $_POST['mail'];}?>">
        </div>

        <div>
            <label>パスワード</label>
            <br>
            <input type="password" class="text" size="35" maxlength="10" name="password" value="<?php if(!empty($_POST['password'])){echo $_POST['password'];}?>">
        </div>

        <div>
            <label>性別</label>
            <br>
            <input type="radio" id="0" name="gender" value="0" id="0" checked />
            <label for="0">男</label>

            <input type="radio" id="1" name="gender" value="1" id="1" />
            <label for="1">女</label>
        </div>

        <div>
            <label>郵便番号</label>
            <br>
            <input type="tel" class="text" size="35" maxlength="7" name="postal_code" value="<?php if(!empty($_POST['postal_code'])){echo $_POST['postal_code'];}?>">
        </div>


        <div>

            <label>住所（都道府県）</label>
            <br>
            <select class="dropdown" name="prefecture">
                <?php
                $prefecture = array(
                0 => '選択下さい。',
                1 => '北海道',
                2 => '青森県',
                3 => '岩手県',
                4 => '宮城県',
                5 => '秋田県',
                6 => '山形県',
                7 => '福島県',
                8 => '茨城県',
                9 => '栃木県',
                10 => '群馬県',
                11 => '埼玉県',
                12 => '千葉県',
                13 => '東京都',
                14 => '神奈川県',
                15 => '山梨県',
                16 => '長野県',
                17 => '新潟県',
                18 => '富山県',
                19 => '石川県',
                20 => '福井県',
                21 => '岐阜県',
                22 => '静岡県',
                23 => '愛知県',
                24 => '三重県',
                25 => '滋賀県',
                26 => '京都府',
                27 => '大阪府',
                28 => '兵庫県',
                29 => '奈良県',
                30 => '和歌山県',
                31 => '鳥取県',
                32 => '島根県',
                33 => '岡山県',
                34 => '広島県',
                35 => '山口県',
                36 => '徳島県',
                37 => '香川県',
                38 => '愛媛県',
                39 => '高知県',
                40 => '福岡県',
                41 => '佐賀県',
                42 => '長崎県',
                43 => '熊本県',
                44 => '大分県',
                45 => '宮崎県',
                46 => '鹿児島県',
                47 => '沖縄県'
                );
                ?>

                <?php foreach($prefecture as $key => $value){ ?>
                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                <?php } ?>

            </select>


        </div>

        <div>
            <label>住所（市区町村）</label>
            <br>
            <input type="text" class="text" size="35" maxlength="10" name="address_1" value="<?php if(!empty($_POST['address_1'])){echo $_POST['address_1'];}?>">
        </div>

        <div>
            <label>住所（番地）</label>
            <br>
            <input type="text" class="text" size="100" maxlength="100" name="address_2" value="<?php if(!empty($_POST['address_2'])){echo $_POST['address_2'];}?>">
        </div>


        <div>
            <label>アカウント権限</label>
            <br>
            <select class="dropdown" name="authority">
                <option value="">一般</option>
                <option value="管理者" <?php if( !empty($_POST['authority']) && $_POST['age'] === "管理者" ){ echo 'selected'; } ?>>管理者</option>
            </select>
        </div>


        　
        　　
        　
        <!--
        【入力可能な文字種類】
      ？  　　「名前（姓）」「名前（名）」はひらがな、漢字のみ入力可
        　　「カナ（姓）」「カナ（名）」はカタカナのみ入力可
        　　「パスワード」は半角英数字のみ入力可
        　　「メールアドレス」は半角英数字、半角ハイフン、半角記号（ハイフンとアットマーク）のみ入力可能
        　　「郵便番号」は半角数字のみ入力可
      ？  　　「住所（市区町村）」「住所（番地）」はひらがな、漢字、数字、カタカナ、記号（ハイフンとスペース）のみ入力可

       　確認する　　　　←UIはボタン形式、該当ボタン押下時に入力チェック（後述）をする
        　【入力チェックの仕様】
        　　アカウント登録画面の項目は全て必須入力とする為、「登録する」ボタン押下時にエラーチェックを行う。
        　　未入力または未選択の項目が1件でもあれば、該当項目の下にエラーメッセージを赤字で表示する。
        　　例えば「名前（姓）」が未入力の場合、「名前（姓）が未入力です。」とエラーメッセージを表示する。
        　　もしエラーが0件ならば、アカウント登録確認画面に遷移する。
        　【パスワードをDB登録する際の注意】
        　　パスワードはセキュリティのため、ハッシュ化してDB登録しておく。
        　　ハッシュ化のアルゴリズムやオプションの設定値は任意の値とする。
-->




        <div>
            <!--         エラーチェック未実装  -->

            <input type="submit" class="submit" value="確認する">

<!--
            <input type="hidden" value="<?php
            if(empty($_POST['family_name'])){
            echo "名前（姓）が未入力です。";
            } ?>" name="family_name">
-->


        </div>

    </form>


    <br>

        <form class="back" action="index.html">
            <input type="submit" class="back" value="TOPページへ戻る">
        </form>


</body>

</html>
