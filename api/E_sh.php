<?php
include_once "../backend/base.php";

$id =  $_POST['id'];
$sql = "SELECT * FROM experience WHERE `id` = '$id'";
$E = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
if ($E['sh'] == 1) {
  $sql = "UPDATE experience SET `sh`='0' WHERE `id`='$id'";
} else {
  $sql = "UPDATE experience SET `sh`='1' WHERE `id`='$id'";
}
$pdo->exec($sql);
