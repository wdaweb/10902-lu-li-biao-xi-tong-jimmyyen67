<?php
include_once "../backend/base.php";
$id=$_POST['id'];
$name = $_POST['nameE'];
$item = $_POST['itemE'];
$dateIn = $_POST['dateIn'];
$dateOut = $_POST['dateOut'];


$sql = "UPDATE experience SET `name`='$name',`item`='$item',`datein` ='$dateIn',`dateout`='$dateOut' WHERE `id`= '$id'";
$pdo->exec($sql);
