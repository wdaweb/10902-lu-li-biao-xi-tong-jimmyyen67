  <?php
  include_once "../backend/base.php";
  $sql = "SELECT * FROM collection";
  $Ps = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <div class="collection">
    <h1 class="t-center">Collection</h1>
    <div class="collectionDiv d-flex wrap">
      <?php
      foreach ($Ps as $P) {
      ?>
        <div class="collections relative">
          <img src="images/<?= $P['img'] ?>" alt="">
          <span><?= $P['title'] ?></span>
          <span><?= $P['url'] ?></span>
          <span><?= $P['note1'] ?></span>
          <span><?= $P['note2'] ?></span>
          <span><?= $P['note3'] ?></span>
        </div>
      <?php
      }
      ?>
    </div>
  </div>