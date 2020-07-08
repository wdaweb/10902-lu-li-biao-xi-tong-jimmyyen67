<?php
include_once "./base.php";
$sql = "SELECT * FROM autobio";
$Bs = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="d-flex j-center a-center">
    <table class="editBio">
      <tr>
        <td>標題</td>
        <td>預覽</td>
        <td>
          Display
        </td>
        <td>
          Del
        </td>
      </tr>
      <?php
      foreach ($Bs as $B) {
        $checked = ($B['sh'] == 1) ? "checked" : "";
      ?>
        <tr>
          <td><?= $B['title'] ?></td>
          <td>
            <i class="previewBio fas fa-search" onclick="showBioText(<?= $B['id'] ?>)"></i>
            <div id="showBioText<?= $B['id'] ?>" class="showBioText">
              <pre><span style="word-break: break-all;"><?= $B['text'] ?></span></pre>
              <div style="float:right;position:ralative;bottom:0%;">
                <button>更新</button>
                <button onclick="showBioText(<?= $B['id'] ?>)">關閉</button>
              </div>
          </td>
          <td> <label for="">
              <input type="radio" name="sh" onchange="showBio(<?= $B['id'] ?>)" <?= $checked ?>>
            </label></td>
          <td>
            <div class="deleteBio" onclick="deleteBio(<?= $B['id'] ?>)"><i class="fas fa-trash-alt"></i></div>
          </td>
        </tr>


      <?php
      }
      ?>
    </table>
    <div id="addB" class="addB d-flex j-center a-center f-direction-c">
      <!-- <form action="api/B_add.php" method="post" enctype="multipart/form-data" id="uploadFormBio"> -->
      <label for="titleBio">標題：</label>
      <input type="text" id="titleBio" name="titleBio" class="mt-10">
      <pre></pre><textarea type="textarea" id="textBio" name="textBio" class="mt-10" style="width:500px; height:500px;" required></textarea><br>
      <button onclick="uploadBio()">Upload</button>
      <!-- <input type="submit" value="上傳"> -->
      <!-- </form> -->
    </div>
  </div>
</body>

</html>