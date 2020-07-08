<?php
include_once "../backend/base.php";
$id = $_POST['id'];
$name = $_POST['name'];
$ename = $_POST['ename'];
$birthday = $_POST['birthday'];
$tel = $_POST['tel'];
$line = $_POST['line'];
$email = $_POST['email'];
echo $email;
if (!empty($_FILES)) {
  $file =  $_FILES['file']['name'];
  move_uploaded_file($_FILES['file']['tmp_name'], "../images/" . $_FILES['file']['name']);
} else {
  $sql = "SELECT * FROM about WHERE `id` ='1'";
  $img = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  $file = $img['img'];
}

$sql = "UPDATE about SET 
`name`='$name',
`ename`='$ename',
`birthday` ='$birthday',
`tel`='$tel',
`line`='$line',
`email`='$email',
`img` = '$file' WHERE `id`= '$id'";
echo $sql;
$pdo->exec($sql);


//圖檔管理
$sql = "SELECT count(*) FROM images WHERE `img` = '$file'";
$checkImg = $pdo->query($sql)->fetchColumn();
if ($checkImg == 0) {
  $sql = "INSERT INTO images (`img`) VALUES ('$file')";
  echo $sql;
  $pdo->exec($sql);
}
