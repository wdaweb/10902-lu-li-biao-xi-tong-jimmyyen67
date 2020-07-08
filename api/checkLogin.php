<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
include_once "../backend/base.php";
$acc = $_POST['acc'];
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM user where `acc`= '$acc' && `pwd`='$pwd'";
$user = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

if (empty($_SESSION) || $_SESSION['login'] == 0) {
  if ($user) {
    // echo "1"; 測試讀取帳號成功
    $_SESSION['login'] = 1;
    header("location:../index.html");
  } else {
    // echo "0"; 測試讀取帳號失敗
    header("location:../index.html");
  }
} else {
  $_SESSION['login'] = 0;
}

?>

<body>

</body>

</html>