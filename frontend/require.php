<?php
include_once "../backend/base.php";
$sql = "select * from required where `sh`=1 && `parent` = '0'";
$Rs = $pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
?>
<div class="require d-flex a-center f-direction-c">
  <h1>求職條件</h1>
  <div>
    <?php
    foreach ($Rs as $R) {
      $parent = $R['id'];
    ?>
      <div>
        <h3><?= $R['item'] ?></h3>
        <?php
        $sql = "select * from required where `parent` = $parent";
        $Is = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        foreach ($Is as $I) {
        ?>
          <span><?= $I['item'] ?></span>
        <?php
        }
        ?>
      </div>
    <?php
    }
    ?>
  </div>
</div>