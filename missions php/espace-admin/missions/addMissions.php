<?php

include '../../mySQL/cnx.php';

if(isset($_POST['ajouter']))
{
    $titre = $_POST['title'];
    $description = $_POST['desc'];
    $code = $_POST['code'];
    $pays = $_POST['pays'];
    $agentConcernes = $_POST['agentConcernes'];
    $contactConcernes = $_POST['contactConcernes'];
    $planqueConcernes = $_POST['planqueConcernes'];



    if(!empty($titre) && !empty($description && !empty($code) && !empty($pays) && !empty($agentConcernes) && !empty($contactConcernes) && !empty($planqueConcernes)))
    {
        $sql = "INSERT INTO `missions`(`titre`, `description`, `code`, `pays`, `agents_concernes`, `contact_concernes`, `planque_concernes`) 
                VALUES (:titre, :describe, :code, :pays, :agent, :contact, :planque)";

        if($code)
        {
            $min = 0;
            $max = 10;

            $codes = ['xv1386ky', '460gb5sp', 'q051uon5', 'w5qw9m65', 'zbr803i2', 'cw95c7s8', 'zt2636de', '1zm89yr9', '2n24kkb0', 'c8x09r3r'];

            $generate = rand($min, $max);

            $code = $codes[$generate];

        }
        
        $req = $db->prepare($sql);
        $req->bindvalue(':titre', $titre);
        $req->bindvalue(':describe', $description);
        $req->bindvalue(':code', $code);
        $req->bindvalue(':pays', $pays);
        $req->bindvalue(':agent', $agentConcernes);
        $req->bindvalue(':contact', $contactConcernes);
        $req->bindvalue(':planque', $planqueConcernes);

    $addMission = $req->execute();

    if($addMission)
    {
        echo "Mission au nom de ".$titre." ajoutée !";
        echo "Code de la mission : ".$code.".";
    }

    }

}

else
{
    echo 'Erreur !';
}