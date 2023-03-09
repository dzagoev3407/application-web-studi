<?php

include '../../mySQL/cnx.php';


if(isset($_POST['ajouter']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $nationalite = $_POST['nationalite'];
    $codeCible = $_POST['codeCible'];
    $dateNaissance = $_POST['dateNaissance'];

    if(!empty($nom) && !empty($prenom) && !empty($nationalite))
    {
       $sql = "INSERT INTO `cibles`(`nom`, `prenom`, `date_naissance`, `code`, `nationnalite`) 
               VALUES (:nom, :prenom, :dateNaissance, :codeCible, :nationalite)";

       $req = $db->prepare($sql);

       $req->bindvalue(':nom', $nom);
       $req->bindvalue(':prenom', $prenom);
       $req->bindvalue(':nationalite', $nationalite);
       $req->bindvalue(':codeCible', $codeCible);
       $req->bindvalue(':dateNaissance', $dateNaissance);

       if($req)
       {
            $req->execute();
            echo 'Cible ajouté !';
       }
       else
       {
            echo 'Cible non ajouté !';
       }
    }
}