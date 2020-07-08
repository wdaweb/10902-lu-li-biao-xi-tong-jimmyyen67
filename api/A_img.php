<?php
include_once "../backend/base.php";
$id = $_POST['id'];
$sql = "SELECT * FROM images WHERE `id`='$id'";
$theImg = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

$theImg = $theImg['img'];

$sql = "UPDATE about SET `img`='$theImg' WHERE `id` = '1' ";
echo $sql;
$pdo->exec($sql);
?>