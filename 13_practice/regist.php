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
            <input type="text" class="text" pattern="^[ぁ-ん一-龠ー]*$" size="35" maxlength="10" name="family_name" value="<?php if(!empty($_POST['family_name'])){echo $_POST['family_name'];}?>">
        </div>

        <div>
            <label>名前（名）</label>
            <br>
            <input type="text" class="text" pattern="^[ぁ-ん一-龠ー]*$" size="35" maxlength="10" name="last_name" value="<?php if(!empty($_POST['last_name'])){echo $_POST['last_name'];}?>">
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
                <option value=""></option>
                <option value="北海道" data-pref-id="01">北海道</option>
                <option value="青森県" data-pref-id="02">青森県</option>
                <option value="岩手県" data-pref-id="03">岩手県</option>
                <option value="宮城県" data-pref-id="04">宮城県</option>
                <option value="秋田県" data-pref-id="05">秋田県</option>
                <option value="山形県" data-pref-id="06">山形県</option>
                <option value="福島県" data-pref-id="07">福島県</option>
                <option value="茨城県" data-pref-id="08">茨城県</option>
                <option value="栃木県" data-pref-id="09">栃木県</option>
                <option value="群馬県" data-pref-id="10">群馬県</option>
                <option value="埼玉県" data-pref-id="11">埼玉県</option>
                <option value="千葉県" data-pref-id="12">千葉県</option>
                <option value="東京都" data-pref-id="13">東京都</option>
                <option value="神奈川県" data-pref-id="14">神奈川県</option>
                <option value="新潟県" data-pref-id="15">新潟県</option>
                <option value="富山県" data-pref-id="16">富山県</option>
                <option value="石川県" data-pref-id="17">石川県</option>
                <option value="福井県" data-pref-id="18">福井県</option>
                <option value="山梨県" data-pref-id="19">山梨県</option>
                <option value="長野県" data-pref-id="20">長野県</option>
                <option value="岐阜県" data-pref-id="21">岐阜県</option>
                <option value="静岡県" data-pref-id="22">静岡県</option>
                <option value="愛知県" data-pref-id="23">愛知県</option>
                <option value="三重県" data-pref-id="24">三重県</option>
                <option value="滋賀県" data-pref-id="25">滋賀県</option>
                <option value="京都府" data-pref-id="26">京都府</option>
                <option value="大阪府" data-pref-id="27">大阪府</option>
                <option value="兵庫県" data-pref-id="28">兵庫県</option>
                <option value="奈良県" data-pref-id="29">奈良県</option>
                <option value="和歌山県" data-pref-id="30">和歌山県</option>
                <option value="鳥取県" data-pref-id="31">鳥取県</option>
                <option value="島根県" data-pref-id="32">島根県</option>
                <option value="岡山県" data-pref-id="33">岡山県</option>
                <option value="広島県" data-pref-id="34">広島県</option>
                <option value="山口県" data-pref-id="35">山口県</option>
                <option value="徳島県" data-pref-id="36">徳島県</option>
                <option value="香川県" data-pref-id="37">香川県</option>
                <option value="愛媛県" data-pref-id="38">愛媛県</option>
                <option value="高知県" data-pref-id="39">高知県</option>
                <option value="福岡県" data-pref-id="40">福岡県</option>
                <option value="佐賀県" data-pref-id="41">佐賀県</option>
                <option value="長崎県" data-pref-id="42">長崎県</option>
                <option value="熊本県" data-pref-id="43">熊本県</option>
                <option value="大分県" data-pref-id="44">大分県</option>
                <option value="宮崎県" data-pref-id="45">宮崎県</option>
                <option value="鹿児島県" data-pref-id="46">鹿児島県</option>
                <option value="沖縄県" data-pref-id="47">沖縄県</option>
            </select>


        </div>

        <div>
            <label>住所（市区町村）</label>
            <br>
            <input type="text" class="text" pattern="[\u3000-\u303F\u3040-\u309F\u30A0-\u30FF\uFF00-\uFF9F\u4E00-\u9FFF]*" size="35" maxlength="10" name="address_1" value="<?php if(!empty($_POST['address_1'])){echo $_POST['address_1'];}?>">
        </div>

        <div>
            <label>住所（番地）</label>
            <br>
            <input type="text" class="text" pattern="[\u3000-\u303F\u3040-\u309F\u30A0-\u30FF\uFF00-\uFF9F\u4E00-\u9FFF]*" size="100" maxlength="100" name="address_2" value="<?php if(!empty($_POST['address_2'])){echo $_POST['address_2'];}?>">
        </div>


        <div>
            <label>アカウント権限</label>
            <br>
            <select class="dropdown" name="authority">
                <option value="">一般</option>
                <option value="管理者" <?php if( !empty($_POST['authority']) && $_POST['age'] === "管理者" ){ echo 'selected'; } ?>>管理者</option>
            </select>
        </div>

        <div>
            <!--         エラーチェック未実装  -->

            <input type="submit" class="submit" value="確認する">


 
        </div>

    </form>


    <br>

    <form class="back" action="index.html">
        <input type="submit" class="back" value="TOPページへ戻る">
    </form>


</body>

</html>
