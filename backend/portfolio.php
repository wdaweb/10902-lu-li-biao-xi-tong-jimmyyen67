<?php
include_once "./base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div id="addPSwitch">
    <button>add.</button>
    <button>edit.</button>
  </div>
  <div class="editP">

  </div>
  <div id="addP" class="addP">
    <fieldset>
      <legend>　Portfolio　</legend>
      <form action="api/addPortfolio.php" method="post" enctype="multipart/form-data" id="uploadForm">
        <label for="titleP">Title:</label>
        <input type="text" name="titleP" id="titleP"><br>
        <label for="fileP">Image:</label>
        <input type="file" name="fileP" id="fileP"><br>
        <label for="urlP">Url:</label>
        <input type="text" name="urlP" id="urlP"><br>
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
          <option value="1">HTML5</option>
          <option value="2">CSS3</option>
          <option value="3">JavaScript</option>
          <option value="4">jQuery</option>
          <option value="5">Ajax</option>
          <option value="6">PHP</option>
        </select><br>
        <label>SKill Used-3:</label>
        <select name="noteP3" id="noteP3">
          <option value="1">HTML5</option>
          <option value="2">CSS3</option>
          <option value="3">JavaScript</option>
          <option value="4">jQuery</option>
          <option value="5">Ajax</option>
          <option value="6">PHP</option>
        </select><br>
        <button onclick="addP()">上傳</button>
    </fieldset>
  </div>
  </form>
  <script src="js/back.js"></script>
</body>

</html>