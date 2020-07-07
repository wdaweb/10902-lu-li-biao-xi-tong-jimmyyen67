<?php
include_once "../backend/base.php";

$id =  $_POST['id'];

// print_r($_POST);
// print_r($_FILES);

$sql = "DELETE FROM autobio WHERE `id` = $id";
echo $id;
echo $sql;
$pdo->exec($sql);
