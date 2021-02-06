<?php

    declare(strict_types=1);

    require_once dirname(__FILE__) . '/functions3.php';
    
    try {
        $pdo = connect();
        $sql = "SELECT * FROM staff";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    } catch (PDOException $e) {
        echo '接続できませんでした。';
        return;
        //break;
    }

?>



<!DOCTYPE html>

<html>

    <head>
        <title>ログイン</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="allclass.css">
        <link rel="stylesheet" href="login.css">
    </head>

    <body>

        <nav id="gnav">
            <h1 class="headline">Y書店在庫管理システム</h1>
            <ul class="inner">
                <li><a href="login.php">ホーム</a></li>
                <li><a href="login.php">在庫一覧</a></li>
                <li><a href="">問い合わせ</a></li>
                <li><a href="login.php">ログアウト</a></li>
            </ul>
        </nav>

        <h1 class="title">社員ログイン</h1>




        <div class="form">

        <form class="login" method="GET" action="auth.php"><!--StoreList.php  login.php-->
        <p><input type="text" name="empid" placeholder="社員ID"></p>
        <p><input type="password" name="password" placeholder="パスワード"></p>
        <p><button type="submit" value="login">ログイン</button></p>

        
        </form>


        </div>
        
        <div class="border"></div>

        <footer>
            <div id="footerCon">
            <p>&copy; Daisuke Yomo,Kazuki Watanabe. 2021.</p>
            </div>
        </footer>

    </body>

</html>