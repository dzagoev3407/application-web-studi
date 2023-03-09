<?php

include '../../mySQL/cnx.php';

if($_POST["ajouter"])
{
    $code = $_POST["code"];
    $adresse = $_POST["adresse"];
    $pays = $_POST["pays"];
    $type = $_POST["type"];

    if(!empty($code) && !empty($adresse) && !empty($pays) && !empty($type))
    {
        if(!empty($code))
        {
            $generateNumber = rand(1, 995); // Code aléatoire allant de 1 à 995

            if($generateNumber)
            {
                echo "Le code est ".$generateNumber.".";
                echo '<br>';
                echo "ATTENTION NE LE COMMUNIQUER A PERSONNE !!!!";

                $code = $generateNumber; // On génère le VRAI code !
            }
        }

        $sql = "INSERT INTO `planque`(`code`, `adresse`, `pays`, `type`) 
                VALUES (:code, :adresse, :pays, :type)";

        $req = $db->prepare($sql);

        $req->bindvalue(':code', $code);
        $req->bindvalue(':adresse', $adresse);
        $req->bindvalue(':pays', $pays);
        $req->bindvalue(':type', $type);

        $addPlanque = $req->execute();

        if($addPlanque)
        {
            echo 'Planque ajoutée !';
        }
    }
    else
    {
        echo 'erreur !!!';
    }
}