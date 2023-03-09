<?php

include('../../mySQL/cnx.php');

if(isset($_POST['envoyer']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    if(!empty($nom) && !empty($prenom && !empty($email)))
    {
        $sql = "INSERT INTO `admin`(`nom`, `prenom`, `email`, `mdp`) 
                VALUES (:nom, :prenom, :email, :mdp)";
        $req = $db->prepare($sql);
        $req->bindvalue(':nom', $nom);
        $req->bindvalue(':prenom', $prenom);
        $req->bindvalue(':email', $email);
        $req->bindvalue(':mdp', $mdp);

    $addAdmin = $req->execute();

    if($addAdmin)
    {
        echo 'Admin ajouté !';
    }
    }

}
else
{
    echo 'Erreur !';
}