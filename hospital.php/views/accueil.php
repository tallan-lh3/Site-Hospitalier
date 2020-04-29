<?php
setlocale(LC_TIME, "fr_FR.utf8");
$url = "https://www.santemagazine.fr/feeds/rss/sante"; /* flux rss a changer si besoin */
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
    $datetime = date_timestamp_get(date_create($item->pubDate));
    $date = strftime('%d %B %Y, %Hh%I', $datetime);
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
  <!-- MON CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Hospital</title>
</head>

<body class="img-fluid">

  <!-- -----------------NAVBAR------------------- -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand logo" href="../index.php"><i class="fas fa-hospital fa-2x logo"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link text-navbar" href="../index.php">Accueil</a>
      </li>
        <li class="nav-item">
          <a class="nav-link text-navbar"  href="views/liste-patient.php">Liste des patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-navbar" href="views/liste-rdv.php">Liste des rendez-vous</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- -------------------Fin NAVBAR----------------------->

  <div class="container actu-card-size">
  <p class="text-center h1 m-2">Actus santé en direct</p>
            <div class="row justify-content-center ">
              
                <?php
                foreach ($rss->channel->item as $item) {
                    $datetime = date_timestamp_get(date_create($item->pubDate));
                    $date = strftime('%d %B %Y à %Hh%I', $datetime);
                    $description = explode('<', $item->description);
                    ?>
                    <div class="card col-sm-8 col-lg-3 col-md-3 m-2 main-bg-color">
                        <div class="row justify-content-center">
                                <img src="<?= (string) $item->enclosure['url'][0] ?>" class="img-fluid p-1 main-bg-color" alt="Photo flux Sofoot">
                            <div class=" col-12 col-lg-8">
                                <div class="card-block">
                                    <h1 class="card-title h6"><?= $item->title ?></h1>
                                    <p class="card-text"><?= $description[0] ?></p>
                                    <small class="card-text"><?= $date ?></small>
                                    <a href="<?= $item->link ?>" class="badge badge-info">Aller vers l'article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <!-- JQuery UI -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
  <!-- Mon JS -->
  <script src="../assets/js/script.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
  </script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js">
  </script>
</body>

</html>
