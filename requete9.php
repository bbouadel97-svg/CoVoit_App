<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/app/Core/Database.php';
require_once __DIR__ . '/app/Models/Requete.php';

$requete = new Requete(Database::getInstance()->getConnection());
$numero = 9;
$titre = 'Requête 9 : Salariés et leurs voitures';
$enonce = 'Afficher le nom et le prénom des salariés avec la marque, le modèle et l’immatriculation de leur voiture.';
$colonnes = ['Nom', 'Prénom', 'Marque', 'Modèle', 'Immatriculation'];
$donnees = $requete->getRequete9();
require __DIR__ . '/app/Views/show.php';
