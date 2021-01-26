
<?php

    /*
    declare(strict_types=1);

    require_once dirname(__FILE__) . '/functions3.php';
    
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

                <h1 class="headline">在庫管理画面</h1>

                <ul class="inner">
                    <li><a href="">ホーム</a></li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                </ul>

            </nav>

        </header>
    
        <h1>ここに、店舗詳細を表示</h1>

        <footer>
            <div id="footerCon">
            <p>&copy; Daisuke Yomo,Kazuki Watanabe. 2021.</p>
            </div>
        </footer>

    </body>

</html>