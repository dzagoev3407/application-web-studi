<?php

include '../../mySQL/cnx.php';


if(isset($_POST['ajouter']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $nationalite = $_POST['nationalite'];
    $codeAgent = $_POST['codeAgent'];
    $dateNaissance = $_POST['dateNaissance'];

    if(!empty($nom) && !empty($prenom) && !empty($nationalite))
    {
       $sql = "INSERT INTO `agents`( `nom`, `prenom`, `date_naissance`, `code`, `nationnalite`) 
               VALUES (:nom, :prenom, :dateNaissance, :codeAgent, :nationalite)";

       $req = $db->prepare($sql);

       $req->bindvalue(':nom', $nom);
       $req->bindvalue(':prenom', $prenom);
       $req->bindvalue(':nationalite', $nationalite);
       $req->bindvalue(':codeAgent', $codeAgent);
       $req->bindvalue(':dateNaissance', $dateNaissance);

       if($req)
       {
            $req->execute();
            echo 'Agent ajouté !';
       }
       else
       {
            echo 'Contact non ajouté !';
       }
    }
}