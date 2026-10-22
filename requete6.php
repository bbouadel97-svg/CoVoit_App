<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/app/Core/Database.php';
require_once __DIR__ . '/app/Models/Requete.php';

$requete = new Requete(Database::getInstance()->getConnection());
$numero = 6;
$titre = 'Requête 6 : Salariés sans voiture';
$enonce = 'Afficher le nom, le prénom et l’adresse e-mail des salariés qui ne possèdent aucune voiture.';
$colonnes = ['Nom', 'Prénom', 'Email'];
$donnees = $requete->getRequete6();
require __DIR__ . '/app/Views/show.php';
