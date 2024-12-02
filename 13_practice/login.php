
<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ログイン画面</title>
        <script type="text/javascript">

        function check5() {
            if (form.mail.value == "") {
                document.getElementById("mail_msg").innerHTML = "メールアドレスを入力してください。";
                return false;
            } else {
                return true;
            }
        }

        function check6() {
            if (form.password.value == "") {
                document.getElementById("password_msg").innerHTML = "パスワードを入力してください。";
                return false;
            } else {
                return true;
            }
        }
    
    </script>
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
        <h1>ログイン画面</h1>

        <table>
            <form method="post" class="main" action="index.php" 　name="form" id="form" onsubmit="return !! (check5()& check6())">

                <div>
                    <label>メールアドレス</label>
                    <br>
                    <input type="email" class="text" size="100" maxlength="100" id="mail" name="mail" value="">
                </div>
                <p style="color:#FF0000" id="mail_msg"></p>

                <div>
                    <label>パスワード</label>
                    <br>
                    <input type="password" pattern="^[0-9a-zA-Z]*$" class="text" size="35" maxlength="10" id="password" name="password" value="">
                </div>
                <p style="color:#FF0000" id="password_msg"></p>

              

                <div>
                    <input type="submit" class="submit" value="ログイン">
                </div>

            </form>




        </table>



    </main>

    <footer>
        Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
    </footer>
</body>

</html>
