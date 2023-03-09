<?php

/* ==== Selection de la table planque ==== */

$all = "SELECT * FROM `planque`;";

$displayAll = $db->query($all);

/* Adresses des planques dispo */

$adresses = "SELECT `adresse` 
             FROM `planque` 
             ORDER BY `adresse` DESC";

$displayAdresse = $db->query($adresses);