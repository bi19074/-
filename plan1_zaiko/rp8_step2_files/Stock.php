<?php
    declare(strict_types=1);

    require_once dirname(__FILE__) . '/functions3.php';
    
    try {
        $pdo = connect();
        $sql = "SELECT * FROM stockbooks";
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
        <title>在庫状況</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Stock.css">
        <link rel="stylesheet" href="allclass.css">
    </head>

    <body>

        <header>
            <nav id="gnav">

                <h1 class="headline">在庫詳細画面</h1>

                <ul class="inner">
                    <li><a href="StoreList.php">ホーム</a></li>
                    <li><a href="Stock.php">在庫一覧</a></li>
                    <li><a href="">問い合わせ</a></li>
                    <li><a href="login.html">ログアウト</a></li>
                </ul>

            </nav>

        </header>

        <?php $row = $stmt->fetch(PDO::FETCH_ASSOC) ?>

        <form class="form_search" action="" method="GET">
            <input type="txet" name="serch_key" placeholder="タイトルで検索">
            <button type="submit">検索</button>
        </form>

        <table class="stock" border="2" bordercolor="black" align="center">
            <tr>
                <th>タイトル</th>
                <th>著者</th>
                <th>販売会社</th>
                <th>ISBN</th>
                <th>在庫数</th>
            </tr>

            <tr>
                <td><?=escape($row['title'])?></td>
                <td><?=escape($row['author'])?></td>
                <td><?=escape($row['company'])?></td>
                <td><?=escape($row['ISBN'])?></td>
                <td><?=escape($row['stock'])?></td>
            </tr>
            
        </table>
    </body>
</html>