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
  <style>
    .back_Autobio {
      height: 100%;
      width: 100%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }

    input {
      padding: 5px;
    }

    textarea {
      padding: 10px;
      appearance: none;
    }

    th {
      padding: 10px;
    }

    td {
      padding: 10px;
      text-align: center;
    }

    .showBioText {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      height: 500px;
      text-overflow: auto;
      word-wrap: break-word;
    }

    .showBioText button {
      padding: 10px 20px;
      font-size: large;
    }

    .bioTextBackground {
      display: none;
      position: fixed;
      height: 100vh;
      width: 100vw;
      top: 0;
      left: 0;
      background: #44444477;
    }

    .addB button {
      margin-left: auto;
    }
  </style>
</head>

<body>
  <div class="back_Autobio">
    <table class="editBio">
      <tr>
        <th>標題</th>
        <th>預覽</th>
        <th>
          Display
        </th>
        <th>
          Del
        </th>
      </tr>
      <?php
      foreach ($Bs as $B) {
        $checked = ($B['sh'] == 1) ? "checked" : "";
      ?>
        <tr>
          <td><?= $B['title'] ?></td>
          <td>
            <i class="previewBio fas fa-search" onclick="showBioText(<?= $B['id'] ?>)"></i>

          </td>
          <td> <label for="">
              <input type="radio" name="sh" onchange="showBio(<?= $B['id'] ?>)" <?= $checked ?>>
            </label></td>
          <td>
            <div class="deleteBio" onclick="deleteBio(<?= $B['id'] ?>)"><i class="fas fa-trash-alt"></i></div>
          </td>
        </tr>
        <div id="bioTextBackground<?= $B['id'] ?>" class="bioTextBackground" onclick="showBioText(<?= $B['id'] ?>)"></div>
        <div id="showBioText<?= $B['id'] ?>" class="showBioText">
          <textarea type="textarea" id="updateBio<?= $B['id'] ?>" name="textBio" class="mt-10" style="width:100%; height:100%;" required><?= $B['text'] ?></textarea>
          <div style="float:right;position:ralative;bottom:0%;">
            <button onclick="updateBio(<?= $B['id'] ?>)">更新</button>
            <button onclick="showBioText(<?= $B['id'] ?>)">關閉</button>
          </div>
        </div>

      <?php
      }
      ?>
    </table>
    <div id="addB" class="addB d-flex j-center a-center f-direction-c">
      <!-- <form action="api/B_add.php" method="post" enctype="multipart/form-data" id="uploadFormBio"> -->
      <label for="titleBio">標題：</label>
      <input type="text" id="titleBio" name="titleBio" class="mt-10">
      <pre>
        <textarea type="textarea" id="textBio" name="textBio" class="mt-10" style="width:500px; height:500px;" required></textarea>
      </pre>
      <button onclick="uploadBio()">Upload</button>
      <!-- <input type="submit" value="上傳"> -->
      <!-- </form> -->
    </div>
  </div>
</body>

</html>