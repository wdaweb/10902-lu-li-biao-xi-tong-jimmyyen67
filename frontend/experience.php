<?php
include_once "../backend/base.php";
$sql = "SELECT * FROM experience WHERE `sh`='1' && `parent`='1'"; //學歷
$S = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$sql = "SELECT * FROM experience WHERE `sh`='1' && `parent`='2'"; //工作
$W = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="experience  d-flex a-center f-direction-c">
  <h1>Experience</h1>
  <div>
    <h3>學歷</h3>
  </div>
  <div>
    <h3>工作經歷</h3>
  </div>
</div>