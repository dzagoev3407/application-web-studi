<?php

include '../../mySQL/cnx.php';


if(isset($_POST['ajouter']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $nationalite = $_POST['nationalite'];
    $codeContact = $_POST['codeContact'];
    $dateNaissance = $_POST['dateNaissance'];

    if(!empty($nom) && !empty($prenom) && !empty($nationalite))
    {
       $sql = "INSERT INTO `contactMissions`(nom, prenom, nationnalite, date_naissance, code) 
               VALUES (:nom, :prenom, :nationalite, :dateNaissance, :codeContact)";

       $req = $db->prepare($sql);

       $req->bindvalue(':nom', $nom);
       $req->bindvalue(':prenom', $prenom);
       $req->bindvalue(':nationalite', $nationalite);
       $req->bindvalue(':codeContact', $codeContact);
       $req->bindvalue(':dateNaissance', $dateNaissance);

       if($req)
       {
            $req->execute();
            echo 'Contact ajouté !';
       }
       else
       {
            echo 'Contact non ajouté !';
       }
    }
}