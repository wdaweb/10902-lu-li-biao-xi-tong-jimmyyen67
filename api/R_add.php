<?php
include_once "../backend/base.php";
$title = $_POST['title'];
$items[0] = $_POST['itemR1'];
$items[1] = $_POST['itemR2'];
$items[2] = $_POST['itemR3'];
$items[3] = $_POST['itemR4'];
$items[4] = $_POST['itemR5'];

//新增主題
$sql = "INSERT INTO required (`item`,`parent`,`sh`) VALUES ('$title','0','1')";
$pdo->exec($sql);

//拉回ID
$sql = "SELECT * FROM required WHERE `item` = '$title'";
$item = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
$id = $item['id'];

//項次輸入資料庫
foreach ($items as $item) {
  $sql = "INSERT INTO required (`item`,`parent`,`sh`) VALUES ('$item','$id','1')";
  echo $sql;
  $pdo->exec($sql);
}

// 刪除空值內容
$sql = "DELETE FROM required WHERE `item` = ''";
$pdo->exec($sql);
