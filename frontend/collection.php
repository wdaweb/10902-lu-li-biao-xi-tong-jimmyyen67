  <style>
    .collectionDiv {
      height: fit-content;
      flex-flow: row wrap;
    }

    .collections {
      position: relative;
      display: grid;
      min-width: 40%;
      width: 250px;
      height: 150px;
      margin: 20px;
      border: 2px solid #111;
      border-radius: 10px;
      padding: 10px;
      box-shadow: 2px 2px 5px #57606f;
      ;
    }

    .collections img {
      position: absolute;
      top: -10%;
      right: 3%;
      height: 100px;
      width: 100px;
      border: 3px solid #a4b0be;
      z-index: 10;
      box-shadow: 5px 5px 5px #747d8c;
      transition: all .5s ease-in-out;
    }

    .collections img:hover {
      transform: scale(4);
      transition: all .5s ease-in-out;
      z-index: 10;
    }

    .collections a {
      position: absolute;
      right: 5%;
      bottom: 5%;
      padding: 3px;
      text-decoration: none;
      animation: toDemo 2s ease-in-out infinite;
    }

    @keyframes toDemo {

      from,
      to {
        right: 5%;
      }

      50% {
        right: 2%;
      }
    }

    .collections h5 {
      width: fit-content;
      padding: 4px;
      background: #009432;
      margin: 3px;
      border-radius: 10%;
      color: #ffffff;
    }

    a:active {
      text-decoration: none;
      color: #111;
    }

    a:visited {
      text-decoration: none;
      color: #111;
    }

    a:hover {
      font-weight: bold;
      text-decoration: none;
      color: #111;
    }

    a:active {
      text-decoration: none;
      color: #111;
    }
  </style>
  <?php
  include_once "../backend/base.php";
  $sql = "SELECT * FROM collection WHERE `sh`=1";
  $Ps = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <div class="collection">
    <h1 class="t-center">作品集</h1>
    <div class="collectionDiv d-flex wrap j-center a-center">
      <?php
      foreach ($Ps as $P) {
      ?>
        <div class="collections relative">
          <img src="images/<?= $P['img'] ?>" alt="">
          <h3><?= $P['title'] ?></h3>
          <a href="<?= $P['url'] ?>" target="_blank">點擊前往<i class="fas fa-forward"></i></a>
          <h5 class=""><?= $P['note1'] ?></h5>
          <h5 class=""><?= $P['note2'] ?></h5>
          <h5 class=""><?= $P['note3'] ?></h5>
        </div>
      <?php
      }
      ?>
    </div>
  </div>