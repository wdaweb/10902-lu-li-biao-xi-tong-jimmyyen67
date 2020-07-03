<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=myresume";
$pdo = new PDO($dsn, "root", "");
date_default_timezone_set("Asia/Taipei");
SESSION_START();
$acc = $_POST['acc'];
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM user where `acc`= '$acc' && `pwd`='$pwd'";
$user = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

if ($user) {
  // echo "1"; 測試讀取帳號成功
  $_SESSION['login'] = 1;
  echo $_SESSION['login'];
  header("location:../index.html");
} else {
  // echo "0"; 測試讀取帳號失敗
}
?>

<body>

</body>

</html>