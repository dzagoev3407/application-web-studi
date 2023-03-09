<?php
session_start();
include '../../mySQL/cnx.php';
include 'afficherPlanqueDispo.php';

$req = $db->prepare("DELETE FROM planque 
        WHERE code=:code LIMIT 1");

$req->bindValue(':code', $_GET['id'], PDO::PARAM_INT);

if($req)
{
    $req->execute();
    echo "La planque avec le code : ".$_GET['id']." a bien été supprimée !";
}
else
{
    echo "Planque non supprimée";
}

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Planque numéro : <?php $_GET['id'] ?> supprimée</title>
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <a href="modifyPlanques.php"><button class="btn btn-primary">Retour</button></a>
</body>
</html>