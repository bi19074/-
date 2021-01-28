<?php

    declare(strict_types=1);

    require_once dirname(__FILE__) . '/functions3.php';
    
    /*
    try {
        $pdo = connect();
        $sql = "";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    } catch (PDOException $e) {
        echo '接続できませんでした。';
        //return;
        break;
    }

    */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>店舗詳細画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Store.css">
    </head>

    <body>
        
        <header>
            <nav id="gnav">

                <h1 class="headline">店舗詳細画面</h1>

                <ul class="inner">
                    <li><a href="StoreList.php">ホーム</a></li>
                    <li><a href="AllStock.html">在庫一覧</a></li>
                    <li><a href="">問い合わせ</a></li>
                </ul>

            </nav>

        </header>
    
        <h1 id="StoreName"><?=escape($_GET['storeName'])?></h1>

        <ul>
            <li>住所：<?=escape($_GET['adress'])?></li>
            <li>営業時間：<?=escape($_GET['time'])?></li>
            <li>取り扱い：<?=escape($_GET['service'])?></li>
        </ul>
        
        <form class="GetStock" action="Stock.php" method="GET">
            <input type="hidden" name="StoreName" value="A">
            <button type="submit" name="toStock">在庫状況</button> 
        </form>

        <footer>
            <div id="footerCon">
            <p>&copy; Daisuke Yomo,Kazuki Watanabe. 2021.</p>
            </div>
        </footer>

    </body>

</html>