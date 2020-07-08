<?php
include_once "../backend/base.php";

$id =  $_POST['id'];


$sql = "DELETE FROM required WHERE `id` = $id";
echo $id;
echo $sql;
$pdo->exec($sql);
