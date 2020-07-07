<?php
include_once "../backend/base.php";

$id =  $_POST['id'];
$sql = "SELECT * FROM collection WHERE `id` = '$id'";
$S = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
if ($S['sh'] == 1) {
  $sql = "UPDATE collection SET `sh`='0' WHERE `id`='$id'";
} else {
  $sql = "UPDATE collection SET `sh`='1' WHERE `id`='$id'";
}
$pdo->exec($sql);
?>