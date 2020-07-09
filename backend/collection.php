<style>
  .addP form {
    margin: auto;
  }

  .uploadForm input,
  .uploadForm div {
    padding: .3rem;
    margin: .5rem;
  }
  input[type="text"],
  select{
    padding:5px;
    margin: 2px;
  }
  input[type="file"]{
    width: 11rem;
    }
</style>
<?php
include_once "./base.php";
$sql = "SELECT * FROM collection";
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
  <div id="editP" class="editP editP_Open">
    <table class="tableP">
      <tr>
        <th>Photo</th>
        <th>Title</th>
        <th>URL</th>
        <th>Note</th>
        <th>Edit</th>
      </tr>
      <?php
      foreach ($Ps as $P) {
        $checked = ($P['sh'] == 1) ? 'checked' : '';
      ?>
        <tr>
          <td>
            <img src="images/<?= $P['img'] ?>" alt="" height="70px" width="70px" style="border:3px solid #000"><br>
            <input type="file" id="fileP<?= $P['id'] ?>">
          </td>
          <td><input type="text" value="<?= $P['title'] ?>" name="titleP" id="titleP<?= $P['id'] ?>"></td>
          <td><input type="text" value="<?= $P['url'] ?>" name="urlP" id="urlP<?= $P['id'] ?>"></td>
          <td>
            <select name="noteP1" id="noteP1<?= $P['id'] ?>">
              <option value="<?= $P['note1'] ?>"><?= $P['note1'] ?></option>
              <option value="HTML5">HTML5</option>
              <option value="CSS3">CSS3</option>
              <option value="JavaScript">JavaScript</option>
              <option value="jQuery">jQuery</option>
              <option value="Ajax">Ajax</option>
              <option value="PHP">PHP</option>
            </select><br>
            <select name="noteP2" id="noteP2<?= $P['id'] ?>">
              <option value="<?= $P['note2'] ?>"><?= $P['note2'] ?></option>
              <option value="0">None</option>
              <option value="HTML5">HTML5</option>
              <option value="CSS3">CSS3</option>
              <option value="JavaScript">JavaScript</option>
              <option value="jQuery">jQuery</option>
              <option value="Ajax">Ajax</option>
              <option value="PHP">PHP</option>
            </select><br>
            <select name="noteP3" id="noteP3<?= $P['id'] ?>">
              <option value="<?= $P['note3'] ?>"><?= $P['note3'] ?></option>
              <option value="0">None</option>
              <option value="HTML5">HTML5</option>
              <option value="CSS3">CSS3</option>
              <option value="JavaScript">JavaScript</option>
              <option value="jQuery">jQuery</option>
              <option value="Ajax">Ajax</option>
              <option value="PHP">PHP</option>
            </select><br>
          </td>
          <td>
            <input id="shCheck<?= $P['id'] ?>" type="checkbox" name="sh[]" onclick="showC(<?= $P['id'] ?>)" <?= $checked ?>>
            <i class="far fa-save editC" onclick="updateC(<?= $P['id'] ?>)"></i>
            <div id="deleteP<?= $P['id'] ?>" class="deleteP" onclick="deleteC(<?= $P['id'] ?>)"><i class="fas fa-trash-alt"></i></div>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>

  </div>
  <div id="addP" class="addP d-flex">
    <form action="api/C_add.php" method="post" enctype="multipart/form-data" id="uploadForm" class="uploadForm">
      <label for="titleP">Title:</label>
      <input type="text" name="titleP" required><br>
      <label for="fileP">Image:</label>
      <input type="file" name="fileP" required><br>
      <label for="urlP">Url:</label>
      <input type="text" name="urlP" required><br>
      <div>
      <label>SKill Used-1:</label>
        <select name="noteP1">
          <option value="HTML5">HTML5</option>
          <option value="CSS3">CSS3</option>
          <option value="JavaScript">JavaScript</option>
          <option value="jQuery">jQuery</option>
          <option value="Ajax">Ajax</option>
          <option value="PHP">PHP</option>
        </select>
      </div>
      <div>
        <label>SKill Used-2:</label>
        <select name="noteP2">
          <option value="0">None</option>
          <option value="HTML5">HTML5</option>
          <option value="CSS3">CSS3</option>
          <option value="JavaScript">JavaScript</option>
          <option value="jQuery">jQuery</option>
          <option value="Ajax">Ajax</option>
          <option value="PHP">PHP</option>
        </select>
      </div>
      <div>
        <label>SKill Used-3:</label>
        <select name="noteP3">
          <option value="0">None</option>
          <option value="HTML5">HTML5</option>
          <option value="CSS3">CSS3</option>
          <option value="JavaScript">JavaScript</option>
          <option value="jQuery">jQuery</option>
          <option value="Ajax">Ajax</option>
          <option value="PHP">PHP</option>
        </select>
      </div>
      <input type="submit" value="上傳">
    </form>
  </div>
  <div id="cSwitch" class="cSwitch" onclick="cSwitch()"><i class="fas fa-edit fa-3x"></i></div>
  <script src="js/back.js"></script>
</body>

</html>