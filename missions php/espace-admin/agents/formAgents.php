<?php session_start(); ?>
<?php include '../../mySQL/cnx.php'; ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ajouter un agent</title>
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/styles.css">
  <link rel="stylesheet" href="../../css/mobile.css">
</head>
<body>

<?php include "../navbarPageForm/navbar.php"; ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-white text-center">Ajouter un agent</h1>
    <p class="lead text-white"><?php echo "Formulaire strictement réservé à l'admin avec l'email :".$_SESSION['email']."!";  ?></p>
  </div>
</div>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="addAgents.php" method="POST">
					<span class="login100-form-title p-b-26">
						Ajouter un agent
					</span>
					<span class="login100-form-title p-b-48">
            <img src="https://cdn-icons-png.flaticon.com/512/2645/2645835.png" alt="Mission-logo" width="60px" heigth="60px">
					</span>

					<div class="wrap-input100 validate-input">
              <label>Nom : </label>
              <input type="text" name="nom" required>
					</div>

					<div class="wrap-input100 validate-input">
						<label>Prénom : </label>
                <input type="text" name="prenom" required>
					</div>

          <div class="wrap-input100 validate-input">
                <label>Nationalité : </label>
                <input type="text" name="nationalite" required>
		  </div>

          <div class="wrap-input100 validate-input">
                <label>Code de l'agent : </label>
                <input type="text" name="codeAgent" required>
		  </div>

          <div class="wrap-input100 validate-input">
                <label>Date de naissance : </label>
                <input type="date" name="dateNaissance" required>
		  </div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							  <input type="submit" value="ajouter" name="ajouter">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<a href="../dashboard.php" class="text-center"><button class="btn btn-primary btn-return-dashboard">Retour vers le DASHBOARD</button></a>

</body>
</html>