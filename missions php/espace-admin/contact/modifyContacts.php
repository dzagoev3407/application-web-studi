<?php session_start(); ?>
<?php include '../../mySQL/cnx.php' ?>
<?php include '../tableAdmin/afficher.php' ?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Modifier un agent</title>
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
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Code</th>
      <th scope="col">Nationalité</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($contacts = $displayContact->fetch()){
      
      ?>
    <tr>
      <td><?php echo $contacts['nom']?></td>
      <td><?php echo $contacts['prenom']?></td>
      <td><?php echo $contacts['date_naissance']?></td>
      <td><?php echo $contacts['code']?></td>
      <td><?php echo $contacts['nationnalite']?></td>
      <td><a href="deleteContact.php?id=<?= $contacts['id'] ?>"><button class="btn btn-danger">Supprimer</button></td>
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