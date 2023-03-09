<?php

session_start();

require "../mySQL/cnx.php";

if(isset($_POST["connect"]))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($mdp))
    {
        $admin = [$nom, $prenom, $email, $mdp];

        if($admin)
        {
            $sql = "SELECT * FROM `admin` 
                    WHERE `email` = '$email' ";
                    
            $result = $db->prepare($sql);
            $result->execute();

            if($result->rowCount() > 0)
            {
                $data = $result->fetchAll();

                if(password_verify($mdp, $data[0]["mdp"]))
                {
                    $_SESSION['email'] = $email;
                    $emailAdmin = 'kevin.bonnefoy8407@outlook.fr';
                    $emailAdminDeux = 'sss@gmail.com';

                    if($_SESSION['email'] === $emailAdmin)
                    {
                        $url = 'dashboard.php';
                        header("Location: $url");
                    }
                    else // Sinon si ce n'est pas le bon email rediriger vers le formulaire de connexion
                    {
                       echo 'erreur ! vous êtes pas admin !';
                    }
                    
                }
            }
            else
            {
                $urlRedirectForm = 'form.php';
                header("Location: $urlRedirectForm");
            }
        }
    }
}