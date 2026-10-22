<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/app/Core/Database.php';
require_once __DIR__ . '/app/Models/Requete.php';

$requete = new Requete(Database::getInstance()->getConnection());
$numero = 1;
$titre = 'Requête 1 : Liste des salariés par ordre alphabétique';
$enonce = 'Afficher le nom, le prénom et l’adresse e-mail de tous les salariés, triés par nom puis par prénom.';
$colonnes = ['Nom', 'Prénom', 'Email'];
$donnees = $requete->getRequete1();
require __DIR__ . '/app/Views/requetes/show.php';
