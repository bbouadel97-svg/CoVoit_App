<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/app/Core/Database.php';
require_once __DIR__ . '/app/Models/Requete.php';

$requete = new Requete(Database::getInstance()->getConnection());
$numero = 4;
$titre = 'Requête 4 : Voitures de cinq places ou plus';
$enonce = 'Afficher l’immatriculation, la marque, le modèle et le nombre de places des voitures disposant d’au moins cinq places.';
$colonnes = ['Immatriculation', 'Marque', 'Modèle', 'Nombre de places'];
$donnees = $requete->getRequete4();
require __DIR__ . '/app/Views/requetes/show.php';
