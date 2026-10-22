<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/app/Core/Database.php';
require_once __DIR__ . '/app/Models/Requete.php';

$requete = new Requete(Database::getInstance()->getConnection());
$numero = 2;
$titre = 'Requête 2 : Les trois premiers salariés';
$enonce = 'Afficher le nom, le prénom et l’adresse e-mail des trois premiers salariés par ordre alphabétique de nom.';
$colonnes = ['Nom', 'Prénom', 'Email'];
$donnees = $requete->getRequete2();
require __DIR__ . '/app/Views/requetes/show.php';
