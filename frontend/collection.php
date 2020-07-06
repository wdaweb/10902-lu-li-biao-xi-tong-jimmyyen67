  <?php
  include_once "../backend/base.php";
  $sql = "SELECT * FROM collection";
  $Ps = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <div class="collection">
      <h1 class="t-center">Collection</h1>
  </div>