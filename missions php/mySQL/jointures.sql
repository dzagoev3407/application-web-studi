SELECT `contact_concernes`, `contactMissions`.`id`
FROM `missions` 
INNER JOIN `contactMissions`
ON `missions`.`contact_concernes` = `contactMissions`.`id`; /* Jointure entre la mission et son contact concerné */

SELECT `nom`, `prenom` `contact_concernes`, `missions`.`code`
FROM `contactMissions` 
INNER JOIN `missions`
ON `contactMissions`.`code` = `missions`.`code`;

SELECT * FROM `contactMissions` 
INNER JOIN missions 
WHERE contactMissions.id = missions.contact_concernes; /* Jointure entre l'id du contact au contact correspondant de la mission */

SELECT * FROM `missions` 
INNER JOIN planque 
WHERE missions.planque_concernes = planque.id; /* Jointure entre la planque concernes et son ID propre.