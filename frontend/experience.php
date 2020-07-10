<style>
  .contentEx{
    display: flex;
    justify-content: center;

  }
  ul li{
    list-style: none;
  }
  .schoolEx,
  .workEx{
    margin: 20px;
    padding: 10px;
  }
</style>
<?php
include_once "../backend/base.php";
$sql = "SELECT * FROM experience WHERE `sh`='1' && `parent`='1'"; //學歷
$S = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$sql = "SELECT * FROM experience WHERE `sh`='1' && `parent`='2'"; //工作經歷
$W = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="experience  d-flex a-center f-direction-c">
  <h1>Experience</h1>
  <div class="contentEx">
    <div class="schoolEx">
      <h3>學歷</h3>
      <ul>
        <?php
        foreach ($S as $S) {
        ?>
          <li>學校：<?= $S['name'] ?></li>
          <li>科系：<?= $S['item'] ?></li>
          <li>就讀：<?= $S['datein'] ?></li>
          <li>畢業：<?= $S['dateout'] ?></li>
        <?php
        }
        ?>
      </ul>
    </div>
    <div class="workEx">
      <h3>工作經歷</h3>
      <ul>
        <?php
        foreach ($W as $W) {
        ?>
          <li>公司：<?= $W['name'] ?></li>
          <li>職稱：<?= $W['item'] ?></li>
          <li>就職：<?= $W['datein'] ?></li>
          <li>離職：<?= $W['dateout'] ?></li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</div>