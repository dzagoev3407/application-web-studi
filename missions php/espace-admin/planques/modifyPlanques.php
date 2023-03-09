<?php session_start(); ?>
<?php include '../../mySQL/cnx.php' ?>
<?php include 'afficherPlanqueDispo.php' ?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Modifier une planque</title>
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>

<nav class="navbar navbar-brand bg-dark">
    <h1 class="text-center text-white">
        Modifier une planque
    </h1>
</nav>

<h2 class="text-center">
    <?php echo "Admin : ".$_SESSION['email'].'.' ?>
</h2>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Adresse</th>
      <th scope="col">Pays</th>
      <th scope="col">Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($planque = $displayAll->fetch()){
      
      ?>
    <tr>
      <td><?php echo $planque['code']?></td>
      <td><?php echo $planque['adresse']?></td>
      <td><?php echo $planque['pays']?></td>
      <td><?php echo $planque['type']?></td>
      <td><a href="deletePlanque.php?id=<?= $planque['code'] ?>"><button class="btn btn-danger">Supprimer</button></td>
    </tr>

    <?php

    }
    ?>
  </tbody>
</table>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col" class="text-center">Ajouter une planque</th>
    </tr>
  </thead>
    <td class="text-center"><a href="formAdd.php"><button class="btn btn-success">Ajouter</button></a></td>
  </table>

<div class="text-center">
  <a href="../dashboard.php"><button class="btn btn-primary">Retour au DASHBOARD</button></a>
</div>

</body>
</html>