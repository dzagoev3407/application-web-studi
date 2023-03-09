<?php
session_start();
include '../../mySQL/cnx.php';
include 'afficherPlanqueDispo.php';

$req = $db->prepare("DELETE FROM agents 
        WHERE id=:id LIMIT 1");

$req->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

if($req)
{
    $req->execute();
    echo "L'agent avec l'id : ".$_GET['id']." a bien été supprimée !";
}
else
{
    echo "Agent non supprimée";
}

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Agent numéro : <?php $_GET['id'] ?> supprimée</title>
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <a href="modifyAgents.php"><button class="btn btn-primary">Retour</button></a>
</body>
</html>