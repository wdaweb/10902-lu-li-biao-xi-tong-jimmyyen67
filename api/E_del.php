<?php
include_once "../backend/base.php";

$id =  $_POST['id'];


$sql = "DELETE FROM experience WHERE `id` = $id";
// echo $id;
// echo $sql;
$pdo->exec($sql);
