<?php
include_once "../backend/base.php";
print_r($_POST);
$title =  $_POST['title'];
$text =  $_POST['text'];
$sh = 0;

$sql = "INSERT INTO autobio (`title`,`text`,`sh`) VALUES ('$title','$text','$sh')";
echo $sql;
$pdo->exec($sql);