<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=myresume";
$pdo = new PDO($dsn, "root", "");
date_default_timezone_set("Asia/Taipei");
session_start();
?>