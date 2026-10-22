<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/app/Core/Database.php';
require_once __DIR__ . '/app/Models/Requete.php';

$requete = new Requete(Database::getInstance()->getConnection());
$numero = 5;
$titre = 'Requête 5 : Salariés dont le nom commence par M';
$enonce = 'Afficher le nom, le prénom et l’adresse e-mail des salariés dont le nom commence par la lettre M.';
$colonnes = ['Nom', 'Prénom', 'Email'];
$donnees = $requete->getRequete5();
require __DIR__ . '/app/Views/requetes/show.php';
