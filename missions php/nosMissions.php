<?php

include 'mySQL/cnx.php';
include 'espace-admin/planques/afficherPlanqueDispo.php';
include 'espace-admin/tableAdmin/afficher.php';

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Missions - Les missions</title>
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
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nos missions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="espace-admin/form.php">Espace admin</a>
      </li>
</nav>

<section class="nos-missions-section">
    <h2 class="text-white">Nos missions disponibles : </h2>
    <?php foreach($displayMissionsDispos as $displayMissionsDispo): ?>
    <h3 class="text-center text-white"><?php echo "Combien ? ".$displayMissionsDispo['id']."." ?></h3>
    <?php endforeach; ?>
</section>

<div class="card-missions-detail">
<div class="d-flex justify-content-start">
<?php foreach($displayMissionContentDesc as $displayMissionContentDescs): ?>
<div class="row">
  <div class="col-sm-6" style="flex: auto">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $displayMissionContentDescs['titre'] ?></h5>
        <p class="card-text"><?php echo $displayMissionContentDescs['description'] ?></p>
        <p class="card-text"><?php echo $displayMissionContentDescs['pays'] ?></p>
        <button class="btn btn-primary" name="btn-mission"><a href="espace-admin/missions/infoContactForm.php" class="text-decoration-none text-white">Intéréssé</a></button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
</div>
</div>

<section class="footer-nosMissions">
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
</section>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>