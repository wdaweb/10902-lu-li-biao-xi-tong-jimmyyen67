<?php
include_once "./base.php";
$sql = "select * from required where `parent` = '0'";
$titles = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<div>
  <?php
  foreach ($titles as $title) {
    $parent = $title['id'];
    $sql = "select * from required where `parent` = '$parent'";
    $items = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  ?>
    <div>
      <div>
        <h4><?= $title['item'] ?></h4>
        <input type="text" id="uploadR<?= $title['id'] ?>">
        <i class="fas fa-plus" onclick="uploadR(<?= $title['id'] ?>)"></i>
      </div>
      <?php
      foreach ($items as $item) {
        $checked = ($item['sh'] == 1) ? "checked" : "";
      ?>
        <input id="updateR<?= $item['id'] ?>" type='text' value="<?= $item['item'] ?>"></input>
        <input type="checkbox" name="checkboxRequie" class="checkboxRequire" id="" <?= $checked ?> onchange="showR(<?= $item['id'] ?>)">
        <i class="fas fa-pen-square" onclick="updateR(<?= $item['id'] ?>)"></i>
        <i class="fas fa-trash" onclick="deleteR(<?= $item['id'] ?>)"></i><br>
      <?php
      }
      ?>
    </div>


  <?php
  }
  ?>
</div>




<div style="float:right; margin-right:10px;">
  <div id="addR" class="addR d-flex f-direction-c j-center a-center">
    <!-- <form action="api/B_add.php" method="post" enctype="multipart/form-data" id="uploadFormBio"> -->
    <label class="mt-30">新增條件：</label>
    <input type="text" id="titleR" class="mt-10"><br>
    <label>新增項目：</label>
    <input type="text" id="itemR1" class="mt-10"><br>
    <input type="text" id="itemR2" class="mt-10"><br>
    <input type="text" id="itemR3" class="mt-10"><br>
    <input type="text" id="itemR4" class="mt-10"><br>
    <input type="text" id="itemR5" class="mt-10"><br>
    <button onclick="addR()">Upload</button>
    <!-- <input type="submit" value="上傳"> -->
    <!-- </form> -->
  </div>
</div>