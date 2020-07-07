<?php
include_once "../backend/base.php";
$sql = "SELECT * FROM autobio where `sh`=1";
$P = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
<div class="autobio">
  <h1>Autobio</h1>
  <div><?= $P['text'] ?>
  </div>
</div>