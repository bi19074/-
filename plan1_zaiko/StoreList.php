<?php

    declare(strict_types=1);

    require_once dirname(__FILE__) . '/functions3.php';
    
    try {
        $pdo = connect();
        $sql = "SELECT * FROM storelist";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    } catch (PDOException $e) {
        echo '接続できませんでした。';
        return;
        //break;
    }

?>


<!doctype html>
<html>

    <head>
        <title>在庫管理画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="StoreList.css">
    </head>

    <body>
        
        <header>
            <nav id="gnav">

                <h1 class="headline">在庫管理画面</h1>

                <ul class="inner">
                    <li><a href="StoreList.php">ホーム</a></li>
                    <li><a href="AllStock.html">在庫一覧</a></li>
                    <li><a href="">問い合わせ</a></li>
                </ul>

            </nav>

        </header>

        <?php $row = $stmt->fetch(PDO::FETCH_ASSOC) ?>

        <form class="StoreList" action="Store.php" method="GET">

            <ul class="stores" >

                <li><input type="hidden" name="storeName" value=<?=escape($row['name'])?>>
                    <input type="hidden" name="adress" value=<?=escape($row['adress'])?>>
                    <input type="hidden" name="time" value=<?=escape($row['time'])?>>
                    <input type="hidden" name="service" value=<?=escape($row['service'])?>>
                    <button type="submit" name="operation" value="detail">浜松店</button></li>
                
                <li><a href="">店舗B</a><input type="hidden" value="B"></li>
                <li><a href="">店舗C</a><input type="hidden" value="C"></li>
                <li><a href="">店舗D</a><input type="hidden" value="D"></li>
                <li><a href="">店舗E</a><input type="hidden" value="E"></li>
                <li><a href="">店舗F</a><input type="hidden" value="F"></li>
                <li><a href="">店舗G</a><input type="hidden" value="G"></li>
        
            </ul>
        
        </form>

        <footer>
            <div id="footerCon">
            <p>&copy; Daisuke Yomo,Kazuki Watanabe. 2021.</p>
            </div>
        </footer>

    </body>

</html>