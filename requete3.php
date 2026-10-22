<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/app/Core/Database.php';
require_once __DIR__ . '/app/Models/Requete.php';

$requete = new Requete(Database::getInstance()->getConnection());
$numero = 3;
$titre = 'Requête 3 : Salariés du service Support & Réseaux';
$enonce = 'Afficher le nom, le prénom, l’adresse e-mail et le service des salariés du service dont l’identifiant est 2.';
$colonnes = ['Nom', 'Prénom', 'Email', 'Service'];
$donnees = $requete->getRequete3();
require __DIR__ . '/app/Views/requetes/show.php';
