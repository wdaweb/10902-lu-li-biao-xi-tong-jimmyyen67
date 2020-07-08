<?php
include_once "../backend/base.php";
$id = $_POST['id'];
$item = $_POST['upload'];

  $sql = "INSERT INTO required (`item`,`parent`,`sh`) VALUES ('$item','$id','1')";
  $pdo->exec($sql);
