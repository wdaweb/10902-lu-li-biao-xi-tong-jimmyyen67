<?php
include_once "../backend/base.php";
$sql = "SELECT * FROM about";
$A = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
$img = $A['img'];
?>
<div class="about d-flex j-center a-center f-direction-c">
  <div id="infoPic" class="infoPic" style="background-image: url('images/<?= $img ?>');"></div>
  <h1 id="nameh1" class="tcent">Hi, i'm <span id="name" class="name"><?= $A['ename'] ?></span>!</h1>
  <h3 class="tcent">Web Designer & Developer</h3>
  <h5 class="mb-10 t-right">Frontend / Backend</h5>
  <h4 class="t-cent">Contact Information</h4>
  <div>
    <p>Tel：<?= $A['tel'] ?></p>
    <p>Email：<?= $A['email'] ?></p>
    <p>Line：<?= $A['line'] ?></p>
  </div>
</div>