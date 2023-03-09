<?php session_start(); ?>
<?php include '../../mySQL/cnx.php'; ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ajouter une planque</title>
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>

<h1 class="text-center">
    <?php echo "Admin : ".$_SESSION["email"]."." ?>
</h1>

<form action="addPlanques.php" method="POST">
  <div class="form-group">
    <label>Code : (provisoire)</label>
    <input type="number" min="1" max="995" name="code">

    <label>Adresse : </label>
    <input type="text" name="adresse">

    <label>Pays : </label>
    <input type="text" name="pays">

    <label>Type : </label>
    <input type="text" name="type">

    <input type="submit" value="ajouter" name="ajouter">
  </div>
</form>

<a href="../dashboard.php" class="text-center"><button class="btn btn-primary btn-return-dashboard">Retour vers le DASHBOARD</button></a>

</body>
</html>