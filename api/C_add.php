<?php
include_once "../backend/base.php";

$title =  $_POST['titleP'];
$url =  $_POST['urlP'];
$note1 =  $_POST['noteP1'];
$note2 =  $_POST['noteP2'];
$note3 =  $_POST['noteP3'];
$filename =  $_FILES['fileP']['name'];

// print_r($_POST);
// print_r($_FILES);

move_uploaded_file($_FILES['fileP']['tmp_name'], "../images/" . $_FILES['fileP']['name']);

$sql = "INSERT INTO collection (
  `title`,
  `img`,
  `note1`,
  `note2`,
  `note3`,
  `url`,
  `sh`,
  `del`
) VALUES (
  '$title',
  '$filename',
  '$note1',
  '$note2',
  '$note3',
  '$url',
  '1',
  '0'
)";
$pdo->exec($sql);
