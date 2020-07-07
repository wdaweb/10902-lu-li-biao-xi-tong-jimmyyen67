<?php
include_once "../backend/base.php";

$sql = "UPDATE autobio SET `sh`='0' WHERE `sh`='1'";
echo $sql;
$pdo->exec($sql);

$id =  $_POST['id'];
echo $id;
$sql = "UPDATE autobio SET `sh`='1' WHERE `id`='$id'";
echo $sql;
$pdo->exec($sql);
