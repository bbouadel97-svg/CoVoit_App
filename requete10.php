<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/app/Core/Database.php';
require_once __DIR__ . '/app/Models/Requete.php';

$requete = new Requete(Database::getInstance()->getConnection());
$numero = 10;
$titre = 'Requête 10 : Demandes par covoiturage';
$enonce = 'Afficher l’identifiant, la date et l’heure de départ de chaque covoiturage, ainsi que son nombre de demandes.';
$colonnes = ['ID du covoiturage', 'Date', 'Heure de départ', 'Nombre de demandes'];
$donnees = $requete->getRequete10();
require __DIR__ . '/app/Views/show.php';
