<style>
  .back_Experience {
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  li {
    list-style: none;
    padding: 5px;
    margin: 10px;
  }

  .line_Experience {
    height: 95%;
    width: 3px;
    background-color: #333;
    margin-left: 2%;
    margin-right: 5%;
  }
</style>
<?php
include_once "base.php";
?>
<div class="back_Experience">
  <div>
    <h4>學歷</h4>
    <?php
    $sql = "SELECT * FROM experience WHERE `parent` = '1'";
    $Es = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    foreach ($Es as $E) {
      $checked = ($E['sh'] == 1) ? "checked" : "";
    ?>
      <ul>
        <li>
          <input type="text" id="editNameE" value="<?= $E['name'] ?>"><input type="checkbox" onchange="displayE(<?= $E['id'] ?>)" <?= $checked ?>>
          <i class="editC far fa-edit" onclick="updateE(<?= $E['id'] ?>)"></i>
          <i class="deleteC far fa-trash-alt" onclick="deleteE(<?= $E['id'] ?>)"></i>
        <li>
          <input type="text" id="editItemE" value="<?= $E['item'] ?>">
        <li>
          <input type="date" id="editDateIn" value="<?= $E['datein'] ?>">
        <li>
          <input type="date" id="editDateOut" value="<?= $E['dateout'] ?>">
      </ul>
    <?php
    }
    ?>
  </div>
  <div>
    <h4>工作經歷</h4>
    <?php
    $sql = "SELECT * FROM experience WHERE `parent` = '2'";
    $Es = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    foreach ($Es as $E) {
      $checked = ($E['sh'] == 1) ? "checked" : "";
    ?>
      <ul>
        <li>
          <input type="text" id="editNameE" value="<?= $E['name'] ?>"><input type="checkbox" onchange="displayE(<?= $E['id'] ?>)" <?= $checked ?>>
          <i class="editC far fa-edit" onclick="updateE(<?= $E['id'] ?>)"></i>
          <i class="deleteC far fa-trash-alt" onclick="deleteE(<?= $E['id'] ?>)"></i>
        <li>
          <input type="text" id="editItemE" value="<?= $E['item'] ?>">
        <li>
          <input type="date" id="editDateIn" value="<?= $E['datein'] ?>">
        <li>
          <input type="date" id="editDateOut" value="<?= $E['dateout'] ?>">
      </ul>
    <?php
    }
    ?>
  </div>
  <div class="line_Experience"></div>
  <div>
    <h4>個人學經歷</h4>
    <ul>
      <li><select name="works" id="works">
          <option value="work">工作經歷</option>
          <option value="school">學歷</option>
        </select></li>
      <li><input type="text" id="nameE" placeholder="學校/公司名稱"></li>
      <li><input type="text" id="itemE" placeholder="科系/職稱"></li>
      <li><input type="date" id="dateIn"></li>
      <li><input type="date" id="dateOut"></li>
      <li><i class="fas fa-folder-plus fa-2x" onclick="addE()"></i></li>
    </ul>
  </div>
</div>