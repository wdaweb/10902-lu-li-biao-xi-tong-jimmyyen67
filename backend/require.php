<style>
  .back_Require {
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
  }

  .addR {
    display: flex;
    flex-flow: column wrap;
  }

  .addR input {
    padding: 5px;
    margin: 10px 5px;
  }
  .line_Require{
    height: 95%;
    width: .2rem;
    background: #333;
    border-radius: 10%;
  }
</style>
<?php
include_once "./base.php";
$sql = "select * from required where `parent` = '0'";
$titles = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="back_Require">
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
  <div class="line_Require"></div>
  <div id="addR" class="addR">
    <!-- <form action="api/B_add.php" method="post" enctype="multipart/form-data" id="uploadFormBio"> -->
    <label class="">新增條件：</label>
    <input type="text" id="titleR">
    <label>新增項目：</label>
    <input type="text" id="itemR1">
    <input type="text" id="itemR2">
    <input type="text" id="itemR3">
    <input type="text" id="itemR4">
    <input type="text" id="itemR5">
    <button onclick="addR()">Upload</button>
    <!-- <input type="submit" value="上傳"> -->
    <!-- </form> -->
  </div>

</div>