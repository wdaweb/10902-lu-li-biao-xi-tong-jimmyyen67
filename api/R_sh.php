<?php
include_once "../backend/base.php";

$id =  $_POST['id'];
$sql = "SELECT * FROM required WHERE `id` = '$id'";
$R = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
if ($R['sh'] == 1) {
  $sql = "UPDATE required SET `sh`='0' WHERE `id`='$id'";
} else {
  $sql = "UPDATE required SET `sh`='1' WHERE `id`='$id'";
}
$pdo->exec($sql);
