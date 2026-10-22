<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/app/Core/Database.php';
require_once __DIR__ . '/app/Models/Requete.php';

$requete = new Requete(Database::getInstance()->getConnection());
$numero = 8;
$titre = 'Requête 8 : Nombre de salariés par service';
$enonce = 'Afficher le nom de chaque service et le nombre de salariés qui lui sont rattachés.';
$colonnes = ['Service', 'Nombre de salariés'];
$donnees = $requete->getRequete8();
require __DIR__ . '/app/Views/show.php';
