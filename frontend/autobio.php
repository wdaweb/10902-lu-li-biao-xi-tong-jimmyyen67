<?php
include_once "../backend/base.php";
$sql = "SELECT * FROM autobio where `sh`=1";
$B = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
<div class="autobio d-flex a-center f-direction-c">
  <h1>Autobio</h1>
  <div>
    <h3><?= $B['title'] ?></h3>
    <P><?= $B['text'] ?></P>
  </div>
</div>