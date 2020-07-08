<?php
include_once "base.php";
$sql = "SELECT * FROM about";
$A = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
<ul>
  <li><input type="text" id="nameA" value="<?= $A['name'] ?>"></li>
  <li><input type="text" id="enameA" value="<?= $A['ename'] ?>"></li>
  <li><input type="date" id="birthdayA" value="<?= $A['birthday'] ?>"></li>
  <li><input type="text" id="telA" value="<?= $A['tel'] ?>"></li>
  <li><input type="text" id="lineA" value="<?= $A['line'] ?>"></li>
  <li><input type="text" id="emailA" value="<?= $A['email'] ?>"></li>
  <li><img src="images/<?= $A['img'] ?>" height="100px" width="100px"><i class="updateA fas fa-user-edit fa-2x" onclick="updateA(<?= $A['id'] ?>)"></i></li>
  <li><input type="file" id="fileA"></li>
  <li>
<?php
$sql = "SELECT * FROM images";
$Imgs = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
foreach($Imgs as $Img){
?>
<img src="images/<?=$Img['img']?>" height="100px" width="100px" class="imgBio" onclick="A_img(<?=$Img['id']?>)">

<?php
}
?>
  </li>
</ul>