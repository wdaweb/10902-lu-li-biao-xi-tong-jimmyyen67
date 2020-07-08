<?php
include_once "../backend/base.php";
echo $id = $_POST['id'];
echo $item =  $_POST['updateR'];


$sql = "UPDATE required SET `item`='$item' WHERE `id`= '$id'";
$pdo->exec($sql);
