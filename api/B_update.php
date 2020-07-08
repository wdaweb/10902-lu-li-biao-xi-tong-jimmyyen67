<?php
include_once "../backend/base.php";
echo $id = $_POST['id'];
echo $text =  $_POST['text'];


$sql = "UPDATE autobio SET `text`='$text' WHERE `id`= '$id'";
$pdo->exec($sql);
