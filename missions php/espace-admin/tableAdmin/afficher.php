<?php

include '../../mySQL/cnx.php';

$sql = "SELECT DISTINCT `nom`, `prenom`, `email` 
        FROM `admin` 
        ORDER BY `id` DESC";

$req = $db->query($sql);

$displayAdmins = $req->fetchAll();

/* Dernières missions disponible du plus récents au plus ancien */

$missionContentSql = "SELECT `titre`, `description`, `pays` 
                      FROM `missions` 
                      ORDER BY `id` DESC";

$reqMissionContent = $db->query($missionContentSql);

$displayMissionContentDesc = $reqMissionContent->fetchAll();

/* Nombre des 3 dernières missions disponible */

$titreMissions = "SELECT `titre`, `description`, `pays`
                  FROM `missions` 
                  ORDER BY `id` 
                  DESC LIMIT 3";

$reqMission = $db->query($titreMissions);

$displayMissions = $reqMission->fetchAll();

$sqlNombreMissionsDispo = "SELECT COUNT(*) AS `id` FROM `missions`";

$reqMissionDispo = $db->query($sqlNombreMissionsDispo);

$displayMissionsDispos = $reqMissionDispo->fetchAll();

/* Nombre de planque disponible */

$sqlPlanqueDispos = "SELECT COUNT(*) AS `id` FROM `planque`";

$reqPlanqueDispos = $db->query($sqlPlanqueDispos);

$displayPlanqueDispo = $reqPlanqueDispos->fetchAll();

/* Afficher les agents disponible */

/* ==== Selection de la table planque ==== */

$displayAgentsDispo = "SELECT * FROM `agents` 
                       ORDER BY `id` DESC";

$displayAgents = $db->query($displayAgentsDispo);

/* Adresses des planques dispo */

$displayContactsDispo = "SELECT * FROM `contactMissions` 
                         ORDER BY `id` DESC";

$displayContact = $db->query($displayContactsDispo);


$displayCiblesDispo = "SELECT * FROM `cibles` 
                       ORDER BY `id` DESC";

$displayCibles = $db->query($displayCiblesDispo);