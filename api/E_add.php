<?php
include_once "../backend/base.php";
$works = $_POST['works'];
$name = $_POST['nameE'];
$item = $_POST['itemE'];
$dateIn = $_POST['dateIn'];
$dateOut = $_POST['dateOut'];

if ($works == "work") {
  $parent = 2;
} else {
  $parent = 1;
}


$sql = "INSERT INTO experience (
  `name`,
  `item`,
  `dateIn`,
  `dateOut`,
  `parent`
  ) VALUES (
  '$name',
  '$item',
  '$dateIn',
  '$dateOut',
  '$parent'
  )";
$pdo->exec($sql);

// //新增主題
// $sql = "INSERT INTO required (`item`,`parent`,`sh`) VALUES ('$title','0','1')";
// $pdo->exec($sql);

// //拉回ID
// $sql = "SELECT * FROM required WHERE `item` = '$title'";
// $item = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// $id = $item['id'];

// //項次輸入資料庫
// foreach ($items as $item) {
//   $sql = "INSERT INTO required (`item`,`parent`,`sh`) VALUES ('$item','$id','1')";
//   echo $sql;
//   $pdo->exec($sql);
// }

// // 刪除空值內容
// $sql = "DELETE FROM required WHERE `item` = ''";
// $pdo->exec($sql);
