<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/app/Core/Database.php';
require_once __DIR__ . '/app/Models/Requete.php';

$requete = new Requete(Database::getInstance()->getConnection());
$numero = 7;
$titre = 'Requête 7 : Nombre total de salariés';
$enonce = 'Afficher le nombre total de salariés enregistrés dans la base de données.';
$colonnes = ['Nombre de salariés'];
$donnees = $requete->getRequete7();
require __DIR__ . '/app/Views/requetes/show.php';
