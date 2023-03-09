<?php

include 'mySQL/cnx.php';
include 'espace-admin/planques/afficherPlanqueDispo.php';
include 'espace-admin/tableAdmin/afficher.php';

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Missions - Accueil</title>
  <!-- ICON -->
  <link rel="icon" sizes="16x16" href="https://www.pngkit.com/png/full/430-4308761_about-mission-icon-site-admin-2017-03-23t15.png">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <!-- Styles -->
  <link rel="stylesheet" href="css/styles.css">
  <!-- Responsive -->
  <link rel="stylesheet" href="css/mobile.css">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navigation">
  <h1 class="navbar-brand">Les Missions</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMobile" aria-controls="navMobile" aria-expanded="false" aria-label="Navigation mobile">
    <span class="navbar-toggler-icon"><i class="bi bi-justify"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navMobile">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="nosMissions.php">Nos missions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="espace-admin/form.php">Espace admin</a>
      </li>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4 text-center">Missions</h2>
    <p class="text-center text-jumbotron">Cette application web a été réalisée dans le cadre d'une évaluation avec <a href="https://www.studi.com/fr">STUDI</a></p>
  </div>
</div>

<section class="jumbotron-LA">
    <div class="container">
        <div class="row text-center">
        <div class="date text-center">
            <?php echo "Nous sommes actuellement le ".date("j/m/Y")."." ?>
        </div>
      </div>
    </div>
</section>

<section class="title-page-alaune">
<h3 class="title-page">Nos missions à la une : </h3>
</section>

<?php foreach($displayMissions as $displayMission): ?>
<div class="card-missions">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        
        <h5 class="card-title"><?php echo $displayMission['titre'] ?></h5>

        <p class="card-text text-dark"><?php echo $displayMission['description'] ?></p>

        <p class="card-text text-dark">Lieu : <?php echo $displayMission['pays'] ?></p>

        <a href="#" class="btn btn-primary">Intéréssé !</a>
      </div>
    </div>
  </div>
</div>
</div>
<?php endforeach; ?>
<button class="btn btn-primary text-center"><a href="nosMissions.php" class="text-decoration-none text-center text-white" target="_blank">Voir + de missions</a></button>

<section class="stats">
  <div class="title-stats">
    <h4 class="text-center">Sur ce site il y'a actuellement : </h4>
    <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="https://images.assetsdelivery.com/compings_v2/sn333g/sn333g1902/sn333g190200249.jpg" alt="img-mission">
    <div class="card-body">
      <?php foreach($displayMissionsDispos as $displayMissionsDispo): ?>
      <h5 class="card-title">Missions Disponible :</h5>
      <p class="card-text text-dark text-center nb-missions"><?php echo $displayMissionsDispo['id']; ?></p>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="https://png.pngtree.com/element_our/sm/20180515/sm_5afb1035655ac.jpg" alt="img-planque">
    <div class="card-body">
      <?php foreach($displayPlanqueDispo as $displayPlanqueDispos): ?>
      <h5 class="card-title">Planques disponible : </h5>
      <p class="card-text text-center nb-planques"><?php echo $displayPlanqueDispos['id']; ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</div>
</section>

<div class="footer w-100">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item text-white"><a href="#">Accueil</a></li>
                <li class="list-inline-item text-white"><a href="#">Nos missions</a></li>
                <li class="list-inline-item text-white"><a href="espace-admin/form.php" target="_blank">Espace admin</a></li>
            </ul>
            <p class="copyright">Bonnefoy Kévin © <?php echo date('Y') ?></p>
        </footer>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>