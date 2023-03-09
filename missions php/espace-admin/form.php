<?php

require "../mySQL/cnx.php";

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Espace Admin - Accueil</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
  <!-- Styles -->
  <link rel="stylesheet" href="../css/styles.css">
  <!-- Responsive -->
  <link rel="stylesheet" href="../css/mobile.css">
  <link rel="stylesheet" href="../css/formResponsive.css">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>

<nav class="navbar navbar-brand bg-light nav-page-form w-100">
  <h1>Les Missions</h1>
    <a href="../index.php" class="text-decoration-none">Retour à l'accueil</a>
</nav>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                <i class="bi bi-person-circle icon-form"></i>
                  <h4 class="mt-1 mb-5 pb-1">Espace Administrateur</h4>
                </div>

                <form action="traitement.php" method="POST">
                  <p class="text-danger">Connexion à l'espace admin</p>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="for52Example11">Nom</label>
                    <input type="text" id="form5Example11" class="form-control form-value" name="nom" placeholder="nom" required>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Prénom</label>
                    <input type="text" id="form2Example11" class="form-control form-value" name="prenom" placeholder="prenom" required>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form6Example11">Email</label>
                    <input type="email" id="form6Example11" class="form-control form-value" name="email" placeholder="exemple@outlook.fr" required>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form8Example22">Mot de passe</label>
                    <input type="password" id="form8Example22" name="mdp" class="form-control form-value" required>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="connect">Se connecter</button>
                  </div>
                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Espace Administrateur</h4>
                <p class="small mb-0">
                  Ceci est un formulaire de connexion dédié au administrateur du site pour permettre d'accéder à leur <strong>DASHBOARD.</strong>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->
<div class="footer w-100">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item text-white"><a href="#">Accueil</a></li>
                <li class="list-inline-item text-white"><a href="#">Nos missions</a></li>
                <li class="list-inline-item text-white"><a href="#">Espace admin</a></li>
            </ul>
            <p class="copyright">Company Name © <?php echo date('Y') ?></p>
        </footer>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>