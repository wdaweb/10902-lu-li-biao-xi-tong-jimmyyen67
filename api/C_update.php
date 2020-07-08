<?php
include_once "../backend/base.php";
$id = $_POST['id'];
$title =  $_POST['title'];
$url =  $_POST['url'];
$note1 =  $_POST['note1'];
$note2 =  $_POST['note2'];
$note3 =  $_POST['note3'];
if (!empty($_FILES)) {
  $filename = $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'], "../images/" . $_FILES['image']['name']);
} else {
  $sql = "select * from collection where `id` = '$id'";
  $collection = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  $filename = $collection['img'];
}
$sql = "UPDATE collection SET `img`='$filename',`title`='$title',`url`='$url',`note1`='$note1',`note2`='$note2',`note3`='$note3' WHERE `id`= '$id'";
$pdo->exec($sql);
