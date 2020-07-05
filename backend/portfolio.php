<?php
include_once "./base.php";
$sql = "SELECT * FROM portfolio";
$Ps = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="editP">
    <table>
      <tr>
        <td>Photo</td>
        <td>Title</td>
        <td>URL</td>
        <td>Note</td>
        <td>Display</td>
        <td>Delete</td>
      </tr>
      <?php
      foreach ($Ps as $P) {
        $checked = ($P['sh'] == 1) ? 'checked' : '';
      ?>
        <tr>
          <td><img src="images/<?= $P['img'] ?>" alt="" height="50px" width="50px" style="border:3px solid #000"></td>
          <td><?= $P['title'] ?></td>
          <td><?= $P['url'] ?></td>
          <td><?= $P['note1'] ?><br><?= $P['note2'] ?><br><?= $P['note3'] ?></td>
          <td><input type="checkbox" name="sh[]" value="<?$P['id']?>" <?= $checked ?>></td>
          <td><input type="checkbox" name="del[]"></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
  <div id="addP" class="addP d-flex j-center a-center">
    <form action="api/addPortfolio.php" method="post" enctype="multipart/form-data" id="uploadForm">
      <label for="titleP">Title:</label>
      <input type="text" name="titleP" id="titleP" required><br>
      <label for="fileP">Image:</label>
      <input type="file" name="fileP" id="fileP" required><br>
      <label for="urlP">Url:</label>
      <input type="text" name="urlP" id="urlP" required><br>
      <label>SKill Used-1:</label>
      <select name="noteP1" id="noteP1">
        <option value="1">HTML5</option>
        <option value="2">CSS3</option>
        <option value="3">JavaScript</option>
        <option value="4">jQuery</option>
        <option value="5">Ajax</option>
        <option value="6">PHP</option>
      </select><br>
      <label>SKill Used-2:</label>
      <select name="noteP2" id="noteP2">
        <option value="0">None</option>
        <option value="1">HTML5</option>
        <option value="2">CSS3</option>
        <option value="3">JavaScript</option>
        <option value="4">jQuery</option>
        <option value="5">Ajax</option>
        <option value="6">PHP</option>
      </select><br>
      <label>SKill Used-3:</label>
      <select name="noteP3" id="noteP3">
        <option value="0">None</option>
        <option value="1">HTML5</option>
        <option value="2">CSS3</option>
        <option value="3">JavaScript</option>
        <option value="4">jQuery</option>
        <option value="5">Ajax</option>
        <option value="6">PHP</option>
      </select><br>
      <input type="submit" value="上傳">
    </form>
  </div>
  <script src="js/back.js"></script>
</body>

</html>