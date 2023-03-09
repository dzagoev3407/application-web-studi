<?php

include '../../mySQL/cnx.php';


$sql = "DELETE FROM contactMissions 
        WHERE id=:id LIMIT 1";

$req = $db->prepare($sql);

$req->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

if($req)
{
    $req->execute();
    echo '<center>La cible avec l\'id  : '.$_GET['id'].' a bien été suprimé !</center>';
}
else
{
    echo 'Erreur !';
}

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Cible numéro : <?php $_GET['id'] ?> supprimée</title>
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <a href="modifyContacts.php"><button class="btn btn-primary">Retour au dashboard</button></a>
</body>
</html>