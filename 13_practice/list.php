<?php
    session_start();
    if(!isset($_SESSION['user'])){
        echo "ログインしてください";
        echo' <form action="login.php">
                    <input type="submit" class="button1" value="ログイン">
                </form>';
    exit();
}

if($_SESSION['user']==0){
   echo "権限がありません";
    exit();
}
?>



<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>アカウント一覧画面</title>
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
                <li><a href="login.php">ログイン</a></li>
                <li><a href="logout.php">ログアウト</a></li>
            </ul>
        </div>
    </header>

    <main>
        <h1>アカウント一覧画面</h1>
   
            <table border="1">

                <form method="post" class="search" action="#">

                    <tr>
                        <th>名前（姓）</th>
                        <td><input type="text" class="text" id="family_name" name="family_name" value=""></td>
                        <th>名前（名）</th>
                        <td><input type="text" class="text" id="last_name" name="last_name" value=""></td>
                    </tr>
                    <tr>
                        <th>カナ（姓）</th>
                        <td> <input type="text" id="family_name_kana" name="family_name_kana" value=""></td>
                        <th>カナ（名）</th>
                        <td><input type="text" class="text" id="last_name_kana" name="last_name_kana" value=""></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td> <input type="email" class="text" id="mail" name="mail" value=""></td>
                        <th>性別</th>
                        <td> <input type="radio" id="0" name="gender" value="0" checked>
                            <label for="0">男</label>
                            <input type="radio" id="1" name="gender" value="1">
                            <label for="1">女</label>
                        </td>
                    </tr>
                    <tr>
                        <th>アカウント権限</th>
                        <td> <select class="dropdown" id="authority" name="authority">
                                <option value="0">一般</option>
                                <option value="1">管理者</option>
                            </select></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="search_submit" value="検索" ></td>
                    </tr>
                </form>
         
            </table>

        


    
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
        mb_internal_encoding("utf8");
        $pdo=new PDO("mysql:dbname=practice;host=localhost;","root","");
        $stmt = $pdo->prepare("select*from login_user_transaction where family_name =? and last_name=? and family_name_kana=? and last_name_kana=? and mail=?" );
        $family_name=$_POST['family_name'];
        $last_name=$_POST['last_name'];
        $family_name_kana=$_POST['family_name_kana'];
        $last_name_kana=$_POST['last_name_kana'];
        $mail=$_POST['mail'];
        
            
        $stmt->bindValue(1,$family_name);
        $stmt->bindValue(2,$last_name);
        $stmt->bindValue(3,$family_name_kana);
        $stmt->bindValue(4,$last_name_kana);
        $stmt->bindValue(5,$mail);
        

           $stmt->execute();
                $result1=$stmt->fetchALL();
                print_r($result1);
   
                
         //投稿を表示させるrow…行 stmt…statementの略。声明 fetch…取ってくる
    while($row=$stmt->fetchALL()){
                
                echo "<tr>";
        $result= $row['id'];
                echo "<td>".$result."</td>";
        
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
               if(empty($row['registered_time'])){
                   echo "<td>".''."</td>" ; 
               } else if   (!empty($row['registered_time'])){ 
                    echo "<td>". date('Y/m/d', strtotime($regist))."</td>";
               }
        
                $update=$row['update_time'];
              if(empty($row['update_time'])){
                   echo "<td>".''."</td>" ; 
               } else if   (!empty($row['update_time'])){ 
                    echo "<td>". date('Y/m/d', strtotime($update))."</td>";
               }
        
                echo "<td>";
                echo '<form method="post" class="back" action="update.php" >';
                echo"<input type='hidden' value={$result} name='resultid1' id='resultid1'>";
                echo'<input type="submit" class="back" value="更新">';
                echo"</form>";
                echo"</td>";

                echo "<td>";
                echo '<form  method="post" class="back" action="delete.php">';
                echo"<input type='hidden' value={$result} name='resultid2' id='resultid2'>";
                echo"<input type='submit' class='back' value='削除'>";
 
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
