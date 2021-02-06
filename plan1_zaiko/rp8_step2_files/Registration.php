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
<meta charset="UTF-8" />
<title>データの登録</title>
</head>
<body>
<form class="form" method="POST" action="RegistrationProsess.php">
<div>
  <label for="id">ID：</label><br />
  <input id="id" type="text" name="id" size="20" maxlength="50" />
</div><div>
  <label for="store">店舗：</label><br />
  <input id="store" type="text" name="store" size="20" maxlength="50" />
</div><div>
  <label for="password">パスワード：</label><br />
  <input id="password" type="text" name="password" size="25" maxlength="50" />
</div><div>
  <label for="staff_name">名前：</label><br />
  <input id="staff_name" type="text" name="staff_name" size="25" maxlength="50" />
</div><div>
  <label for="phone">連絡先：</label><br />
  <input id="phone" type="text" name="phone" size="20" maxlength="50" />
</div><div>
  <label for="sex">性別：</label><br />
  <input id="sex" type="text" name="sex" size="20" maxlength="50" />
</div><div>
  <input type="submit" value="登録" />
</div>
<?php
session_start();
$token = sha1(uniqid(mt_rand(), true));
$_SESSION['token'] = $token;
?>
<input type="hidden" name="token" value="<?php print $token; ?>" />
</form>
</body>
</html>
