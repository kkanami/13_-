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
        $stmt=$pdo->query("select*from login_user_transaction ORDER BY id DESC");
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
                    <th colspan="2">操作</th>

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
               
                $option=['0'=>'男',
                         '1'=>'女'];
                    $gender=$row['gender'] ;
                    $genderdisp=$option[$row['gender']];
                echo "<td>".$genderdisp."</td>";
        
                $option=['0'=>'一般',
                         '1'=>'管理者'];
                    $authority=$row['authority'] ;
                    $authoritydisp=$option[$row['authority']];
                echo "<td>". $authoritydisp."</td>";
        
                $option=['0'=>'有効',
                        '1'=>'無効',
                        ''=>''];
                    $delete=$row['delete_flag'] ;
                    $deletedisp=$option[$row['delete_flag']];
                echo "<td>".$deletedisp."</td>";
        
                $regist=$row['registered_time'];
                echo "<td>". date('Y/m/d', strtotime($regist))."</td>";
                echo "<td>". $row['update_time']."</td>";
                echo "<td>";
        
                echo '<form class="back" action="update.php">';
                echo'<input type="submit" class="back" value="更新">';
                echo"</form>";
                echo"</td>";

                echo "<td>";
                echo '<form class="back" action="delete.php">';
                echo'<input type="submit" class="back" value="削除">';
                echo"</form>";
                echo"</td>";
                echo" </tr>";
            }
               
              ?>
       

        
               
            </table>
        </div>



    </main>

    <footer>
        Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
    </footer>
</body>

</html>
