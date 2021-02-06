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


<?php
$loginFailed = true;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if ($_GET['empid'] == $row['ID']) {
        if ($_GET['password'] == $row['password']) {
            /*ログイン失敗時の処理をさせないためにフラグを下げる*/
            $loginFailed = false;
            /*ホーム画面へ進む*/
            header('Location: StoreList.php');
        }
    }
}
if ($loginFailed) {
    header('Location: LoginAgain.php');
}


?>

