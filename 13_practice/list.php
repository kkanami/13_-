<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>アカウント一覧画</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <img src="img/diblog_logo.jpg">
        <div class="content">
            <ul class="menu">
                <li>トップ</li>
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
        <h1>アカウント一覧画面</h1>



        <?php
        //PDO
        mb_internal_encoding("utf8");
        $pdo=new PDO("mysql:dbname=practice;host=localhost;","root","");
        $stmt=$pdo->query("select*from login_user_transaction");
        ?>
        <div class="account">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>名前（姓）</th>
                    <th>名前（名）</th>
                    <th>カナ（姓）</th>
                    <th>カナ（名）</th>
                    <th>メールアドレス</th>
                    <th>性別</th>
                    <th>アカウント権限</th>
                    <th>削除フラグ</th>
                    <th>登録日時</th>
                    <th>更新日時</th>
                    <th>操作</th>

                </tr>

                <?php
         //投稿を表示させるrow…行 stmt…statementの略。声明 fetch…取ってくる
    while($row=$stmt->fetch()){
                
                echo "<tr>";
                echo "<td>". $row['id']."</td>";
                echo "<td>". $row['family_name']."</td>";
                echo "<td>". $row['last_name']."</td>";
                echo "<td>". $row['family_name_kana']."</td>";
                echo "<td>". $row['last_name_kana']."</td>";
                echo "<td>". $row['mail']."</td>";
                echo "<td>". $row['authority']."</td>";
                echo "<td>". $row['gender']."</td>";
                echo "<td>". $row['delete_flag']."</td>";
                echo "<td>". $row['registered_time']."</td>";
                echo "<td>". $row['update_time']."</td>";

            }
                
              ?>
                <td>
                    <form class="back" action="update.php">
                        <input type="submit" class="back" value="更新">
                    </form>
                </td>

                <td>
                    <form class="back" action="delete.php">
                        <input type="submit" class="back" value="削除">
                    </form>
                </td>
                </tr>
            </table>
        </div>



    </main>

    <footer>
        Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
    </footer>
</body>

</html>
