<?php session_start(); ?>
<?php include '../../mySQL/cnx.php'; ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ajouter une mission</title>
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/styles.css">
  <link rel="stylesheet" href="../../css/mobile.css">
</head>
<body>

<?php include "../navbarPageForm/navbar.php"; ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-white text-center">Ajouter une mission</h1>
    <p class="lead text-white"><?php echo "Formulaire strictement réservé à l'admin avec l'email :".$_SESSION['email']."!";  ?></p>
  </div>
</div>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="addMissions.php" method="POST">
					<span class="login100-form-title p-b-26">
						Ajouter une mission
					</span>
					<span class="login100-form-title p-b-48">
            <img src="https://www.pngkey.com/png/detail/333-3339997_mission-logo-mision-png.png" alt="Mission-logo" width="60px" heigth="60px">
					</span>

					<div class="wrap-input100 validate-input">
              <label>Titre : </label>
              <input type="text" name="title" required>
					</div>

					<div class="wrap-input100 validate-input">
						    <label>Description : </label>
                <input type="text" name="desc" required>
					</div>

          <div class="wrap-input100 validate-input">
                <label>Code provisoire : </label>
                <input type="text" name="code">
					</div>

          <div class="wrap-input100 validate-input">
                <label>Pays : </label>
                <input type="text" name="pays">
					</div>

          <div class="wrap-input100 validate-input">
						    <label>Description : </label>
                <input type="text" name="desc" required>
					</div>

          <div class="wrap-input100 validate-input">
                <label>Agent concerné : </label>
                <input type="text" name="agentConcernes">
					</div>

          <div class="wrap-input100 validate-input">
                <label>Contact concerné : </label>
                <input type="text" name="contactConcernes">
					</div>

          <div class="wrap-input100 validate-input">
              <label>Planque concernée : </label>
              <input type="text" name="planqueConcernes">
					</div>

          <div class="wrap-input100 validate-input">
               <label>Date début : </label>
               <input type="date" name="dateStart">
					</div>

          <div class="wrap-input100 validate-input">
                <label>Date fin : </label>
                <input type="date" name="dateStart">
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