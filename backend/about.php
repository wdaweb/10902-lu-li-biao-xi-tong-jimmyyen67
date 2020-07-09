<style>
  .about ul {
    display: inline-block;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .about li {
    list-style: none;
    text-align: left;
  }

  .about input {
    padding: 5px 10px;
    margin: 5px;
    border-style: none;
  }

  .about img {
    margin-bottom: 10px;
    margin-right: 10px;
  }

  .aboutPics {
    position: absolute;
    top: 0%;
    right: 0%;
    display: flex;
    flex-flow: column wrap;
    transform: translate(-50%, 0%);
  }

  .aboutPics {
    text-align: center;
    margin: 5px;
    margin-top: 15px;
  }

  li i {
    border: 2px solid #333;
    padding: 5px;
  }
</style>
<?php
include_once "base.php";
$sql = "SELECT * FROM about";
$A = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
<div class="about">
  <ul>
    <li><img src="images/<?= $A['img'] ?>" height="200px" width="200px"><i class="updateA fas fa-user-edit fa-2x" onclick="updateA(<?= $A['id'] ?>)"></i></li>
    <li>姓名：<input type="text" id="nameA" value="<?= $A['name'] ?>"></li>
    <li>英文：<input type="text" id="enameA" value="<?= $A['ename'] ?>"></li>
    <li>生日：<input type="date" id="birthdayA" value="<?= $A['birthday'] ?>"></li>
    <li>電話：<input type="text" id="telA" value="<?= $A['tel'] ?>"></li>
    <li>Line:<input type="text" id="lineA" value="<?= $A['line'] ?>"></li>
    <li>Email<input type="text" id="emailA" value="<?= $A['email'] ?>"></li>
    <li>照片：<input type="file" id="fileA"></li>
  </ul>
  <div class="aboutPics">
    <h4 class="">照片選擇：</h4>
    <?php
    $sql = "SELECT * FROM images";
    $Imgs = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    foreach ($Imgs as $Img) {
      $borderRed = ($Img['img'] == $A['img']) ? "#c0392b" : "";
    ?>
      <img src="images/<?= $Img['img'] ?>" height="100px" width="100px" class="imgBio" style="border:5px solid <?=$borderRed?>;" onclick="A_img(<?= $Img['id'] ?>)">

    <?php
    }
    ?>
  </div>
</div>