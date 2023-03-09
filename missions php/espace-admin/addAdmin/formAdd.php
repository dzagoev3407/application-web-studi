<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ajouter un administrateur</title>
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
</head>
<body>
  <form action="addAdmin.php" method="POST">
    <label for="nom">Nom</label>
    <input type="text" name="nom" required>

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" required>

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="mdp">Mot de passe</label>
    <input type="password" name="mdp" required>

    <input type="submit" name="envoyer" value="envoyer">
</form>
</body>
</html>